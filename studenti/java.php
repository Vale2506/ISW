<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pagini_interne.css">
    <link rel="stylesheet" href="java.css">
    <title>Despre Java</title>
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
        <h1>Despre Java</h1>

        <div class="sectiune">
            <h2>Ce este Java?</h2>
            <p>Java este un limbaj de programare orientat pe obiecte, creat de James Gosling la Sun Microsystems
                și lansat în 1995. Construit pe principiul "Write Once, Run Anywhere", Java oferă o portabilitate
                remarcabilă, permițând rularea soluțiilor software pe orice infrastructură care dispune de o
                mașină virtuală (JVM).</p>
        </div>

        <div class="sectiune">
            <h2>Domenii de utilizare</h2>
            <ul>
                <li>Aplicații enterprise (bănci, corporații)</li>
                <li>Dezvoltare Android</li>
                <li>Aplicații web (Spring, Jakarta EE)</li>
                <li>Sisteme distribuite și microservicii</li>
                <li>Big Data (Apache Hadoop, Spark)</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Avantaje</h2>
            <ul>
                <li>Portabilitate — „Write Once, Run Anywhere"</li>
                <li>Securitate robustă încorporată</li>
                <li>Multithreading nativ</li>
                <li>Ecosistem matur cu mii de biblioteci</li>
                <li>Performanță excelentă prin JIT (Just-In-Time) compilation</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Concepte cheie</h2>
            <ul>
                <li>Programare orientată pe obiecte (OOP): clase, obiecte, moștenire, polimorfism</li>
                <li>JVM (Java Virtual Machine) — mediul de execuție</li>
                <li>Garbage Collection — gestionare automată a memoriei</li>
                <li>Excepții — mecanism de tratare a erorilor</li>
            </ul>
        </div>

        <div class="sectiune">
            <h2>Exemplu practic: Java</h2>
            <p>În Java, absolut tot codul trebuie să fie conținut în interiorul unei <strong>clase</strong> (concepție pură de OOP). Iată exemplul de bază:</p>
            <div class="code-block">
<pre><code>public class Main {
    public static void main(String[] args) {
        String nume = "Student";
        int nota = 10;
        
        System.out.println(nume + " a luat nota " + nota);
    }
}</code></pre>
            </div>
            <p>Metoda <code>public static void main(String[] args)</code> reprezintă punctul de intrare (start) al oricărei aplicații Java.</p>
        </div>

        <div class="sectiune">
            <h2>Quiz Java</h2>
            <p>Ești gata să îți testezi cunoștințele? Quiz-ul conține 5 întrebări grilă bazate strict pe textul de mai sus.</p>
            <br>
            <a href="quiz.php?m=Java" class="btn-inapoi" style="margin-top: 5px;">Începe Quiz-ul</a>
        </div>

        <a href="pagina_principala.php" class="btn-inapoi">← Înapoi la pagina principală</a>
    </main>

    <script src="script.js"></script>
</body>

</html>
