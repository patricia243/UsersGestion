<?php
class Router {
    public function run() {
        // URL par défaut
        $url = $_GET['url'] ?? 'auth/login';
        
        // Nettoyer l'URL
        $url = trim($url, '/');
        
        // Séparer en parties
        $parts = explode('/', $url);
        
        // Déterminer le contrôleur et la méthode
        if (count($parts) >= 2) {
            $controllerName = ucfirst($parts[0]) . 'Controller';
            $method = $parts[1];
        } else {
            // Si seulement un segment, c'est probablement 'login', 'register', etc.
            $controllerName = 'AuthController';
            $method = $parts[0] ?? 'login';
        }
        
        // Chemin du contrôleur
        $controllerFile = "../app/controllers/{$controllerName}.php";
        
        // DEBUG
        // error_log("Router: {$controllerName}->{$method}");
        
        // Vérifier l'existence du fichier
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            
            // Instancier le contrôleur
            $controller = new $controllerName();
            
            // Vérifier si la méthode existe
            if (method_exists($controller, $method)) {
                // Appeler la méthode
                $controller->$method();
            } else {
                // Méthode non trouvée - rediriger vers login SANS redirection HTTP
                $this->showError("Method {$method} not found in {$controllerName}");
                $authController = new AuthController();
                $authController->login();
            }
        } else {
            // Contrôleur non trouvé - rediriger vers login SANS redirection HTTP
            $this->showError("Controller {$controllerName} not found");
            require_once "../app/controllers/AuthController.php";
            $authController = new AuthController();
            $authController->login();
        }
    }
    
    private function showError($message) {
        // Pour débogage seulement
        // echo "<!-- Router Error: {$message} -->";
    }
}
?>