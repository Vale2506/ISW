<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pagini_interne.css">
    <link rel="stylesheet" href="C.css">
    <title>Despre C, C# și C++</title>
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
        <h1>Despre C, C# și C++</h1>

        <div class="sectiune">
            <h2>C — Fundamentul Arhitecturii Software</h2>
            <p>C este un limbaj de programare procedural, creat în 1972 de Dennis Ritchie la Bell Labs.
                Este considerat „bunicul" majorității limbajelor moderne de programare.</p>
            <ul>
                <li>Acces direct la memorie prin pointeri</li>
                <li>Performanță ridicată și control asupra resurselor hardware</li>
                <li>Folosit în sisteme de operare, drivere și sisteme embedded</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>C++ — Performanță la Nivel Enterprise</h2>
            <p>C++ a fost creat de Bjarne Stroustrup în 1979 ca o extensie a limbajului C, adăugând
                programarea orientată pe obiecte (OOP).</p>
            <ul>
                <li>Combină programarea procedurală cu cea orientată pe obiecte</li>
                <li>Folosit în motoare de jocuri, browsere web și aplicații de performanță</li>
                <li>Biblioteca Standard Template Library (STL) oferă structuri de date optimizate</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>C# — Inovație și Productivitate în Mediul Corporate</h2>
            <p>C# a fost dezvoltat de Microsoft, lansat în 2000, ca parte a platformei .NET.
                Este un limbaj modern, orientat pe obiecte, cu o sintaxă similară cu Java.</p>
            <ul>
                <li>Dezvoltare de aplicații Windows, web (ASP.NET) și jocuri (Unity)</li>
                <li>Garbage collection automat — gestionare simplificată a memoriei</li>
                <li>Suport excelent pentru programare asincronă</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Quiz C/C++/C#</h2>
            <p>Ești gata să îți testezi cunoștințele? Quiz-ul conține 5 întrebări grilă bazate strict pe textul de mai sus.</p>
            <br>
            <a href="quiz.php?m=C" class="btn-inapoi" style="margin-top: 5px;">Începe Quiz-ul</a>
        </div>

        <a href="pagina_principala.php" class="btn-inapoi">← Înapoi la pagina principală</a>
    </main>

    <script src="script.js"></script>
</body>

</html>
