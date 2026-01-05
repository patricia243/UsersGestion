<?php
class Controller
{
    protected function view($view, $data = [])
    {
        // Extraire les données
        extract($data);
        
        // Chemin vers la vue
        $viewFile = "../app/views/{$view}.php";
        
        // Si le fichier n'existe pas, le créer automatiquement
        if (!file_exists($viewFile)) {
            $this->createViewFile($view, $viewFile);
        }
        
        // Vérifier à nouveau
        if (file_exists($viewFile)) {
            require_once $viewFile;
        } else {
            // Fallback: Afficher une page d'erreur simple
            echo "<h1>Vue non trouvée: {$view}</h1>";
            echo "<p>Le fichier {$viewFile} n'existe pas.</p>";
            echo "<p>Créez-le manuellement ou vérifiez le chemin.</p>";
        }
    }
    
    private function createViewFile($viewName, $filePath)
    {
        // Créer le dossier si nécessaire
        $dir = dirname($filePath);
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        
        // Contenu par défaut selon la vue
        $content = '';
        
        switch ($viewName) {
            case 'auth/dashboard':
                $content = '<?php if (isset($user) && $user): ?>
                    <h1>Dashboard de <?php echo htmlspecialchars($user["email"]); ?></h1>
                    <p>Bienvenue sur votre tableau de bord.</p>
                    <a href="index.php?url=auth/logout">Déconnexion</a>
                <?php else: ?>
                    <h1>Non connecté</h1>
                    <p>Veuillez vous <a href="index.php?url=auth/login">connecter</a>.</p>
                <?php endif; ?>';
                break;
                
            case 'auth/login':
                $content = '<h2>Connexion</h2>
                <form method="POST">
                    <input type="email" name="email" placeholder="Email">
                    <input type="password" name="password" placeholder="Mot de passe">
                    <button type="submit">Se connecter</button>
                </form>';
                break;
                
            default:
                $content = '<h1>Vue: ' . $viewName . '</h1>';
                break;
        }
        
        // Créer le fichier
        return file_put_contents($filePath, $content);
    }
}
?>