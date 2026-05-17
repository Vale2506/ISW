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
            'text' => '4. Care este un avantaj specific al limbajului Python?',
            'options' => [
                'Sintaxă greoaie' => 'O sintaxă complexă și greu de citit',
                'Prototipare rapidă' => 'Este ideal pentru prototipare rapidă',
                'Rulează doar pe Windows' => 'Rulează exclusiv pe sisteme Windows'
            ],
            'correct' => 'Prototipare rapidă'
        ],
        'q5' => [
            'text' => '5. Ce framework-uri web au fost menționate ca fiind folosite cu Python?',
            'options' => [
                'Django, Flask' => 'Django și Flask',
                'Spring, Hibernate' => 'Spring și Hibernate',
                'React, Angular' => 'React și Angular'
            ],
            'correct' => 'Django, Flask'
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
            'text' => '4. Ce înseamnă STL în C++?',
            'options' => [
                'Standard Template Library' => 'Standard Template Library',
                'System Type Link' => 'System Type Link',
                'Simple Text Language' => 'Simple Text Language'
            ],
            'correct' => 'Standard Template Library'
        ],
        'q5' => [
            'text' => '5. Ce funcționalitate esențială oferă C# dezvoltat de Microsoft?',
            'options' => [
                'Garbage collection automat' => 'Garbage collection automat',
                'Acces manual la memorie' => 'Management manual al memoriei (fără alocare dinamică)',
                'Rulează doar pe Linux' => 'Suport exclusiv pentru Linux'
            ],
            'correct' => 'Garbage collection automat'
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
            'text' => '4. Cum se obține o performanță excelentă în Java (conform avantajelor din curs)?',
            'options' => [
                'Prin JIT compilation' => 'Prin compilare JIT (Just-In-Time)',
                'Prin scrierea exclusivă în C' => 'Transformând codul în limbaj C',
                'Prin dezactivarea securității' => 'Oprind mecanismele de securitate'
            ],
            'correct' => 'Prin JIT compilation'
        ],
        'q5' => [
            'text' => '5. Ce reprezintă Garbage Collection în conceptele cheie Java?',
            'options' => [
                'Gestionarea automată a memoriei' => 'Mecanism de gestionare automată a memoriei',
                'Ștergerea codului vechi' => 'O funcție care șterge codul vechi',
                'Tratarea erorilor' => 'Un mecanism de tratare a erorilor'
            ],
            'correct' => 'Gestionarea automată a memoriei'
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
            'text' => '3. Ce aspecte controlează CSS-ul?',
            'options' => [
                'Aspectul vizual' => 'Aspectul vizual: culori, fonturi, layout-uri',
                'Baza de date' => 'Conexiunea cu baza de date SQL',
                'Logica din spate' => 'Logica de autentificare a utilizatorilor'
            ],
            'correct' => 'Aspectul vizual'
        ],
        'q4' => [
            'text' => '4. Din ce este alcătuit Box Model-ul în CSS?',
            'options' => [
                'margin, border, padding, content' => 'margin, border, padding, content',
                'header, footer, nav' => 'header, footer, nav',
                'variabile și funcții' => 'variabile, funcții și array-uri'
            ],
            'correct' => 'margin, border, padding, content'
        ],
        'q5' => [
            'text' => '5. Care este metafora folosită în curs pentru a descrie relația dintre ele?',
            'options' => [
                'Schelet și haine' => 'HTML oferă structura (scheletul), iar CSS oferă stilul (hainele)',
                'Motor și roți' => 'HTML este motorul, iar CSS sunt roțile mașinii',
                'Server și client' => 'HTML este serverul, iar CSS este clientul'
            ],
            'correct' => 'Schelet și haine'
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
            'text' => '2. Ce comandă se folosește pentru a trimite codul pe GitHub?',
            'options' => [
                'git push' => 'git push',
                'git init' => 'git init',
                'git pull' => 'git pull'
            ],
            'correct' => 'git push'
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
            'text' => '4. Pentru ce sunt folosite "GitHub Pages"?',
            'options' => [
                'Hosting gratuit' => 'Hosting gratuit pentru site-uri statice',
                'Urmărirea bug-urilor' => 'Urmărirea bug-urilor',
                'Automatizare CI/CD' => 'Automatizare proceselor CI/CD'
            ],
            'correct' => 'Hosting gratuit'
        ],
        'q5' => [
            'text' => '5. Câți dezvoltatori folosesc GitHub la nivel mondial (conform textului)?',
            'options' => [
                'Peste 100 de milioane' => 'Peste 100 de milioane de dezvoltatori',
                'Sub un milion' => 'Mai puțin de 1 milion',
                'Aproximativ 10 mii' => 'Aproximativ 10 mii de dezvoltatori'
            ],
            'correct' => 'Peste 100 de milioane'
        ]
    ]
];
?>
