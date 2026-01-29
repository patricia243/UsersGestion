<?php
$page_title = 'Connexion - User Manager';
?>

<div class="min-h-[60vh] flex items-center justify-center">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
        <div class="mb-4">
            <a href="index.php?url=home/dashboard" class="text-sm text-gray-500 hover:text-gray-900">← Retour</a>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">🔐 Connexion</h2>

        <?php if (!empty($error)): ?>
            <div class="mb-4 p-3 rounded bg-red-50 border border-red-200 text-red-700">
                <strong>Erreur:</strong> <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="mb-4 p-3 rounded bg-green-50 border border-green-200 text-green-700">
                <strong>Succès:</strong> <?php echo htmlspecialchars($success); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="index.php?url=auth/login" class="space-y-4">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                <input id="email" name="email" type="email" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="exemple@email.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Votre mot de passe">
            </div>

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded font-semibold hover:bg-blue-700 transition">Se connecter</button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-4">Pas encore de compte? <a href="index.php?url=auth/register" class="text-blue-600 font-medium">S'inscrire</a></p>
    </div>
</div>