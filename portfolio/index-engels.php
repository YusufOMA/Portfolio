<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `portfolio`');

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <link rel="stylesheet" href="css/syle.css">
    <script src="script.js" defer></script>
    <script src="spraak.js"></script>
    <script src="project.php"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.0/typed.min.js" integrity="sha512-zKaK6G2LZC5YZTX0vKmD7xOwd1zrEEMal4zlTf5Ved/A1RrnW+qt8pWDfo7oz+xeChECS/P9dv6EDwwPwelFfQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <main>
        <nav>
            <div class="container navigatie_container">
                <a href="index.php">
                    <h4><span>Yus</span>uf</h4>
                </a>
                <ul class="nav_menu">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#over-mij">About me</a></li>
                    <li><a href="#verleden">History</a></li>
                    <li><a href="#filter">Filter</a></li>
                    <li><a href="#pakket">packages</a></li>
                    <li><a href="index.php">Netherlands</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
                <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>
            </div>
        </nav>

        <header>
            <section class="home" id="home"></section>
            <header class="neon">
                <!--circles-->
                <figure class="circle circle--first"></figure>
                <figure class="circle circle--second"></figure>
                <figure class="circle circle--third"></figure>
                <figure class="circle circle--fourth"></figure>
                <div class="header_right">
                    <div>
                        <h1>Hello, my name is Yusuf Ozcelik</h1>
                    </div>
                    <div>
                        <h2>and i am a: <span class="typing"></span></h2>
                    </div>
                </div>

                <ul class="cardss">

                    <li class="card--header"><a href="http://32831.hosts1.ma-cloud.nl/"><img src="images/blog.jpg" alt="foto van een zelfgemaakte site"></li></a>
                    <li class="card--header"><a href="https://32778.hosts1.ma-cloud.nl/f1m2js/Duurzaam%20dashboard/"><img src="dashboard.png" alt="foto van een zelfgemaakte site"></li></a>
                    <li class="card--header"><a href="http://32831.hosts1.ma-cloud.nl/Japan/"><img src="japan.jpg" alt="foto van een zelfgemaakte site"></li></a>
                </ul>
            </header>


            </div>
        </header>
        <section>
            <div class="over-mij" id="over-mij">
                <h2 class="border_bottom">Over mij</h2>
        </section>
        <div class="container over-mij_container">

        </div>
        <div class="over-mij-text">
            <div class="text">

            </div>
            <p class="tekst--header">
            My name is Yusuf Ozcelik and I attend the MediaCollege in Amsterdam. I'm still in training
                Software developer. I can already do a lot of things like making a website and styling things very well see
                below at the filter.
            </p>
        </div>
        </div>

        <section></section>
        <div class="verleden" id="verleden">
            <h2 class="border_bottom">My history</h2>
            </section>
            <div class="container verleden_container">
                <div class="cards">
                    <div class="card">
                        <div class="logo">
                            <i class="fa-solid fa-code"></i>
                            <h3>HTML</h3>
                            <p>I have worked with html and I am in my first year at the media college before I had never worked with html. But I can certainly do a lot now.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="logo">
                            <i class="fa-solid fa-file-code"></i>
                            <h3>CSS</h3>
                            <p>I have worked with CSS and I am in my first year at the media college before I had never worked with CSS. But I can definitely style a lot now.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="card">
                        <div class="logo">
                            <i class="fa-solid fa-laptop-code"></i>
                            <h3>Python</h3>
                            <p>I've worked with python and I'm in my first year of media college before I had never worked with python. Python isn't my strongest subject either.</p>
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="speak">
            <img class="speak" src="https://www.ma-web.nl/static/vector/Logo_blok.svg" width="10rem" alt="mediacollege logo">
            <h2>Make it Rain Speech to Text</h2>
            <h4 id="message">Press the button below, and start speaking</h4>
            <button onclick="startRecognition()">Speech to text</button>
            <div id="result" class="hide"></div>
            <div><img id="image1" class="hide"></div>
        </div>

        <!--FILTER-->

        <div class="container sites_container" id="filter">
            <h2 class="border_bottom">Filter</h2>


        </div>
        </div>


        <section class="inputs">
            <div>
                <input id="checkbox-vr" type="checkbox" class="filter">
                <label for="checkbox-vr" class="label">Vr</label>
            </div>

            <div>
                <input id="checkbox-api" type="checkbox" class="filter">
                <label for="checkbox-api" class="label">API</label>
            </div>
            <div>
                <input id="checkbox-style" type="checkbox" class="filter">
                <label for="checkbox-style" class="label">Style</label>
            </div>
            <div>
                <input id="checkbox-sites" type="checkbox" class="filter">
                <label for="checkbox-sites" class="label">Sites</label>
            </div>

        </section>
        <ul class="projects">
            <li class="project" data-category="sites"><img src="blog.jpg" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="sites"><img src="dashboard.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="sites"><img src="japan.jpg" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="api"><img src="api.png" alt="foto van een gemaakt zelf gemaakt project">
            </li>
            <li class="project" data-category="style"><img src="bal.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="style"><img src="nitendo.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="style"><img src="uil.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="style"><img src="oog.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="style"><img src="post.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="style"><img src="tijd.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="style"><img src="text.png" alt="foto van een gemaakt zelf gemaakt project"></li>
            <li class="project" data-category="vr"><img src="vr.png" alt="foto van een gemaakt zelf gemaakt project">
            </li>
            <li class="project" data-category="vr"><img src="vr2.png" alt="foto van een gemaakt zelf gemaakt project">
            </li>



        </ul>

        <section class="pakket" id="pakket"></section>
        <div class="courses" id="courses">
            <h2 class="border_bottom">
            My packages
            </h2>

            <section class="place-list">
                <?php foreach ($result as $row) : ?>
                    <article class="course">
                        <h2><?php echo $row['titel']; ?></h2>
                        <figure class="project--img" style="background-image: url(images/<?php echo $projects['foto'] ?>)">
                            <header>
                                <h2>€<?php echo $row['prijs']; ?></h2>
                                <h2 class="course_info"><?php echo $row['tekst']; ?></h2>
                                <a class="btn" href="project.php?id=<?php echo $row['id']; ?>">More info</a>

                    </article>
                <?php endforeach; ?>
            </section>



            <iframe class="google-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77979.80009413049!2d4.9039604!3d52.354665649999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c63fb5949a7755%3A0x6600fd4cb7c0af8d!2sAmsterdam!5e0!3m2!1snl!2snl!4v1653898686293!5m2!1snl!2snl" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



            <footer>
                <div class="container footer_container">
                    <div class="footer_1">
                        <a href="index.html" class="footer_logo">
                            <h4>YUSUF</h4>
                        </a>
                        <p>Copyright 2022 Yusuf Ozcelik</p>
                    </div>

                    <div class="footer_4">
                        <h4 id="contact">Contact</h4>
                        <div>
                            <p></p>
                            <p class="mail"></p>
                        </div>
                        <ul class="footer_social">

                            <li><a href="https://www.linkedin.com/in/yusuf-ozcelik-43ab9323b/"> <i class="fa-brands fa-linkedin"></i> </a>
                            </li>

                        </ul>
                    </div>
                </div>


            </footer>
            <a href="#home" class="top">
                Top
            </a>
    </main>
</body>

</html>