<?php
//autoloader -> va inclure automatiquement les fichiers dès l'instant où l'on instancie une classe

spl_autoload_register(function ($class) { //$class = Controllers/HomeController

    require_once lcfirst(str_replace('\\', '/', $class)) . '.php';
});
session_start();


if (array_key_exists('route', $_GET)) {
    switch ($_GET['route']) {
      

        case 'inscription':


            //instanciation de la classe controller
            $controller = new Controllers\PostalcodeController();

            //appelle de la méthode
            $controller->display();

            break;

            
    }
} else {
    header('location: index.php?route=inscription');
    exit;
}


