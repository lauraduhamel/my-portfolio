
<?php include "head.php"; ?>
<body>
<header>
    <div class="header-pc">
        <div class="wrap">
            <div class="right">
                <a href="#home"><img class="logo" src="img/logo.svg" alt="logo Lau"></a>
            </div>
            <div class="left">
                <nav>
                    <ul class="link">
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


