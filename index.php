<?php

require_once 'vendor/autoload.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('templates');
$twig = new Twig_Environment($loader);

$files = scandir("files"); 

echo $twig->render('index.html', array('files' => $files));

?>
