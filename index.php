<?php

//$url=;

switch($url)
{
    case "/" :
        require __DIR__ . '/view/accueil.php';
        break;

    case "/acceuil":
        require __DIR__ . '/view/accueil.php';

    case "/blog":
        require __DIR__ . '/view/blog.php';
        break;

    case "/contact":
        require __DIR__ . '/view/contact.php';
        break;
        
    default:
        http_response_code(404);
        require __DIR__ . '/view/404.php';
        break;
}

?>