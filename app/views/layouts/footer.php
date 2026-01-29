        </div>
    </main>
    
    <!-- Footer -->
    <footer class="bg-gray-900 text-white mt-auto border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 py-12 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                <div>
                    <h6 class="text-lg font-bold mb-3">À propos</h6>
                    <p class="text-gray-400">Application de gestion des utilisateurs avec authentification sécurisée.</p>
                </div>
                <div>
                    <h6 class="text-lg font-bold mb-3">Liens rapides</h6>
                    <ul class="space-y-2 text-gray-400">
                        <li><a href="/Users/public/?url=auth/login" class="hover:text-white transition">🔑 Connexion</a></li>
                        <li><a href="/Users/public/?url=auth/register" class="hover:text-white transition">➕ Inscription</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-lg font-bold mb-3">Contact</h6>
                    <p class="text-gray-400">Email: contact@example.com</p>
                </div>
            </div>
            <div class="border-t border-gray-800 pt-8 text-center text-gray-500">
                <p>&copy; 2026 User Manager. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    
    <!-- Mobile Menu Script -->
    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>