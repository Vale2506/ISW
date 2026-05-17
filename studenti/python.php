<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pagini_interne.css">
    <link rel="stylesheet" href="python.css">
    <title>Despre Python</title>
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
        <h1>Despre Python</h1>

        <div class="sectiune">
            <h2>Ce este Python?</h2>
            <p>Python este un limbaj de programare de nivel înalt, interpretat, cu o sintaxă clară și ușor de citit.
                A fost creat de Guido van Rossum și lansat pentru prima dată în 1991.</p>
            <p>Python s-a consolidat ca unul dintre cele mai relevante și versatile limbaje de programare.
                Recunoscut pentru eficiența sa operațională și sintaxa curată, acesta reprezintă alegerea
                strategică atât pentru startup-uri inovatoare, cât și pentru companii din top.</p>
        </div>

        <div class="sectiune">
            <h2>Domenii de utilizare</h2>
            <ul>
                <li>Dezvoltare web (Django, Flask)</li>
                <li>Inteligență artificială și Machine Learning</li>
                <li>Analiza datelor și Data Science</li>
                <li>Automatizare și scripting</li>
                <li>Dezvoltare de jocuri</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Avantaje</h2>
            <ul>
                <li>Sintaxă simplă și ușor de învățat</li>
                <li>Comunitate vastă și documentație excelentă</li>
                <li>Biblioteci și framework-uri numeroase</li>
                <li>Portabilitate — rulează pe mai multe sisteme de operare</li>
                <li>Ideal pentru prototipare rapidă</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Quiz Python</h2>
            <p>Ești gata să îți testezi cunoștințele? Quiz-ul conține 5 întrebări grilă bazate strict pe textul de mai sus.</p>
            <br>
            <a href="quiz.php?m=Python" class="btn-inapoi" style="margin-top: 5px;">Începe Quiz-ul</a>
        </div>

        <a href="pagina_principala.php" class="btn-inapoi">← Înapoi la pagina principală</a>
    </main>

    <script src="script.js"></script>
</body>

</html>
