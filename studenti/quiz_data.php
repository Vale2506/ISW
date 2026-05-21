<?php
$quizzes = [
    'Python' => [
        'q1' => [
            'text' => '1. Cine a creat limbajul Python și în ce an a fost lansat?',
            'options' => [
                'Guido van Rossum, 1991' => 'Guido van Rossum, în anul 1991',
                'Linus Torvalds, 1995' => 'Linus Torvalds, în anul 1995',
                'James Gosling, 1989' => 'James Gosling, în anul 1989'
            ],
            'correct' => 'Guido van Rossum, 1991'
        ],
        'q2' => [
            'text' => '2. Pentru ce fel de companii reprezintă Python o alegere strategică (conform textului)?',
            'options' => [
                'Doar pentru bănci' => 'Doar pentru instituții bancare',
                'Startup-uri și companii top' => 'Startup-uri inovatoare și companii din top',
                'Doar pentru dezvoltatorii de jocuri' => 'Doar pentru studiourile de jocuri video'
            ],
            'correct' => 'Startup-uri și companii top'
        ],
        'q3' => [
            'text' => '3. Care dintre următoarele este un domeniu de utilizare pentru Python menționat în curs?',
            'options' => [
                'Inteligență artificială și Machine Learning' => 'Inteligență artificială și Machine Learning',
                'Crearea de sisteme de operare' => 'Dezvoltarea sistemelor de operare de bază',
                'Hardware drivers' => 'Scrierea de drivere hardware'
            ],
            'correct' => 'Inteligență artificială și Machine Learning'
        ],
        'q4' => [
            'text' => '4. Ce va afișa următorul cod Python?<br><div class="code-block"><pre><code>def salut_student(nume):<br>    print("Salutare, " + nume + "!")<br><br>salut_student("Alex")</code></pre></div>',
            'options' => [
                'Eroare' => 'Eroare de sintaxă',
                'Salutare, Alex!' => 'Salutare, Alex!',
                'Salutare, nume!' => 'Salutare, nume!'
            ],
            'correct' => 'Salutare, Alex!'
        ],
        'q5' => [
            'text' => '5. În codul Python, ce lipsește intenționat la finalul instrucțiunilor (cum ar fi "print"), spre deosebire de C++ sau Java?',
            'options' => [
                'Acoladele' => 'Acoladele',
                'Punct și virgulă (;)' => 'Punct și virgulă (;)',
                'Ghilimelele' => 'Ghilimelele'
            ],
            'correct' => 'Punct și virgulă (;)'
        ]
    ],
    'C' => [
        'q1' => [
            'text' => '1. În ce an și unde a fost creat limbajul C?',
            'options' => [
                '1972 la Bell Labs' => 'În 1972 de Dennis Ritchie la Bell Labs',
                '1995 la Sun Microsystems' => 'În 1995 de James Gosling la Sun Microsystems',
                '2000 la Microsoft' => 'În 2000 la Microsoft'
            ],
            'correct' => '1972 la Bell Labs'
        ],
        'q2' => [
            'text' => '2. Prin ce caracteristică permite limbajul C accesul direct la memorie?',
            'options' => [
                'Prin garbage collection' => 'Prin Garbage Collection automat',
                'Prin pointeri' => 'Prin utilizarea pointerilor',
                'Prin clase virtuale' => 'Prin mașini virtuale'
            ],
            'correct' => 'Prin pointeri'
        ],
        'q3' => [
            'text' => '3. Ce inovație aduce C++ ca extensie a limbajului C?',
            'options' => [
                'Programarea orientată pe obiecte (OOP)' => 'Programarea orientată pe obiecte (OOP)',
                'Un sistem de operare nou' => 'Un sistem de operare nou',
                'Doar dezvoltarea web' => 'Funcții exclusiv pentru web'
            ],
            'correct' => 'Programarea orientată pe obiecte (OOP)'
        ],
        'q4' => [
            'text' => '4. Privind exemplul de cod C++, cu ce se termină obligatoriu instrucțiunea "cout"?<br><div class="code-block"><pre><code>cout &lt;&lt; "Salutare!" &lt;&lt; endl;</code></pre></div>',
            'options' => [
                'Punct și virgulă (;)' => 'Punct și virgulă (;)',
                'Două puncte (:)' => 'Două puncte (:)',
                'Nimic' => 'Cu nimic, se trece la rândul următor'
            ],
            'correct' => 'Punct și virgulă (;)'
        ],
        'q5' => [
            'text' => '5. Ce face biblioteca <code>&lt;iostream&gt;</code> inclusă la începutul codului C++?',
            'options' => [
                'Grafică' => 'Desenează grafică 3D',
                'Afișare' => 'Permite afișarea textelor pe ecran',
                'Baze de date' => 'Conectează aplicația la baza de date'
            ],
            'correct' => 'Afișare'
        ]
    ],
    'Java' => [
        'q1' => [
            'text' => '1. Cine a creat limbajul Java și când a fost lansat?',
            'options' => [
                'James Gosling, 1995' => 'James Gosling la Sun Microsystems, în 1995',
                'Bjarne Stroustrup, 1979' => 'Bjarne Stroustrup, în 1979',
                'Dennis Ritchie, 1972' => 'Dennis Ritchie, în 1972'
            ],
            'correct' => 'James Gosling, 1995'
        ],
        'q2' => [
            'text' => '2. Care este principiul (deviza) pe care este construit Java?',
            'options' => [
                'Write Once, Run Anywhere' => '"Write Once, Run Anywhere"',
                'Fast and Furious' => '"Fast and Furious"',
                'Compile Once, Run Never' => '"Compile Once, Run Never"'
            ],
            'correct' => 'Write Once, Run Anywhere'
        ],
        'q3' => [
            'text' => '3. Ce permite rularea soluțiilor Java pe orice infrastructură?',
            'options' => [
                'JVM' => 'Mașina virtuală Java (JVM)',
                'Browser-ul web' => 'Un browser web obișnuit',
                'Placa video' => 'O placă video performantă'
            ],
            'correct' => 'JVM'
        ],
        'q4' => [
            'text' => '4. Ce va afișa următorul cod Java?<br><div class="code-block"><pre><code>String nume = "Student";<br>int nota = 10;<br>System.out.println(nume + " a luat nota " + nota);</code></pre></div>',
            'options' => [
                'Student a luat nota 10' => 'Student a luat nota 10',
                'nume a luat nota nota' => 'nume a luat nota nota',
                'Eroare' => 'Eroare de compilare'
            ],
            'correct' => 'Student a luat nota 10'
        ],
        'q5' => [
            'text' => '5. În exemplul de cod Java, cuvintele cheie <code>public class Main</code> demonstrează faptul că în Java:',
            'options' => [
                'Clase' => 'Absolut tot codul trebuie să fie în interiorul unei clase',
                'Fără clase' => 'Clasele sunt opționale',
                'Funcții globale' => 'Se folosesc doar funcții globale ca în C'
            ],
            'correct' => 'Clase'
        ]
    ],
    'HTMLCSS' => [
        'q1' => [
            'text' => '1. Ce este HTML, conform descrierii din curs?',
            'options' => [
                'Limbaj de marcare' => 'Un limbaj de marcare care definește structura conținutului',
                'Limbaj de programare' => 'Un limbaj de programare complex cu logică',
                'Sistem de operare' => 'Un sistem de operare pentru internet'
            ],
            'correct' => 'Limbaj de marcare'
        ],
        'q2' => [
            'text' => '2. Care dintre următoarele sunt tag-uri semantice HTML?',
            'options' => [
                'header, nav, article' => 'header, nav, main, article, footer',
                'color, font, margin' => 'color, font-size, margin',
                'if, else, while' => 'if, else, for, while'
            ],
            'correct' => 'header, nav, article'
        ],
        'q3' => [
            'text' => '3. Din ce este alcătuit Box Model-ul în CSS?',
            'options' => [
                'margin, border, padding, content' => 'margin, border, padding, content',
                'header, footer, nav' => 'header, footer, nav',
                'variabile și funcții' => 'variabile, funcții și array-uri'
            ],
            'correct' => 'margin, border, padding, content'
        ],
        'q4' => [
            'text' => '4. Analizând codul CSS următor, ce aspect vizual primește butonul HTML?<br><div class="code-block"><pre><code>.btn-frumos {<br>    color: white;<br>}</code></pre></div>',
            'options' => [
                'Text alb' => 'Textul din interiorul butonului devine alb',
                'Fundal alb' => 'Fundalul butonului devine alb',
                'Margine albă' => 'Butonul primește o margine albă'
            ],
            'correct' => 'Text alb'
        ],
        'q5' => [
            'text' => '5. În codul HTML, atributul <code>class="btn-frumos"</code> este folosit în CSS cu ce simbol în față pentru a fi selectat?',
            'options' => [
                'Punct (.)' => 'Punct (.) - de exemplu: .btn-frumos',
                'Diez (#)' => 'Diez (#) - de exemplu: #btn-frumos',
                'Fără simbol' => 'Fără niciun simbol - de exemplu: btn-frumos'
            ],
            'correct' => 'Punct (.)'
        ]
    ],
    'GitHub' => [
        'q1' => [
            'text' => '1. Cine a creat sistemul de control al versiunilor Git și în ce an?',
            'options' => [
                'Linus Torvalds în 2005' => 'Linus Torvalds în 2005',
                'Dennis Ritchie în 1972' => 'Dennis Ritchie în 1972',
                'Bill Gates în 2000' => 'Bill Gates în anul 2000'
            ],
            'correct' => 'Linus Torvalds în 2005'
        ],
        'q2' => [
            'text' => '2. Pentru ce sunt folosite "GitHub Pages"?',
            'options' => [
                'Hosting gratuit' => 'Hosting gratuit pentru site-uri statice',
                'Urmărirea bug-urilor' => 'Urmărirea bug-urilor',
                'Automatizare CI/CD' => 'Automatizare proceselor CI/CD'
            ],
            'correct' => 'Hosting gratuit'
        ],
        'q3' => [
            'text' => '3. Ce funcționalitate are comanda "git clone"?',
            'options' => [
                'Clonează un repository' => 'Clonează un repository existent',
                'Șterge modificările' => 'Șterge toate modificările din cod',
                'Creează un branch' => 'Creează o ramură (branch) nouă'
            ],
            'correct' => 'Clonează un repository'
        ],
        'q4' => [
            'text' => '4. Care dintre comenzile de mai jos se folosește pentru a salva modificările local, asociindu-le cu un mesaj?<br><div class="code-block"><pre><code>git ______ -m "Mesaj"</code></pre></div>',
            'options' => [
                'commit' => 'commit',
                'push' => 'push',
                'add' => 'add'
            ],
            'correct' => 'commit'
        ],
        'q5' => [
            'text' => '5. Conform fluxului standard prezentat (add -> commit -> push), ce face ultima comandă <code>git push origin main</code>?',
            'options' => [
                'Trimite codul' => 'Trimite modificările pe serverul GitHub',
                'Șterge codul' => 'Șterge fișierele de pe serverul GitHub',
                'Descarcă' => 'Descarcă cele mai noi modificări'
            ],
            'correct' => 'Trimite codul'
        ]
    ]
];
?>
