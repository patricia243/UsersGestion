<?php
?>
        </div>
    </main>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <h6>À propos</h6>
                    <p>Application de gestion des utilisateurs avec authentification sécurisée.</p>
                </div>
                <div class="col-md-4 mb-3">
                    <h6>Liens rapides</h6>
                    <ul class="list-unstyled">
                        <li><a href="/Users/public/?url=auth/login" class="text-white-50 text-decoration-none">Connexion</a></li>
                        <li><a href="/Users/public/?url=auth/register" class="text-white-50 text-decoration-none">Inscription</a></li>
                    </ul>
                </div>
                <div class="col-md-4 mb-3">
                    <h6>Contact</h6>
                    <p class="text-white-50">Email: contact@example.com</p>
                </div>
            </div>
            <hr class="bg-secondary">
            <div class="text-center text-white-50">
                <p>&copy; 2026 User Manager. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
    
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- JS Custom -->
    <script>
        // Auto-close alerts après 5 secondes
        document.querySelectorAll('.alert').forEach(alert => {
            if (!alert.querySelector('.alert-danger')) {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 5000);
            }
        });
    </script>
</body>
</html>