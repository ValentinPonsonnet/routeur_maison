<?php

$url= $_SERVER['REQUEST_URI'];
switch($url)
{
    case "/routeur_maison/" :
        require __DIR__ . '/view/accueil.php';
        break;

    case "/":
        require __DIR__ .'/view/accueil.php';
        break;

    case "/routeur_maison/acceuil":
        require __DIR__ . '/view/accueil.php';

    case "/routeur_maison/blog":
        require __DIR__ . '/view/blog.php';
        break;

    case "/routeur_maison/contact":
        require __DIR__ . '/view/contact.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/view/404.php';
        break;
}

?>