<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] != "POST") {
    header("Location: pagina_principala.php");
    exit;
}

$materie = $_POST['materie'] ?? '';
$scor = 0;
$feedback = [];

require 'quiz_data.php';

if (isset($quizzes[$materie])) {
    foreach ($quizzes[$materie] as $key => $data) {
        $user_answer = $_POST[$key] ?? 'Fără răspuns';
        $is_correct = ($user_answer == $data['correct']);
        
        if ($is_correct) {
            $scor += 20;
        }

        $feedback[] = [
            'question' => $data['text'],
            'user_answer' => $user_answer,
            'correct_answer' => $data['correct'],
            'is_correct' => $is_correct
        ];
    }

    // Salvăm scorul în baza de date
    $stmt = $pdo->prepare("INSERT INTO quiz_scores (user_id, materie, scor) VALUES (?, ?, ?)");
    $stmt->execute([$_SESSION['user_id'], $materie, $scor]);
} else {
    die("Eroare: Materia nu a fost găsită.");
}
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultat Quiz - Portal Tehnologic</title>
    <link rel="stylesheet" href="pagini_interne.css">
    <style>
        .result-container { max-width: 800px; margin: 50px auto; padding: 20px; background: var(--mov-foarte-deschis); border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); }
        .feedback-item { margin-bottom: 20px; padding: 15px; border-radius: 5px; border-left: 5px solid; }
        .feedback-correct { background-color: #e8f5e9; border-left-color: #4caf50; }
        .feedback-incorrect { background-color: #ffebee; border-left-color: #f44336; }
        .btn-inapoi { display: inline-block; margin-top: 20px; }
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
        <div class="result-container">
            <h2 style="color: var(--mov-inchis);">Rezultate Quiz: <?php echo htmlspecialchars($materie); ?></h2>
            <p>Scorul tău final: <strong><?php echo $scor; ?> puncte</strong></p>
            
            <h3>Feedback detalii:</h3>
            <?php foreach ($feedback as $item): ?>
                <div class="feedback-item <?php echo $item['is_correct'] ? 'feedback-correct' : 'feedback-incorrect'; ?>">
                    <p><strong>Întrebare:</strong> <?php echo htmlspecialchars($item['question']); ?></p>
                    <p><strong>Răspunsul tău:</strong> <?php echo htmlspecialchars($item['user_answer']); ?> 
                        <?php if ($item['is_correct']): ?>
                            <span style="color: #4caf50; font-weight: bold;">(Corect!) ✓</span>
                        <?php else: ?>
                            <span style="color: #f44336; font-weight: bold;">(Greșit) ✗</span>
                        <?php endif; ?>
                    </p>
                    <?php if (!$item['is_correct']): ?>
                        <p style="color: #d32f2f;"><strong>Răspunsul corect era:</strong> <?php echo htmlspecialchars($item['correct_answer']); ?></p>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>

            <a href="profil.php" class="btn-inapoi">Mergi la profilul tău</a>
            <a href="pagina_principala.php" class="btn-inapoi" style="background: var(--mov-mediu);">Întoarce-te la cursuri</a>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>
