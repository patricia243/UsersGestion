<?php

class Router
{
    // Router class implementation
    public function run()

    {
        $url=$_GET['url'] ?? 'login';
        switch ($url) {
            case 'login':  
                require_once "../app/controllers/AuthController.php";
                (new AuthController())->login();
                break;
            case 'register':
                require_once "../app/controllers/AuthController.php";
                (new AuthController())->register();
                break;
                case 'logout':
                require_once "../app/controllers/AuthController.php";
                (new AuthController())->logout();
                break;
            case 'dashboard':
                require_once "../app/controllers/HomeController.php";
                (new HomeController())->dashboard();
                break;
            default:
                echo "404 Not Found";
                break;
        }
        
    }

}