<?php 
$page_title = 'Tableau de bord - User Manager'; 
?>

<?php if (isset($user) && $user): ?>
    <div class="row mb-4">
        <div class="col-md-8">
            <h1 class="mb-3">👋 Bienvenue, <?php echo htmlspecialchars($user['name']); ?>!</h1>
            <p class="lead text-muted">Gérez votre compte et vos informations personnelles depuis ce tableau de bord.</p>
        </div>
        <div class="col-md-4 text-end">
            <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($user['name']); ?>&background=007bff&color=fff" 
                 alt="Avatar" class="rounded-circle" style="width: 80px; height: 80px;">
        </div>
    </div>
    
    <div class="row g-4">
        <!-- Informations utilisateur -->
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="card-title mb-0">📋 Mes Informations</h5>
                </div>
                <div class="card-body">
                    <dl class="row">
                        <dt class="col-sm-4">Nom :</dt>
                        <dd class="col-sm-8"><?php echo htmlspecialchars($user['name']); ?></dd>
                        
                        <dt class="col-sm-4">Email :</dt>
                        <dd class="col-sm-8"><?php echo htmlspecialchars($user['email']); ?></dd>
                        
                        <dt class="col-sm-4">Membre depuis :</dt>
                        <dd class="col-sm-8"><?php echo isset($user['created_at']) ? date('d/m/Y', strtotime($user['created_at'])) : 'N/A'; ?></dd>
                    </dl>
                </div>
            </div>
        </div>
        
        <!-- Actions rapides -->
        <div class="col-md-6">
            <div class="card h-100">
                <div class="card-header bg-success text-white">
                    <h5 class="card-title mb-0">⚙️ Actions Rapides</h5>
                </div>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-primary mb-2 w-100">Modifier mon profil</a>
                    <a href="#" class="btn btn-outline-warning mb-2 w-100">Changer mon mot de passe</a>
                    <a href="index.php?url=auth/logout" class="btn btn-outline-danger w-100">Se déconnecter</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Statistiques -->
    <div class="row g-4 mt-4">
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h6 class="card-title text-muted">Connexions</h6>
                    <h3 class="text-primary">1</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h6 class="card-title text-muted">Actif depuis</h6>
                    <h3 class="text-success">✓</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h6 class="card-title text-muted">Sécurité</h6>
                    <h3 class="text-warning">🔒</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-center">
                <div class="card-body">
                    <h6 class="card-title text-muted">Status</h6>
                    <h3 class="text-info">Actif</h3>
                </div>
            </div>
        </div>
    </div>

<?php else: ?>
    <div class="alert alert-warning alert-lg" role="alert">
        <h4 class="alert-heading">⚠️ Accès Refusé</h4>
        <p>Vous devez être connecté pour accéder à cette page.</p>
        <hr>
        <a href="index.php?url=auth/login" class="btn btn-primary">Se connecter</a>
        <a href="index.php?url=auth/register" class="btn btn-success">S'inscrire</a>
    </div>
<?php endif; ?>
