<?php
require_once "../core/Controller.php";

class HomeController extends Controller
{
    public function dashboard()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?url=login');
            exit();
        }
        $this->view("home/dashboard");
    }
}