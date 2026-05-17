<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$nume = $_SESSION['user_nume'];

// Preluăm scorurile
$stmt = $pdo->prepare("SELECT materie, scor, created_at FROM quiz_scores WHERE user_id = ? ORDER BY created_at DESC");
$stmt->execute([$user_id]);
$scoruri = $stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contul Meu - Portal Tehnologic</title>
    <link rel="stylesheet" href="pagini_interne.css">
    <style>
        .profile-container { max-width: 800px; margin: 50px auto; padding: 20px; background: var(--mov-foarte-deschis); border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .score-table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        .score-table th, .score-table td { border: 1px solid var(--mov-deschis); padding: 12px; text-align: left; }
        .score-table th { background-color: var(--mov-principal); color: white; }
        .logout-btn { display: inline-block; padding: 10px 20px; background: #e74c3c; color: white; text-decoration: none; border-radius: 5px; margin-top: 20px; }
        .logout-btn:hover { background: #c0392b; }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="photo/logo_transp.png" alt="Logo-ul Meu">
        </div>
        <nav>
            <button type="button" class="btn-meniu" onclick="toggleMeniu()">☰</button>
            <ul class="lista-meniu" id="meniu">
                <li><a href="pagina_principala.php">Acasă</a></li>
                <li><a href="python.php">Python</a></li>
                <li><a href="C.php">C / C++ / C#</a></li>
                <li><a href="htmlcss.php">HTML & CSS</a></li>
                <li><a href="java.php">Java</a></li>
                <li><a href="github.php">GitHub</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="profil.php">Contul Meu</a></li>
                <?php else: ?>
                    <li><a href="login.php">Autentificare</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main>
        <div class="profile-container">
            <h2 style="color: var(--mov-inchis);">Salutare, <?php echo htmlspecialchars($nume); ?>!</h2>
            <p>Acesta este panoul tău de student. Mai jos poți vedea punctajele obținute la teste.</p>
            
            <h3>Istoric Quiz-uri</h3>
            <?php if (count($scoruri) > 0): ?>
                <table class="score-table">
                    <tr>
                        <th>Tehnologie</th>
                        <th>Scor Obținut</th>
                        <th>Data susținerii</th>
                    </tr>
                    <?php foreach ($scoruri as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['materie']); ?></td>
                            <td><strong><?php echo $row['scor']; ?> puncte</strong></td>
                            <td><?php echo date('d-m-Y H:i', strtotime($row['created_at'])); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            <?php else: ?>
                <p>Încă nu ai rezolvat niciun test. Du-te pe pagina unui limbaj pentru a da testul!</p>
            <?php endif; ?>

            <a href="logout.php" class="logout-btn">Deconectare</a>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>
