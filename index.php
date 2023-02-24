

<?php include "header.php"; ?>
    <main id="home">
        <div class="wrap">
            <div>
                <p data-aos="fade-top"><?php echo($home->hey);?></p>
                <h1 data-aos="fade-right"  data-aos-duration="1000" data-aos-delay="300"><?php echo($home->who); ?></h1>
                <div id="container">
                    <div id="text"></div>
                    <div id="cursor"></div>
                </div>
                <span data-aos="fade-top" data-aos-duration="1000" class="line"></span>
                <div class="button discover">
                    <a href="#works" class="light"><?php echo($home->button); ?></a>
                </div>
            </div>
        </div>
    </main>

    <section class="works" id="works">
        <div class="wrap">
             <div class="flex-container">
                 <div class="text">
                    <h2 data-aos="fade-right" ><?php echo($work->title); ?></h2>
                    <p data-aos="fade-right" ><?php echo($work->description); ?></p>
                 </div>
                 <img data-aos="fade-left" src="img/works-icon.svg" class="icon" alt="icon of a picture">
            </div>
            <div class="line" data-aos="fade-bottom"><span class="line dark"></span></div>
            <div class="projects">

                <?php foreach ($projects as $project) {
                    $i++;
                    ?>
                <div class="project-container" >
                <a href="<?php echo($project->link);?>" target="_blank">
                    <div class="grid-container">
                        <div class="grid-item-1">
                            <p class="number"><?php echo($i) ?></p>
                            <h3><?php echo($project->name);?></h3>
                        </div>
                        <div class="grid-item-2">
                            <img src="img/<?php echo($project->image->url);?>" alt="<?php echo($project->image->alt);?>">
                        </div>
                    </div>
                    <div class="overlay">
                            <div class="grid-item-1">
                                <p class="number"><?php echo($i);?></p>
                            </div>
                            <div class="grid-item-2">
                                <h3><?php echo($project->name);?></h3>
                                <p><?php echo($project->description);?></p>
                            </div>
                            <div class="grid-item-3">
                                <span class="line light"></span>
                            </div>
                            <div class="grid-item-4">
                                <ul>
                                   <?php foreach ($project->categories as $category) { ?>
                                    <li><?php echo($category);?></li>
                                    <?php } ?>
                                </ul>
                            </div>
                    </div>
                </a>
                </div>
                <?php } ?>

            </div>

            <div class="flex-container" data-aos="fade-top"><span class="line dark"></span></div>
            <div class="button" data-aos="fade-top"><a href="https://www.behance.net/lauraduhamel" class="dark"><?php echo($work->button); ?></a></div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="wrap">
            <div class="grid-container">
                <div class="grid-item-1">
                    <h2 data-aos="fade-left"><?php echo($about->title); ?></h2>
                    <p data-aos="fade-left"><?php echo($about->subtitle); ?></p>
                </div>
                <div class="grid-item-2">
                    <div>
                       <div><span class="line" data-aos="fade-top"></span></div>
                        <div>
                            <ul data-aos="fade-left">
                                <?php foreach ($about->list as $list) { ?>
                                <li><?php echo($list); ?></li>
                                <?php } ?>
                            </ul>
                            <p data-aos="fade-right">&</p>
                            <ul data-aos="fade-right">
                                <li class="social"><?php echo($about->socialmedia); ?> <a href="https://www.behance.net/lauraduhamel">Behance</a></li>
                                <li class="social"><?php echo($about->socialmedia); ?> <a href="https://www.linkedin.com/in/lauraduhamel/">Linkedin</a></li>
                                <li class="social"><?php echo($about->socialmedia); ?> <a href="">Pinterest</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="grid-item-3" data-aos="fade-bottom">
                    <img id="gif" src="img/animate.gif" alt="Animation of an illustration of myself">
                </div>
                <div class="grid-item-4" >
                    <p data-aos="fade-right"><?php echo($about->description); ?></p>
                    <div class="button" data-aos="fade-bottom">
                        <a class="light" href="pdf/<?php echo($about->button->url); ?>.pdf" target="_blank"><?php echo($about->button->content); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="wrap">
            <div class="grid-container">
                    <div  class="grid-item-1"  data-aos="fade-right">
                        <h2><?php echo($contact->title); ?></h2>
                    </div>
                <div class="grid-item-2"  data-aos="fade-right">
                        <p><?php echo($contact->description); ?></p>
                    </div>
                    <div class="grid-item-3">
                        <span class="line dark"  data-aos="fade-top"></span>
                        <div class="button"  data-aos="fade-top"><a href="mailto:contact@lauraduhamel.com" class="dark"><?php echo($contact->button); ?></a></div>
                    </div>
                <div class="grid-item grid-item-4" data-aos="fade-left">
                        <img src="img/email-icon.svg" class="icon" alt="icon of an email">
                        <h3><a href="tel:+33767944074">+33 767944074</a></h3>
                        <h3><a href="mailto:contact@lauraduhamel.com">contact@lauraduhamel.com</a></h3>
                </div>
            </div>
        </div>
    </section>


<?php include "footer.php"; ?>
