<?php if (isset($user) && $user): ?>
                    <h1>Dashboard de <?php echo htmlspecialchars($user["email"]); ?></h1>
                    <p>Bienvenue sur votre tableau de bord.</p>
                    <a href="index.php?url=auth/logout">Déconnexion</a>
                <?php else: ?>
                    <h1>Non connecté</h1>
                    <p>Veuillez vous <a href="index.php?url=auth/login">connecter</a>.</p>
                <?php endif; ?>