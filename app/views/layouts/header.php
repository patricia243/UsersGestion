<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Application'; ?></title>
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="flex flex-col min-h-screen bg-gray-50 font-sans">
    <!-- Navigation -->
    <nav class="bg-gradient-to-r from-blue-600 to-blue-800 shadow-md">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <a href="/Users/public/?url=home/dashboard" class="flex items-center text-white font-bold text-xl hover:opacity-80 transition">
                    🔐 User Manager
                </a>
                
                <!-- Menu Mobile Toggle -->
                <button id="mobile-menu-btn" class="md:hidden text-white hover:bg-blue-700 p-2 rounded">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                
                <!-- Menu Desktop -->
                <div class="hidden md:flex space-x-6">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <a href="/Users/public/?url=home/dashboard" class="text-white hover:opacity-80 transition">
                            📊 Tableau de bord
                        </a>
                        <a href="/Users/public/?url=auth/logout" class="text-white hover:opacity-80 transition">
                            🚪 Déconnexion
                        </a>
                    <?php else: ?>
                        <a href="/Users/public/?url=auth/login" class="text-white hover:opacity-80 transition">
                            🔑 Connexion
                        </a>
                        <a href="/Users/public/?url=auth/register" class="text-white hover:opacity-80 transition">
                            ➕ Inscription
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            
            <!-- Menu Mobile -->
            <div id="mobile-menu" class="hidden md:hidden pb-4 space-y-2">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <a href="/Users/public/?url=home/dashboard" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">
                        📊 Tableau de bord
                    </a>
                    <a href="/Users/public/?url=auth/logout" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">
                        🚪 Déconnexion
                    </a>
                <?php else: ?>
                    <a href="/Users/public/?url=auth/login" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">
                        🔑 Connexion
                    </a>
                    <a href="/Users/public/?url=auth/register" class="block text-white hover:bg-blue-700 px-3 py-2 rounded">
                        ➕ Inscription
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </nav>
    
    <!-- Main Content -->
    <main class="flex-1 py-10 px-4">
        <div class="max-w-7xl mx-auto">
