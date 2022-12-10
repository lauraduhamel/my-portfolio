

<?php


//LANGUAGE


session_start();

if(!isset($_SESSION['lang']))
    $_SESSION['lang'] = "en";
else if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "en")
        $_SESSION['lang'] = "en";
    else if ($_GET['lang'] == "fr")
        $_SESSION['lang'] = "fr";
}


if ($_SESSION['lang']=="fr") {
    $filename = './data/data-fr.json';
}
else {
    $filename='./data/data-en.json';
}


//JSON DATA

$data = file_get_contents($filename);
$users = json_decode($data);

function console_log($output, $with_script_tags = true)
{
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
        ');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

console_log($users);
$head = $users->head;
$home = $users->home;
$work = $users->work;
$projects = $users->projects;
$about = $users->about;
$contact = $users->contact;
$footer = $users->footer;
$menu = $users->menu;
$i = 0;

/*
<?php foreach ($users as $user) { ?>
    <?php foreach ($users->projects as $project) { ?>
        <div>
        <td> <?php echo($project->name); ?> </td>
        <td> <?php echo($project->description); ?> </td>


        <img src="fold/<?php echo ($project->image->url)?>" alt="<?php echo ($user->image->alt)?>">

        <?php foreach ($project -> categories as $category) { ?>
            <td> <?php echo($category); ?> </td>
        <?php } ?>
    <?php } ?>
    </div>

*/


 ?>






