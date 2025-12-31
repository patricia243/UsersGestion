<?php
require_once "../core/controller.php";
require_once "../app/models/user.php";
require_once "../config/database.php";  

class AuthController extends Controller
{
    public function login()
    {
        // Logic for handling login
        $this->view('auth/login');
    }

    public function register()
    {
        if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
            $user = new User($GLOBALS ['pdo']);
            $user->create (
                $_POST['name'],
                $_POST['email'],
                $_POST['password']
            );
            header ('Location: index.php?url=login');
            exit();
        }
        $this->view('auth/register');
    }
    public function logout()
    {
        session_destroy();
        header('Location: index.php?url=login');
      
    }
}
      