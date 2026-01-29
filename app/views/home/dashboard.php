<?php 
$page_title = 'Tableau de bord - User Manager'; 
?>

<?php if (isset($_SESSION['user_id'])): ?>
    <!-- DASHBOARD UTILISATEUR CONNECTÉ -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="md:col-span-3">
            <div class="flex items-center gap-6">
                <img src="https://ui-avatars.com/api/?name=<?php echo urlencode($_SESSION['user_name'] ?? 'User'); ?>&background=3B82F6&color=fff&bold=true&size=100" 
                     alt="Avatar" class="w-24 h-24 rounded-full shadow-lg">
                <div>
                    <h1 class="text-4xl font-bold text-gray-900">👋 Bienvenue, <?php echo htmlspecialchars($_SESSION['user_name'] ?? 'Utilisateur'); ?>!</h1>
                    <p class="text-gray-600 mt-2">Gérez votre compte et vos informations personnelles depuis ce tableau de bord.</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
        <!-- Informations utilisateur -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200">
            <div class="bg-blue-600 text-white px-6 py-4 rounded-t-lg">
                <h5 class="text-lg font-bold">📋 Mes Informations</h5>
            </div>
            <div class="p-6 space-y-4">
                <div>
                    <label class="text-sm text-gray-600 font-semibold">Nom</label>
                    <p class="text-gray-900 font-semibold"><?php echo htmlspecialchars($_SESSION['user_name'] ?? 'N/A'); ?></p>
                </div>
                <div>
                    <label class="text-sm text-gray-600 font-semibold">Email</label>
                    <p class="text-gray-900 font-semibold"><?php echo htmlspecialchars($_SESSION['user_email'] ?? 'N/A'); ?></p>
                </div>
                <div>
                    <label class="text-sm text-gray-600 font-semibold">Membre depuis</label>
                    <p class="text-gray-900 font-semibold"><?php echo date('d/m/Y'); ?></p>
                </div>
            </div>
        </div>
        
        <!-- Actions rapides -->
        <div class="bg-white rounded-lg shadow-md border border-gray-200">
            <div class="bg-green-600 text-white px-6 py-4 rounded-t-lg">
                <h5 class="text-lg font-bold">⚙️ Actions Rapides</h5>
            </div>
            <div class="p-6 space-y-3">
                <a href="#" class="block w-full px-4 py-2 border border-blue-600 text-blue-600 rounded hover:bg-blue-50 transition font-semibold">
                    ✏️ Modifier mon profil
                </a>
                <a href="#" class="block w-full px-4 py-2 border border-yellow-500 text-yellow-600 rounded hover:bg-yellow-50 transition font-semibold">
                    🔑 Changer mon mot de passe
                </a>
                <a href="index.php?url=auth/logout" class="block w-full px-4 py-2 border border-red-600 text-red-600 rounded hover:bg-red-50 transition font-semibold">
                    🚪 Se déconnecter
                </a>
            </div>
        </div>
    </div>
    
    <!-- Statistiques -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="text-3xl mb-2">🔐</div>
            <p class="text-gray-600 text-sm font-semibold">Sécurité</p>
            <p class="text-2xl font-bold text-green-600">Optimale</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-green-500">
            <div class="text-3xl mb-2">✅</div>
            <p class="text-gray-600 text-sm font-semibold">Status</p>
            <p class="text-2xl font-bold text-green-600">Actif</p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-blue-500">
            <div class="text-3xl mb-2">📅</div>
            <p class="text-gray-600 text-sm font-semibold">Aujourd'hui</p>
            <p class="text-2xl font-bold text-blue-600"><?php echo date('d/m'); ?></p>
        </div>
        <div class="bg-white rounded-lg shadow-md p-6 border-l-4 border-yellow-500">
            <div class="text-3xl mb-2">⚡</div>
            <p class="text-gray-600 text-sm font-semibold">Connexions</p>
            <p class="text-2xl font-bold text-yellow-600">1</p>
        </div>
    </div>

<?php else: ?>
    <!-- PAGE DE BIENVENUE VISITEUR -->
    <section class="min-h-96 flex flex-col justify-center items-center text-center py-12">
        <div class="mb-8">
            <div class="text-8xl mb-6">🔐</div>
            <h1 class="text-5xl font-bold text-gray-900 mb-3">Bienvenue sur User Manager</h1>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Gérez facilement vos utilisateurs et accédez à votre espace personnel sécurisé.
            </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 max-w-5xl mb-12 w-full px-4">
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="text-5xl mb-3">🔒</div>
                <h5 class="text-lg font-bold text-gray-900 mb-2">Sécurisé</h5>
                <p class="text-gray-600">Authentification fiable pour protéger vos données.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="text-5xl mb-3">✨</div>
                <h5 class="text-lg font-bold text-gray-900 mb-2">Ergonomique</h5>
                <p class="text-gray-600">Interface intuitive et accessible partout.</p>
            </div>
            
            <div class="bg-white rounded-lg shadow-md p-6 text-center hover:shadow-lg transition">
                <div class="text-5xl mb-3">⚡</div>
                <h5 class="text-lg font-bold text-gray-900 mb-2">Rapide</h5>
                <p class="text-gray-600">Connexion instantanée et gestion simplifiée.</p>
            </div>
        </div>
        
        <div class="flex flex-col md:flex-row gap-4 w-full max-w-md px-4">
            <a href="index.php?url=auth/register" class="flex-1 bg-green-600 text-white py-3 px-6 rounded-lg font-bold hover:bg-green-700 transition">
                ➕ Créer un compte
            </a>
            <a href="index.php?url=auth/login" class="flex-1 bg-blue-600 text-white py-3 px-6 rounded-lg font-bold hover:bg-blue-700 transition">
                🔑 Se connecter
            </a>
        </div>
    </section>

<?php endif; ?>
