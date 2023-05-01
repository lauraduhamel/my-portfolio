
<?php include "head.php"; ?>

<div class="error">
    <div class="wrap">
        <h1><?php echo($error->title); ?></h1>
        <div class="line"><span class="line light"></span></div>
        <p><?php echo($error->description); ?><a href="https://lauraduhamel.com"><?php echo($error->link); ?></a></p> <!----- Use data ----->
    </div>
</div>
</body>
