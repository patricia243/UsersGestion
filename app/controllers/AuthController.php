<?php
require_once "../core/Controller.php";
require_once "../app/models/User.php";

class AuthController extends Controller
{
    public function login()
    {
        // DEBUG: Log
        // error_log("AuthController::login() called");
        
        // Si déjà connecté ET c'est une requête GET (pas une tentative de connexion)
        if (isset($_SESSION['user']) && $_SERVER['REQUEST_METHOD'] === 'GET') {
            // Ne pas rediriger, juste afficher un message
            $this->view('auth/login', [
                'error' => null,
                'message' => 'Vous êtes déjà connecté. <a href="index.php?url=auth/dashboard">Aller au dashboard</a>'
            ]);
            return;
        }
        
        $error = null;
        
        // Traitement du formulaire
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            
            if (empty($email) || empty($password)) {
                $error = "Email et mot de passe requis";
            } else {
                // Utiliser la connexion PDO globale
                global $pdo;
                $userModel = new User($pdo);
                $user = $userModel->findByEmail($email);
                
                if ($user && password_verify($password, $user['password'])) {
                    // Retirer le mot de passe
                    unset($user['password']);
                    
                    // Sauvegarder en session
                    $_SESSION['user'] = $user;
                    
                    // Rediriger vers dashboard
                    header('Location: index.php?url=auth/dashboard');
                    exit();
                } else {
                    $error = "Email ou mot de passe incorrect";
                }
            }
        }
        
        // Afficher la vue
        $this->view('auth/login', ['error' => $error]);
    }
    
    public function dashboard()
    {
        // DEBUG: Log
        // error_log("AuthController::dashboard() called");
        
        // Vérifier si connecté
        if (!isset($_SESSION['user'])) {
            // Juste afficher la vue avec un message d'erreur
            $this->view('auth/dashboard', [
                'error' => 'Vous devez être connecté pour voir cette page',
                'user' => null
            ]);
            return;
        }
        
        // Afficher le dashboard
        $this->view('auth/dashboard', [
            'user' => $_SESSION['user'],
            'error' => null
        ]);
    }
    
    public function register()
    {
        // Si déjà connecté
        if (isset($_SESSION['user'])) {
            $this->view('auth/register', [
                'error' => 'Vous êtes déjà connecté',
                'old' => []
            ]);
            return;
        }
        
        $error = null;
        $old = ['name' => '', 'email' => ''];
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $password = $_POST['password'] ?? '';
            
            if (empty($name) || empty($email) || empty($password)) {
                $error = "Tous les champs sont requis";
                $old = ['name' => $name, 'email' => $email];
            } else {
                global $pdo;
                $userModel = new User($pdo);
                
                // Vérifier si l'email existe
                if ($userModel->findByEmail($email)) {
                    $error = "Cet email est déjà utilisé";
                    $old = ['name' => $name, 'email' => $email];
                } else {
                    // Créer l'utilisateur
                    if ($userModel->create($name, $email, $password)) {
                        $_SESSION['success'] = "Inscription réussie! Connectez-vous.";
                        header('Location: index.php?url=auth/login');
                        exit();
                    } else {
                        $error = "Erreur lors de l'inscription";
                        $old = ['name' => $name, 'email' => $email];
                    }
                }
            }
        }
        
        $this->view('auth/register', [
            'error' => $error,
            'old' => $old
        ]);
    }
    
    public function logout()
    {
        // Détruire la session
        $_SESSION = [];
        session_destroy();
        
        // Rediriger vers login
        header('Location: index.php?url=auth/login');
        exit();
    }
}
?>