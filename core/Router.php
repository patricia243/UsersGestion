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
          
            default:
                echo "404 Not Found";
                break;
        }
        
    }

}