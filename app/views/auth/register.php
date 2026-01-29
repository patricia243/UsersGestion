<?php
$page_title = 'Inscription - User Manager';
?>

<div class="min-h-[60vh] flex items-center justify-center">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-8">
        <div class="mb-4">
            <a href="index.php?url=home/dashboard" class="text-sm text-gray-500 hover:text-gray-900">← Retour</a>
        </div>
        <h2 class="text-2xl font-bold text-gray-900 mb-6 text-center">📝 Inscription</h2>

        <?php if (!empty($error)): ?>
            <div class="mb-4 p-3 rounded bg-red-50 border border-red-200 text-red-700">
                <strong>Erreur:</strong> <?php echo htmlspecialchars($error); ?>
            </div>
        <?php endif; ?>

        <form method="POST" action="index.php?url=auth/register" class="space-y-4">
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nom complet</label>
                <input id="name" name="name" type="text" required
                       value="<?php echo isset($old['name']) ? htmlspecialchars($old['name']) : ''; ?>"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Jean Dupont">
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Adresse e-mail</label>
                <input id="email" name="email" type="email" required
                       value="<?php echo isset($old['email']) ? htmlspecialchars($old['email']) : ''; ?>"
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="exemple@email.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Min. 6 caractères">
                <p class="text-xs text-gray-500 mt-1">Minimum 6 caractères</p>
            </div>

            <div>
                <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirmer le mot de passe</label>
                <input id="confirm_password" name="confirm_password" type="password" required
                       class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-500" placeholder="Confirmez votre mot de passe">
            </div>

            <button type="submit" class="w-full bg-green-600 text-white py-2 rounded font-semibold hover:bg-green-700 transition">S'inscrire</button>
        </form>

        <p class="text-center text-sm text-gray-500 mt-4">Déjà un compte? <a href="index.php?url=auth/login" class="text-blue-600 font-medium">Se connecter</a></p>
    </div>
</div>