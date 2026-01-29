<?php 
$page_title = 'Connexion - User Manager'; 
?>

<div class="auth-container">
    <div class="form-box">
        <h2 class="text-center mb-4">🔐 Connexion</h2>
        
        <?php if (isset($error) && $error): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erreur!</strong> <?php echo htmlspecialchars($error); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <?php if (isset($success) && $success): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Succès!</strong> <?php echo htmlspecialchars($success); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="index.php?url=auth/login" novalidate>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" 
                       placeholder="exemple@email.com" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" 
                       placeholder="Votre mot de passe" required>
            </div>
            
            <button type="submit" class="btn btn-primary w-100 mb-3">Se connecter</button>
        </form>
        
        <hr>
        
        <div class="text-center">
            <p class="text-muted">Pas encore de compte?</p>
            <a href="index.php?url=auth/register" class="btn btn-outline-primary w-100">
                S'inscrire maintenant
            </a>
        </div>
    </div>
</div>