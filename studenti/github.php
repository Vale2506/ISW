<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pagini_interne.css">
    <link rel="stylesheet" href="github.css">
    <title>Despre GitHub</title>
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
        <h1>Despre GitHub</h1>

        <div class="sectiune">
            <h2>Ce este GitHub?</h2>
            <p>GitHub reprezintă platforma centrală pentru managementul ciclului de viață al dezvoltării software.
                Utilizând sistemul de control al versiunilor Git, aceasta permite echipelor să colaboreze eficient,
                asigurând un istoric complet al modificărilor și o integritate absolută a codului sursă.</p>
        </div>

        <div class="sectiune">
            <h2>Ce este Git?</h2>
            <p>Git este un sistem de control al versiunilor distribuit, creat de Linus Torvalds în 2005.
                Acesta permite urmărirea modificărilor din cod și colaborarea între mai mulți dezvoltatori.</p>
            <h3>Comenzi Git esențiale</h3>
            <ul>
                <li><strong>git init</strong> — inițializează un repository nou</li>
                <li><strong>git add</strong> — adaugă fișiere pentru commit</li>
                <li><strong>git commit</strong> — salvează modificările</li>
                <li><strong>git push</strong> — trimite codul pe GitHub</li>
                <li><strong>git pull</strong> — descarcă ultimele modificări</li>
                <li><strong>git clone</strong> — clonează un repository existent</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Funcționalități GitHub</h2>
            <ul>
                <li>Repositories — stocare și organizare cod</li>
                <li>Pull Requests — propuneri de modificări cu review</li>
                <li>Issues — urmărirea bug-urilor și task-urilor</li>
                <li>GitHub Actions — automatizare CI/CD</li>
                <li>GitHub Pages — hosting gratuit pentru site-uri statice</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>De ce este important?</h2>
            <p>GitHub este folosit de peste 100 de milioane de dezvoltatori din întreaga lume.
                Este instrumentul standard pentru colaborare, open source și managementul proiectelor software.</p>
        </div>

        <div class="sectiune">
            <h2>Quiz GitHub & Git</h2>
            <p>Ești gata să îți testezi cunoștințele? Quiz-ul conține 5 întrebări grilă bazate strict pe textul de mai sus.</p>
            <br>
            <a href="quiz.php?m=GitHub" class="btn-inapoi" style="margin-top: 5px;">Începe Quiz-ul</a>
        </div>

        <a href="pagina_principala.php" class="btn-inapoi">← Înapoi la pagina principală</a>
    </main>

    <script src="script.js"></script>
</body>

</html>
