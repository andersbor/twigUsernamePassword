<?php
$username = $_POST["username"];
$password = $_POST["password"];

require_once '../vendor/autoload.php';
Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem('../views');
$twig = new Twig_Environment($loader, array(
    // 'cache' => '/path/to/compilation_cache',
    'auto_reload' => true
));
$template = $twig->loadTemplate('showit.html.twig');

$parametersToTwig = array("username" => $username, "password" => $password);
echo $template->render($parametersToTwig);