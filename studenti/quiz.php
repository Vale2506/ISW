<?php
session_start();
require 'db.php';
require 'quiz_data.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$materie = $_GET['m'] ?? '';

if (!isset($quizzes[$materie])) {
    header("Location: pagina_principala.php");
    exit;
}

$quiz = $quizzes[$materie];
?>
<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz <?php echo htmlspecialchars($materie); ?> - Portal Tehnologic</title>
    <link rel="stylesheet" href="pagini_interne.css">
    <style>
        .quiz-container { max-width: 800px; margin: 50px auto; padding: 30px; background: var(--mov-foarte-deschis); border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); border-left: 5px solid var(--mov-principal); }
        .question-block { margin-bottom: 25px; padding-bottom: 15px; border-bottom: 1px solid var(--mov-deschis); }
        .question-block p { font-weight: bold; color: var(--mov-inchis); font-size: 1.1em; }
        .question-block label { display: block; margin: 8px 0; cursor: pointer; color: var(--text-inchis); }
        .question-block input[type="radio"] { margin-right: 10px; }
        .btn-submit { display: inline-block; background-color: var(--mov-principal); color: white; border: none; padding: 12px 30px; border-radius: 6px; font-size: 16px; cursor: pointer; transition: background-color 0.3s; width: 100%; font-weight: bold; }
        .btn-submit:hover { background-color: var(--mov-mediu); }
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
        <div class="quiz-container">
            <h1 style="color: var(--mov-principal); text-align: center; border-bottom: none; margin-bottom: 30px;">Test: <?php echo htmlspecialchars($materie); ?></h1>
            <p style="text-align: center; margin-bottom: 30px;">Alege răspunsul corect pentru fiecare întrebare. Nu poți lăsa întrebări necompletate!</p>

            <form action="submit_quiz.php" method="POST">
                <input type="hidden" name="materie" value="<?php echo htmlspecialchars($materie); ?>">

                <?php foreach ($quiz as $key => $data): ?>
                    <div class="question-block">
                        <p><?php echo htmlspecialchars($data['text']); ?></p>
                        <?php foreach ($data['options'] as $value => $label): ?>
                            <label>
                                <input type="radio" name="<?php echo htmlspecialchars($key); ?>" value="<?php echo htmlspecialchars($value); ?>" required>
                                <?php echo htmlspecialchars($label); ?>
                            </label>
                        <?php endforeach; ?>
                    </div>
                <?php endforeach; ?>

                <button type="submit" class="btn-submit">Trimite Răspunsurile</button>
            </form>
        </div>
    </main>

    <script src="script.js"></script>
</body>
</html>
