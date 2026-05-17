<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="pagina_principala.css">
    <title>Pagina Principală</title>
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
        <section class="grid-carduri">
            <article>
                <h2>Despre Python</h2>
                <p>Python s-a consolidat ca unul dintre cele mai relevante și versatile limbaje de programare.
                    Recunoscut pentru eficiența sa operațională și sintaxa curată, acesta reprezintă alegerea strategică
                    atât pentru startup-uri inovatoare, cât și pentru companii din top.</p>
                <a href="python.php">
                    <button>Read More</button>
                </a>
            </article>

            <article>
                <h2>Despre C, C# si C++</h2>
                <p>C: Fundamentul Arhitecturii Software</p>
                <p>C++: Performanță la Nivel Enterprise</p>
                <p>C#: Inovație și Productivitate în Mediul Corporate</p>
                <a href="C.php">
                    <button>Read More</button>
                </a>
            </article>

            <article>
                <h2>Despre HTML, CSS</h2>
                <p>HTML: Structura și Arhitectura Informației</p>
                <p>CSS: Identitate Vizuală și Experiență Digitală</p>
                <a href="htmlcss.php">
                    <button>Read More</button>
                </a>
            </article>

            <article>
                <h2>Despre Java</h2>
                <p>Java rămâne unul dintre cele mai de încredere limbaje de programare la nivel global, fiind pilonul
                    central în dezvoltarea aplicațiilor de tip enterprise. Construit pe principiul "Write Once, Run
                    Anywhere", Java oferă o portabilitate remarcabilă, permițând rularea soluțiilor software pe orice
                    infrastructură care dispune de o mașină virtuală.</p>
                <a href="java.php">
                    <button>Read More</button>
                </a>
            </article>

            <article class="card-centrat">
                <h2>Despre GitHub</h2>
                <p>GitHub reprezintă platforma centrală pentru managementul ciclului de viață al dezvoltării software.
                    Utilizând sistemul de control al versiunilor Git, aceasta permite echipelor să colaboreze eficient,
                    asigurând un istoric complet al modificărilor și o integritate absolută a codului sursă.</p>
                <a href="github.php">
                    <button>Read More</button>
                </a>
            </article>
        </section>
    </main>

    <script src="script.js"></script>
</body>

</html>