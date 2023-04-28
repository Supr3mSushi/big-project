<?php
global $pdo;
require 'config/conf.php';
?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="shortcut icon" href="/icon/sushi-icon-png.png" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Box Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script>alert("This site is still under development, thank you for your understanding...")</script>
</head>

<body onload="brython()">

<!-- Header -->
<header class="header">
    <a href="#" class="logo">Portfolio</a>

    <nav class="navbar">
        <a href="#home" class="active">Home</a>
        <a href="#about">About</a>
        <!--<a href="#skills">Skills</a>-->
        <a href="#projects">Projects</a>
        <a href="#games">Games</a>
        <a href="#guestBook">Guest Book</a>
        <!-- <a href="#Services">Services</a> -->
    </nav>

    <div class="bx bx-moon" id="darkMoon-icon"></div>
    <div class="bx bx-menu" id="menu-icon"></div>

</header>


<!-- Home -->
<section class="home" id="home">
    <div class="home-content">
        <h3>Hello, I am</h3>
        <h1>Lucas Ferrand</h1>
        <p>I am currently looking for a 2 to 3 months<br>internship in the field of IT, more precisely in cybersecurity.</p>

        <div class="social-media">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-linkedin'></i></a>
            <a href="#"><i class='bx bxl-instagram'></i></a>
            <a href="#"><i class='bx bxl-github'></i></a>
        </div>

        <a href="cv/CV_etudiant_2.pdf" class="btn">Download my CV<i class='bx bx-download'></i></a>
    </div>

    <div class="profession-container">
        <div class="profession-box">
            <div class="profession" style="--i:0;">
                <i class='bx bx-code-alt'></i>
                <h3>Developer</h3>
            </div>
            <div class="profession" style="--i:1;">
                <i class='bx bx-camera'></i>
                <h3>Osinter</h3>
            </div>
            <div class="profession" style="--i:2;">
                <i class='bx bx-devices'></i>
                <h3>System<br>admin</h3>
            </div>
            <div class="profession" style="--i:3;">
                <i class='bx bx-trophy'></i>
                <h3>Challenger</h3>
            </div>

            <div class="circle"></div>
        </div>

        <div class="overlay"></div>
    </div>

    <div class="home-img">
        <img src="img_home_about/doubleTrans.png" alt="">
    </div>
</section>


<!-- About -->

<section class="about" id="about">
    <div class="about-img">
        <img src="img_home_about/croiseTransConv.png" alt="">
    </div>

    <div class="about-content">
        <!--<h2 class="opacity-about-me-background">Know Me More<span></span></h2>-->
        <h2 class="heading">About <span>Me</span></h2>
        <p>Hi there, I am a first year student at Guardia Cybersecurity School!
            I am passionate about everything related to IT, specifically cybersecurity.
            I am currently in the midst of an apprenticeship and want to develop my knowledge in this field as much as possible and put my skills to good use in the future.</p>
        <a href="https://www.google.fr/logos/2010/pacman10-i.html" class="btn">Read More</a>
    </div>
</section>


<!-- Skills -->
<!-- Admin System

<section class="skills" id="skills">
    <h2 class="heading">My <span>Skills</span></h2>

        <div id="skill-section">
            <div class="skill-bloc">
                <div class="gif-bloc">
                    <img class="skills-picture" src="../gif/data_animated.gif" alt="server-infra">
                    <h2>System administration</h2>
                </div>

                <div class="skill-container">
                    <div class="skills-block">
                        <div class="skills-logo-test" src="../img_skills/windows_logo.png" alt="windows-logo">
                        </div>
                        <h2 class="skills-block-title">Windows Server</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Installation</p>
                            <p class="skills-subtitle">- Integration</p>
                            <p class="skills-subtitle">- Configuration</p>
                            <p class="skills-subtitle">- Advanced administration</p>
                        </div>
                        <div class="skills-block-button">
                            <div class="skills-button-img">
                                <img class="button-img" src="../img_skills/code-logo-white.png" alt="button-img">
                            </div>
                            <div class="skills-button-title">
                                <h4 class="skills-button">See more</h4>
                            </div>
                        </div>
                    </div>

                    <div class=skills-block">
                        <div class=skills-block-logo">
                            <img class=skills-logo-test" src="../img_skills/activedirectory_logo.png" alt="activedirectory-logo">
                        </div>
                        <h2 class=skills-block-title">Active Directory</h2>
                        <div class=skills-block-subtitle">
                            <p class=skills-subtitle">- Installation</p>
                            <p class=skills-subtitle">- Integration</p>
                            <p class=skills-subtitle">- Configuration</p>
                            <p class=skills-subtitle">- Controlled administration</p>
                        </div>
                        <div class="skills-block-button">
                            <div class="skills-button-img">
                                <img class="button-img" src="../img_skills/code-logo-white.png" alt="button-img">
                            </div>
                            <div class="skills-button-title">
                                <h4 class="skills-button">See more</h4>
                            </div>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/hyperv_logo.png" alt="hyperv-logo">
                        </div>
                        <h2 class="skills-block-title">Hyper-V</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Installation</p>
                            <p class="skills-subtitle">- Configuration</p>
                            <p class="skills-subtitle">- Advanced administration</p>
                        </div>
                        <div class="skills-block-button">
                            <div class="skills-button-img">
                                <img class="button-img" src="../img_skills/code-logo-white.png" alt="button-img">
                            </div>
                            <div class="skills-button-title">
                                <h4 class="skills-button">See more</h4>
                            </div>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class=skills-logo-test" src="../img_skills/sql_logo.png" alt="sql-logo">
                        </div>
                        <h2 class="skills-block-title">SQL Server</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Installation</p>
                            <p class="skills-subtitle">- Integration</p>
                            <p class="skills-subtitle">- Configuration</p>
                            <p class="skills-subtitle">- Controlled administration</p>
                        </div>
                        <div class="skills-block-button">
                            <div class="skills-button-img">
                                <img class="button-img" src="../img_skills/code-logo-white.png" alt="button-img">
                            </div>
                            <div class="skills-button-title">
                                <h4 class="skills-button">See more</h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="skills-separator"></div>


            Dev

            <div class="skill-bloc">
                <div class="gif-bloc">
                    <img class="skills-picture" src="../gif/dev_animated.gif" alt="server-infra">
                    <h2>Development</h2>
                </div>

                <div class="skill-container">
                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/powershell_logo.png" alt="powershell-logo">
                        </div>
                        <h2 class="skills-block-title">Powershell</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- In process of learning</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/c_logo.png" alt="c-logo">
                        </div>
                        <h2 class="skills-block-title">C</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- In process of learning</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/python_logo.png" alt="python-logo">
                        </div>
                        <h2 class="skills-block-title">Python</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Advanced development</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/php_logo.png" alt="php-logo">
                        </div>
                        <h2 class="skills-block-title">Php</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Controlled advanced</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/html_logo.png" alt="html-logo">
                        </div>
                        <h2 class="skills-block-title">HTML</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Advanced development</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/css_logo.png" alt="css-logo">
                        </div>
                        <h2 class="skills-block-title">CSS</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">-Advanced development</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/sql_logo.png" alt="sql-logo">skills
                        <h2 class="skills-block-title">SQL</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Intgration</p>
                            <p class="skills-subtitle">- Controlled development</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/git_logo.png" alt="git-logo">
                        </div>
                        <h2 class="skills-block-title">Git</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Use</p>
                            <p class="skills-subtitle">- Controlled development</p>
                        </div>
                    </div>

                    <div class="skills-block">
                        <div class="skills-block-logo">
                            <img class="skills-logo-test" src="../img_skills/jetbrains_logo.png" alt="jetbrains-logo">
                        </div>
                        <h2 class="skills-block-title">Jetbrains</h2>
                        <div class="skills-block-subtitle">
                            <p class="skills-subtitle">- Advanced use</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>-->



<!-- Projects --> <!-- Redirection sur le projets en question (directement sur la card)-->

<section class="projects-main-section" id="projects">
    <h2 class="heading">Lastest <span>Projects</span></h2>

    <!-- Project 1 -->

    <div class="projects-container-class">
        <div class="projects-box-class">
            <img src="img_project/ssh_web_project.png" alt="">

            <div class="projects-first-layer">
                <h4>Introduction to IS</h4>
                <p>Improve technical skills in the creation, configuration and especially the advanced security of a Linux server.</p>
                <a class="projects-modal-open">See more<i class='bx bx-right-top-arrow-circle'></i></a>
            </div>
        </div>

        <div class="projects-modal" id="modal">
            <div class="projects-modal-content">
                <h4 class="projects-modal-title">Introduction aux SI</h4>
                <i class='bx bx-x projects-modal-close'></i>
                <ul class='projects-modal-project-grid'>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Manage the different operating systems available on the market</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Linux : Manage the different package managers</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Linux : Manage the different Sudo rights</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Windows : Manage the system on a client as well as on a server</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>MacOS : Link the system to an active directory</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Install and configure an operating system</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Diagnose, find and manage a system failure</p>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Project 2 -->

        <div class="projects-box-class">
            <img src="img_project/python_project.png" alt="">

            <div class="projects-first-layer">
                <h4>Python Programming</h4>
                <p>Deepen one's knowledge of Algorithms and skills in Python and having a web approach.</p>
                <a>See more<i class='bx bx-right-top-arrow-circle'></i></a>
            </div>
        </div>

        <div class="projects-modal" id="modal">
            <div class="projects-modal-content">
                <h4 class="projects-modal-title">Python Programming</h4>
                <i class='bx bx-x projects-modal-close'></i>
                <ul class='projects-modal-project-grid'>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Creating a complex algorithm</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Using POO in Python</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create and handle files in XML, CSV, Markdown</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Scraping data</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Understand the cyber approach to scrapping and processing information</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create a directory manually from pre-defined scrapping methods.</p>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Project 3 -->

        <div class="projects-box-class">
            <img src="img_project/network_project.png" alt="">

            <div class="projects-first-layer">
                <h4>Introduction to networks</h4>
                <p>Master the basics of network configuration with Hyper-V.</p>
                <a>See more<i class='bx bx-right-top-arrow-circle'></i></a>
            </div>
        </div>

        <div class="projects-modal" id="modal">
            <div class="projects-modal-content">
                <h4 class="projects-modal-title">Introduction to networks</h4>
                <i class='bx bx-x projects-modal-close'></i>
                <ul class='projects-modal-project-grid'>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create and map a network</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Mount a server with simple services (DHCP, DNS, AD)</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Mount services on a server</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Diagnose a failure</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Manage the different low level layers of the OSI model</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Diagnose and anticipate failure</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Determine the data to be transmitted in an organization</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Master servers and clients</p>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Project 4 -->

        <div class="projects-box-class">
            <img src="img_project/web_dev_project.png" alt="">

            <div class="projects-first-layer">
                <h4>Web Development</h4>
                <p>Learn how to create a web page and a portfolio with the basics of programming languages.</p>
                <a>See more<i class='bx bx-right-top-arrow-circle'></i></a>
            </div>
        </div>

        <div class="projects-modal" id="modal">
            <div class="projects-modal-content">
                <h4 class="projects-modal-title">Web Development</h4>
                <i class='bx bx-x projects-modal-close'></i>
                <ul class='projects-modal-project-grid'>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create a website / portfolio</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create a CSS style sheet</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Optimize a website for SEO</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Code in PHP and SQL</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create and model a database using the MCD method</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Automate database records via your forms</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create an authentication system with access rights</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Secure your website against XSS and SQL injection flaws</p>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Project 5 -->

        <div class="projects-box-class">
            <img src="img_project/framework_project.png" alt="">

            <div class="projects-first-layer">
                <h4>JavaScript</h4>
                <p>Create a responsive portfolio using CSS frameworks and adding interactive features with JavaScript.</p>
                <a>See more<i class='bx bx-right-top-arrow-circle'></i></a>
            </div>
        </div>

        <div class="projects-modal" id="modal">
            <div class="projects-modal-content">
                <h4 class="projects-modal-title">JavaScript</h4>
                <i class='bx bx-x projects-modal-close'></i>
                <ul class='projects-modal-project-grid'>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Create a 100% responsive website</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Use a CSS Framework</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Handle JavaScript with jQuery</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Know how to design a web page in an aesthetic, ergonomic and optimized way</p>
                    </li>
                </ul>
            </div>
        </div>


        <!-- Project 6 -->

        <div class="projects-box-class">
            <img src="img_project/c_purple_project.png" alt="">

            <div class="projects-first-layer">
                <h4>C programming</h4>
                <p>Develop an algorithm in C, create a recipe phase and an executable and play Sudoku.</p>
                <a>See more<i class='bx bx-right-top-arrow-circle'></i></a>
            </div>
        </div>

        <div class="projects-modal" id="modal">
            <div class="projects-modal-content">
                <h4 class="projects-modal-title">C programming</h4>
                <i class='bx bx-x projects-modal-close'></i>
                <ul class='projects-modal-project-grid'>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Understanding of recursion</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Understanding and application of the C language</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Tests, acceptance phases and debugging of a program</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Creation of a technical documentation on a given project</p>
                    </li>
                    <li class="projects-modal-project">
                        <i class='bx bx-check-shield project-modal-icon'></i>
                        <p>Adopting a Logical approach to create a program in C</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>


<!-- Services

<section class="services" id="services">
    <h2 class="heading">Mes <span>Services</span></h2>

    <div class="services-container">
        <div class="services">
            <i class='bx bx-code-alt'></i>
            <h3>Développeur</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <a href="#" class="btn">Read More</a>
        </div>

        <div class="services">
            <i class='bx bx-network-chart'></i>
            <h3>Osinter</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quae.</p>
            <a href="#" class="btn">Read More</a>
        </div>
    </div>
</section>-->

<!-- Games -->

<section class="games" id="games">
    <h2 class="heading">My <span>Games</span></h2>
    <div class="game-container">
        <div class="row">
            <table class="table">
                <tr>
                    <td id="right" style="padding:3%">
                        <canvas id="myCanvas" width="480" height="320"></canvas>
                    </td>
                </tr>
            </table>

            <script type="text/python">
import math
from browser import document, bind, window
ballRadius = 10
paddleHeight = 10
paddleWidth = 75
brickRowCount = 5
brickColumnCount = 3
brickWidth = 75
brickHeight = 20
brickPadding = 10
brickOffsetTop = 30
brickOffsetLeft = 30

class Brick:

    def __init__(self):
        self.x = 0
        self.y = 0
        self.status = 1


class Panel:

    def __init__(self, canvas):
        self.ctx = canvas.getContext("2d")
        self.x = canvas.width / 2
        self.y = canvas.height - 30
        self.dx = 2
        self.dy = -2
        self.paddleX = (canvas.width - paddleWidth) / 2
        self.rightPressed = False
        self.leftPressed = False
        self.score = 0
        self.lives = 3
        self.bricks = [[Brick() for r in range(brickRowCount)]
          for _ in range(brickColumnCount)]

    def collisionDetection(self):
        for c in range(brickColumnCount):
            for r in range(brickRowCount):
                b = self.bricks[c][r]
                if b.status == 1:
                    if (self.x > b.x) and (self.x < b.x + brickWidth) \
                            and (self.y > b.y) \
                            and (self.y < b.y + brickHeight):
                        self.dy = -self.dy
                        b.status = 0;
                        self.score += 1
                        if self.score == brickRowCount * brickColumnCount:
                            window.alert("Vous avez gagné, Bravo!")

    def drawBall(self):
        ctx = self.ctx
        ctx.beginPath()
        ctx.arc(self.x, self.y, ballRadius, 0, math.pi * 2)
        ctx.fillStyle = "#0095DD"
        ctx.fill()
        ctx.closePath()

    def drawPaddle(self):
        ctx = self.ctx
        ctx.beginPath()
        ctx.rect(self.paddleX,
                 canvas.height - paddleHeight,
                 paddleWidth,
                 paddleHeight)
        ctx.fillStyle = "#0095DD"
        ctx.fill()
        ctx.closePath()

    def drawBricks(self):
        for c in range(brickColumnCount):
            for r in range(brickRowCount):
                if self.bricks[c][r].status == 1:
                    brickX = (r * (brickWidth + brickPadding)) + brickOffsetLeft
                    brickY = (c * (brickHeight + brickPadding)) + brickOffsetTop
                    self.bricks[c][r].x = brickX
                    self.bricks[c][r].y = brickY
                    ctx = self.ctx
                    ctx.beginPath()
                    ctx.rect(brickX, brickY, brickWidth, brickHeight)
                    ctx.fillStyle = "#0095DD"
                    ctx.fill()
                    ctx.closePath()

    def drawScore(self):
        self.ctx.font = "16px Arial"
        self.ctx.fillStyle = "#0095DD"
        self.ctx.fillText(f"Score: {self.score}", 8, 20)

    def drawLives(self):
        self.ctx.font = "16px Arial";
        self.ctx.fillStyle = "#0095DD";
        self.ctx.fillText(f"Lives: {self.lives}", canvas.width - 65, 20)

    def draw(self, *args):
        self.ctx.clearRect(0, 0, canvas.width, canvas.height)
        self.drawBricks()
        self.drawBall()
        self.drawPaddle()
        self.drawScore()
        self.drawLives()
        self.collisionDetection()
        if (self.x + self.dx > canvas.width-ballRadius) or \
                (self.x + self.dx < ballRadius):
            self.dx = -self.dx
        if self.y + self.dy < ballRadius:
            self.dy = -self.dy;
        elif self.y + self.dy > canvas.height-ballRadius:
            if (self.x > self.paddleX) \
                    and (self.x < self.paddleX + paddleWidth):
                self.dy = -self.dy
            else:
                self.lives -= 1
                if not self.lives:
                    window.alert("T'as perdu, entraines toi encore !")
                else:
                    self.x = canvas.width / 2
                    self.y = canvas.height - 30
                    self.dx = 3
                    self.dy = -3
                    self.paddleX = (canvas.width - paddleWidth) / 2

        if self.rightPressed and (self.paddleX < canvas.width - paddleWidth):
            self.paddleX += 7
        elif self.leftPressed and self.paddleX > 0:
            self.paddleX -= 7
        self.x += self.dx
        self.y += self.dy
        window.requestAnimationFrame(self.draw)

canvas = document["myCanvas"]
panel = Panel(document["myCanvas"])

@bind(document, "keydown")
def keyDownHandler(e):
    if e.keyCode == 39:
        panel.rightPressed = True
    elif e.keyCode == 37:
        panel.leftPressed = True

@bind(document, "keyup")
def keyUpHandler(e):
    if e.keyCode == 39:
        panel.rightPressed = False
    elif e.keyCode == 37:
        panel.leftPressed = False

@bind(document, "mousemove")
def mouseMoveHandler(e):
    relativeX = e.clientX - canvas.offsetLeft
    if relativeX > 0 and relativeX < canvas.width:
        panel.paddleX = relativeX - paddleWidth / 2

panel.draw()
        </script>
        </div>
    </div>
</section>


<!-- Guest Book -->

<section class="contact" id="guestBook">
    <h2 class="heading">Guest <span>Book</span></h2>

    <form action="#">
        <div class="input-box">
            <input type="text" placeholder="Name">
            <input type="email" placeholder="Email">
        </div>
        <textarea name="" id="" cols="30" rows="10" placeholder="Your Comment"></textarea>
        <input type="submit" value="Submit" class="btn">
    </form>
    <?php
    require "db/guestbook.php";

    $sql = "SELECT * FROM `guestbook`";
    $pre = $pdo->prepare($sql);
    $pre->execute();
    $data = $pre->fetchAll(PDO::FETCH_ASSOC);

    echo "<table>";
    echo "<tr>";
    echo "<th>name</th>";
    echo "<th>email</th>";
    echo "<th>comment</th>";

    foreach ($data as $row) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['comment']."</td>";
    }
    ?>
</section>


<!-- Contact -->

<div class="guest-book">
    <button class="guest-book-btn"><i class='bx bx-message-square-dots'></i></button>
    <div class="guest-book-popup">
        <div class="guest-book-content">
            <span class="guest-book-close">&times;</span>
            <h2 class="guest-book-heading">Contact <span>Me!</span></h2>
            <form action="#">
                <div class="input-box-popup">
                    <input type="text" placeholder="Full Name">
                    <input type="email" placeholder="Email">
                </div>
                <div class="input-box-popup">
                    <input type="number" placeholder="Phone Number">
                    <input type="text" placeholder="Object">
                </div>
                <div class="input-box-popup">
                    <textarea name="" id="" cols="30" rows="10" placeholder="Your Message"></textarea>
                </div>
                <input type="submit" value="Submit" class="btn-popup">
            </form>
        </div>
    </div>
</div>



<!-- Footer -->
<footer class="footer">
    <div class="footer-text">
        <a href="https://fakeupdate.net/wnc/">Copyright &copy; 2023 by Sushi | All rights Reserved</a>
    </div>

    <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-chevron-up'></i></a>
    </div>
</footer>


<!-- Scroll Reveal -->
<script src="https://unpkg.com/scrollreveal"></script>
<!-- Script js -->
<script src="/js/script.js"></script>
<!-- Import Brython -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/brython@3.8.9/brython.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/brython@3.8.9/brython_stdlib.js"></script>
</body>
</html>