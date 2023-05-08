

<?php


//LANGUAGE

/*
session_start();

if (strpos($_SERVER['HTTP_ACCEPT_LANGUAGE'], 'en') === 0) {
    $filename = './data/data-en.json'; // utiliser le fichier de données en
} else {
    $filename = './data/data-fr.json'; // utiliser le fichier de données fr
}

if (!file_exists($filename)) {
    $filename = './data/data-fr.json';
}
*/

session_start();

// Récupération de la langue par défaut du navigateur
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Utilisation de la langue passée dans l'URL si elle est définie
if (isset($_GET['lang']) && !empty($_GET['lang'])) {
    if ($_GET['lang'] == "en") {
        $_SESSION['lang'] = "en";
    } else if ($_GET['lang'] == "fr") {
        $_SESSION['lang'] = "fr";
    }
}

// Utilisation de la langue de session ou par défaut si aucune langue n'a été définie
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = $lang;
}

// Détermination du fichier JSON à charger en fonction de la langue de session
if ($_SESSION['lang'] == "en") {
    $filename = './data/data-en.json';
} else {
    $filename = './data/data-fr.json';
}

// Chargement des données JSON depuis le fichier correspondant
$data = file_get_contents($filename);
$users = json_decode($data);



//FONCTION CONSOLE LOG POUR AFFICGER
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
$error = $users->error;
$head = $users->head;
$home = $users->home;
$work = $users->work;
$projects = $users->projects;
$about = $users->about;
$contact = $users->contact;
$footer = $users->footer;
$menu = $users->menu;
$i = 0;


 ?>






