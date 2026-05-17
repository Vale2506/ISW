<?php
session_start();
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $parola = password_hash($_POST['parola'], PASSWORD_DEFAULT);

    $stmt = $pdo->prepare("INSERT INTO users (nume, email, parola) VALUES (?, ?, ?)");
    try {
        $stmt->execute([$nume, $email, $parola]);
        header("Location: login.php?msg=success");
        exit;
    } catch (PDOException $e) {
        $error = "Eroare: Email-ul este deja folosit!";
    }
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Înregistrare - Portal Tehnologic</title>
    <link rel="stylesheet" href="pagini_interne.css">
    <style>
        .auth-container { max-width: 400px; margin: 50px auto; padding: 20px; background: var(--mov-foarte-deschis); border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .auth-container input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid var(--mov-deschis); border-radius: 5px; box-sizing: border-box; }
        .auth-container button { width: 100%; padding: 10px; background: var(--mov-principal); color: white; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; }
        .auth-container button:hover { background: var(--mov-mediu); }
        .error { color: red; text-align: center; }
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
        <div class="auth-container">
            <h2 style="text-align: center; color: var(--mov-inchis);">Înregistrare Cont Nou</h2>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <form method="POST">
                <input type="text" name="nume" placeholder="Numele tău complet" required>
                <input type="email" name="email" placeholder="Adresa de Email" required>
                <input type="password" name="parola" placeholder="Parolă" required>
                <button type="submit">Creează Cont</button>
            </form>
            <p style="text-align: center; margin-top: 15px;">Ai deja cont? <a href="login.php" style="color: var(--mov-principal);">Loghează-te</a></p>
        </div>
    </main>
    <script src="script.js"></script>
</body>
</html>
