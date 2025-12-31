<?php
require_once "../core/controller.php";
class AuthController extends Controller
{
    public function login()
    {
        // Logic for handling login
        $this->view('auth/login');
    }

    public function register()
    {
        // Logic for handling registration
        $this->view('auth/register');
    }
}
