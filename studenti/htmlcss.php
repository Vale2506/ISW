<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pagini_interne.css">
    <link rel="stylesheet" href="htmlcss.css">
    <title>Despre HTML și CSS</title>
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
        <h1>Despre HTML și CSS</h1>

        <div class="sectiune">
            <h2>HTML — Structura și Arhitectura Informației</h2>
            <p>HTML (HyperText Markup Language) este limbajul standard de marcare utilizat pentru
                crearea și structurarea paginilor web. Nu este un limbaj de programare, ci un limbaj
                de marcare care definește structura conținutului.</p>
            <h3>Elemente cheie HTML</h3>
            <ul>
                <li>Tag-uri semantice: header, nav, main, article, footer</li>
                <li>Formulare pentru interacțiunea cu utilizatorul</li>
                <li>Elemente multimedia: imagini, video, audio</li>
                <li>Tabele pentru organizarea datelor</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>CSS — Identitate Vizuală și Experiență Digitală</h2>
            <p>CSS (Cascading Style Sheets) este limbajul folosit pentru a descrie prezentarea
                unui document HTML. CSS controlează aspectul vizual: culori, fonturi, spațieri,
                layout-uri și animații.</p>
            <h3>Concepte importante CSS</h3>
            <ul>
                <li>Selectori și specificitate</li>
                <li>Box Model: margin, border, padding, content</li>
                <li>Flexbox și CSS Grid pentru layout</li>
                <li>Variabile CSS (Custom Properties)</li>
                <li>Media Queries pentru design responsive</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Cum lucrează împreună?</h2>
            <p>HTML oferă structura (scheletul), iar CSS oferă stilul (hainele).
                Împreună, ele formează baza oricărui site web modern. HTML-ul definește <strong>ce</strong>
                se afișează, iar CSS-ul definește <strong>cum</strong> arată.</p>
        </div>

        <div class="sectiune">
            <h2>Exemplu practic: HTML & CSS</h2>
            <p>Așa cum spuneam, HTML este scheletul, iar CSS-ul îi dă viață. Iată cum arată un buton stilizat:</p>
            <div class="code-block">
<pre><code>&lt;!-- Fișier HTML --&gt;
&lt;button class="btn-frumos"&gt;Apasă-mă!&lt;/button&gt;

&lt;!-- Fișier CSS --&gt;
&lt;style&gt;
.btn-frumos {
    background-color: #6B21A8;
    color: white;
    padding: 10px 20px;
    border-radius: 5px;
    border: none;
}
&lt;/style&gt;</code></pre>
            </div>
            <p>CSS-ul folosește selectorul de clasă (<code>.btn-frumos</code>) pentru a găsi elementul HTML și a-i schimba aspectul vizual.</p>
        </div>

        <div class="sectiune">
            <h2>Quiz HTML & CSS</h2>
            <p>Ești gata să îți testezi cunoștințele? Quiz-ul conține 5 întrebări grilă bazate strict pe textul de mai sus.</p>
            <br>
            <a href="quiz.php?m=HTMLCSS" class="btn-inapoi" style="margin-top: 5px;">Începe Quiz-ul</a>
        </div>

        <a href="pagina_principala.php" class="btn-inapoi">← Înapoi la pagina principală</a>
    </main>

    <script src="script.js"></script>
</body>

</html>
