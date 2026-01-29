<?php 
$page_title = 'Inscription - User Manager'; 
?>

<div class="auth-container">
    <div class="form-box">
        <h2 class="text-center mb-4">📝 Inscription</h2>
        
        <?php if (isset($error) && $error): ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Erreur!</strong> <?php echo htmlspecialchars($error); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="index.php?url=auth/register" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Nom complet</label>
                <input type="text" class="form-control" id="name" name="name" 
                       placeholder="Jean Dupont" required
                       value="<?php echo isset($old['name']) ? htmlspecialchars($old['name']) : ''; ?>">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Adresse e-mail</label>
                <input type="email" class="form-control" id="email" name="email" 
                       placeholder="exemple@email.com" required
                       value="<?php echo isset($old['email']) ? htmlspecialchars($old['email']) : ''; ?>">
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" 
                       placeholder="Min. 6 caractères" required>
                <small class="form-text text-muted">Minimum 6 caractères</small>
            </div>
            
            <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirmer le mot de passe</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" 
                       placeholder="Confirmez votre mot de passe" required>
            </div>
            
            <button type="submit" class="btn btn-success w-100 mb-3">S'inscrire</button>
        </form>
        
        <hr>
        
        <div class="text-center">
            <p class="text-muted">Déjà un compte?</p>
            <a href="index.php?url=auth/login" class="btn btn-outline-primary w-100">
                Se connecter
            </a>
        </div>
    </div>
</div>