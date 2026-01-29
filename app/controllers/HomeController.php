<?php
require_once "../core/Controller.php";

class HomeController extends Controller
{
    public function dashboard()
    {
        // Afficher le dashboard (page d'accueil)
        // Contenu différent selon l'état de connexion
        $this->view("home/dashboard");
    }

    // Page d'accueil publique
    public function index()
    {
        // Contenu public visible sans authentification
        $this->view("home/index");
    }
}