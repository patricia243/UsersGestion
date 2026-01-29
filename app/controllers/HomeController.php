<?php
require_once "../core/Controller.php";

class HomeController extends Controller
{
    public function dashboard()
    {
        if (!isset($_SESSION['user_id'])) {
            header('Location: index.php?url=auth/login');
            exit();
        }
        $this->view("home/dashboard");
    }

    // Page d'accueil publique
    public function index()
    {
        // Contenu public visible sans authentification
        $this->view("home/index");
    }
}