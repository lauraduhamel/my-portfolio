
<!doctype html>
<?php include "config.php"; ?>
<html lang="en" xmlns:og="http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="author" content="Laura Duhamel">
    <meta name="keywords" content="laura, duhamel, laura duhamel, lau, portfolio, projects, graphic design, motion design, freelance, France, Chambéry, Maryville, USA, Meximieux, Ain, USMB, IUT, DUT, MMI, Matane, CEGEP, DEC, TIM" />
    <meta name="description" content="Nice to meet you, I'm Laura Duhamel, a freelance in graphic designer. You are on my portfolio, let's discover my projects." />
    <meta property="og:title" content="Laura Duhamel's portfolio" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://lauraduhamel.com/" />
    <meta property="og:image" content="" /> <!--- a venir -->
    <meta property="og:site_name" content="Laura Duhamel's portfolio" />
    <meta property="og:description" content="Nice to meet you, I'm Laura Duhamel, a freelance in graphic designer. You are on my portfolio, let's discover my projects."/>

    <title><?php echo($head->title); ?></title> <!---  -->
    <link rel="icon" type="image/x-icon" href="img/profile-icon.png">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <script src="js/libs/jquery-3.6.1.js"></script>
    <script src="js/animation.js"></script>
    <script src="js/menu.js"></script>



</head>
<body>





<header>
    <div class="header-pc">
        <div class="wrap">
            <div class="right">
                <a href="#home"><img class="logo" src="img/logo.svg" alt="logo Lau"></a>
            </div>
            <div class="left">
                <nav>
                    <ul>
                        <li><a href="#works"><?php echo($menu->works); ?></a></li>
                        <li><a href="#contact"><?php echo($menu->contact); ?></a></li>
                        <li><a href="https://www.linkedin.com/in/lauraduhamel/"><img src="img/linkedin-icon.svg" alt="linkedin icon"></a></li>
                        <li><a href="https://www.behance.net/lauraduhamel"><img src="img/behance-icon.svg" alt="behance icon"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
        </div>
        <div class="header-mobile">
             <div class="container">
                 <div class="wrap">
                    <div class="menu-mobile">
                        <div><a class="mobile" href="#home"><img class="logo" src="img/logo.svg" alt="logo Lau"></a></div>
                            <button class="hamburger" onclick="overlay()"><img src="img/hamburger-icon.svg" alt="hamburger icon"> </button>
                        </div>
                    </div>
                    <div class="overlay" onclick="background()">
                         <nav>
                             <div class="wrap">
                            <ul>
                                <li><a href="#works"><?php echo($menu->works); ?></a></li>
                                <li><a href="#contact"><?php echo($menu->contact); ?></a></li>
                                <li><a href="https://www.linkedin.com/in/lauraduhamel/"><img src="img/linkedin-icon.svg" alt="linkedin icon"></a></li>
                                <li><a href="https://www.behance.net/lauraduhamel"><img src="img/behance-icon.svg" alt="behance icon"></a></li>
                            </ul>
                             </div>
                        </nav>
                </div>
                </div>
            </div>




    </div>
</header>


