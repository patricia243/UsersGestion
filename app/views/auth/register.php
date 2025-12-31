<?php
// Ici vous pouvez mettre votre logique PHP si nécessaire
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription | Elegant Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #7C3AED;
            --primary-light: #8B5CF6;
            --secondary: #F59E0B;
            --dark: #1F2937;
            --light: #F9FAFB;
            --success: #10B981;
            --error: #EF4444;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }

        /* Effets de fond */
        .background-effect {
            position: absolute;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            filter: blur(40px);
        }

        .circle:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -100px;
            left: -100px;
        }

        .circle:nth-child(2) {
            width: 200px;
            height: 200px;
            bottom: -50px;
            right: -50px;
        }

        /* Conteneur principal */
        .container {
            width: 100%;
            max-width: 420px;
            animation: fadeIn 0.8s ease-out;
        }

        /* Carte principale */
        .card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 40px;
            box-shadow: 
                0 20px 60px rgba(0, 0, 0, 0.15),
                inset 0 1px 0 rgba(255, 255, 255, 0.4);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
        }

        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }

        /* En-tête */
        .header {
            text-align: center;
            margin-bottom: 32px;
        }

        .logo {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 16px;
            box-shadow: 0 8px 20px rgba(124, 58, 237, 0.3);
        }

        .logo i {
            color: white;
            font-size: 24px;
        }

        .header h1 {
            font-size: 28px;
            color: var(--dark);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .header p {
            color: #6B7280;
            font-size: 14px;
            line-height: 1.5;
        }

        /* Groupes de formulaire */
        .form-group {
            margin-bottom: 24px;
            position: relative;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            color: var(--dark);
            font-weight: 500;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .form-label i {
            color: var(--primary);
        }

        .input-wrapper {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 16px;
            top: 50%;
            transform: translateY(-50%);
            color: #9CA3AF;
            transition: color 0.3s;
        }

        .form-control {
            width: 100%;
            padding: 14px 16px 14px 44px;
            border: 2px solid #E5E7EB;
            border-radius: 12px;
            font-size: 15px;
            color: var(--dark);
            background: white;
            transition: all 0.3s;
        }

        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 4px rgba(124, 58, 237, 0.1);
        }

        .form-control:focus + .input-icon {
            color: var(--primary);
        }

        /* Bouton */
        .btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            transition: all 0.3s;
            margin-top: 8px;
            box-shadow: 0 8px 20px rgba(124, 58, 237, 0.3);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(124, 58, 237, 0.4);
        }

        .btn:active {
            transform: translateY(0);
        }

        /* Lien de connexion */
        .login-link {
            text-align: center;
            margin-top: 24px;
            padding-top: 24px;
            border-top: 1px solid #E5E7EB;
        }

        .login-link p {
            color: #6B7280;
            font-size: 14px;
        }

        .login-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: color 0.3s;
        }

        .login-link a:hover {
            color: var(--primary-light);
            text-decoration: underline;
        }

        /* Messages */
        .message {
            padding: 14px;
            border-radius: 12px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 12px;
            animation: slideDown 0.3s ease-out;
        }

        .message.success {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
            border: 1px solid rgba(16, 185, 129, 0.2);
        }

        .message.error {
            background: rgba(239, 68, 68, 0.1);
            color: var(--error);
            border: 1px solid rgba(239, 68, 68, 0.2);
        }

        /* Animation pour la force du mot de passe */
        .password-strength {
            height: 4px;
            background: #E5E7EB;
            border-radius: 2px;
            margin-top: 8px;
            overflow: hidden;
            position: relative;
        }

        .strength-bar {
            height: 100%;
            width: 0;
            border-radius: 2px;
            transition: all 0.3s;
        }

        /* Responsive */
        @media (max-width: 480px) {
            .card {
                padding: 30px 24px;
            }
            
            .header h1 {
                font-size: 24px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Effet de flottement */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .floating {
            animation: float 6s ease-in-out infinite;
        }
    </style>
</head>
<body>
    <!-- Effets de fond -->
    <div class="background-effect">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

    <div class="container">
        <div class="card floating">
            <!-- En-tête -->
            <div class="header">
                <div class="logo">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h1>Créer un compte</h1>
                <p>Rejoignez notre communauté et commencez votre voyage</p>
            </div>

            <!-- Messages d'erreur/succès (si existants) -->
            <?php if (isset($message)): ?>
                <div class="message <?php echo $message['type']; ?>">
                    <i class="fas fa-<?php echo $message['type'] === 'success' ? 'check-circle' : 'exclamation-circle'; ?>"></i>
                    <span><?php echo htmlspecialchars($message['text']); ?></span>
                </div>
            <?php endif; ?>

            <!-- Formulaire -->
            <form method="POST" action="index.php?url=register" id="registerForm">
                <div class="form-group">
                    <label class="form-label" for="name">
                        <i class="fas fa-user"></i>
                        <span>Nom complet</span>
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-user input-icon"></i>
                        <input type="text" 
                               id="name" 
                               name="name" 
                               class="form-control" 
                               placeholder="Votre nom et prénom" 
                               required
                               value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="email">
                        <i class="fas fa-envelope"></i>
                        <span>Adresse email</span>
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-envelope input-icon"></i>
                        <input type="email" 
                               id="email" 
                               name="email" 
                               class="form-control" 
                               placeholder="exemple@email.com" 
                               required
                               value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="password">
                        <i class="fas fa-lock"></i>
                        <span>Mot de passe</span>
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" 
                               id="password" 
                               name="password" 
                               class="form-control" 
                               placeholder="Minimum 8 caractères" 
                               required>
                    </div>
                    <div class="password-strength">
                        <div class="strength-bar" id="strengthBar"></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label" for="confirm_password">
                        <i class="fas fa-lock"></i>
                        <span>Confirmer le mot de passe</span>
                    </label>
                    <div class="input-wrapper">
                        <i class="fas fa-lock input-icon"></i>
                        <input type="password" 
                               id="confirm_password" 
                               name="confirm_password" 
                               class="form-control" 
                               placeholder="Répétez votre mot de passe" 
                               required>
                    </div>
                </div>

                <button type="submit" class="btn">
                    <i class="fas fa-user-plus"></i>
                    <span>S'inscrire</span>
                </button>
            </form>

            <!-- Lien vers la page de connexion -->
            <div class="login-link">
                <p>
                    Déjà un compte ? 
                    <a href="index.php?url=login">
                        <i class="fas fa-sign-in-alt"></i>
                        <span>Se connecter</span>
                    </a>
                </p>
            </div>
        </div>
    </div>

    <script>
        // Animation de la force du mot de passe
        const passwordInput = document.getElementById('password');
        const strengthBar = document.getElementById('strengthBar');
        
        passwordInput.addEventListener('input', function() {
            const password = this.value;
            let strength = 0;
            
            // Vérifier la longueur
            if (password.length >= 8) strength += 25;
            
            // Vérifier les lettres minuscules
            if (/[a-z]/.test(password)) strength += 25;
            
            // Vérifier les lettres majuscules
            if (/[A-Z]/.test(password)) strength += 25;
            
            // Vérifier les chiffres
            if (/[0-9]/.test(password)) strength += 25;
            
            // Appliquer la couleur en fonction de la force
            strengthBar.style.width = strength + '%';
            
            if (strength < 50) {
                strengthBar.style.backgroundColor = '#EF4444'; // Rouge
            } else if (strength < 75) {
                strengthBar.style.backgroundColor = '#F59E0B'; // Orange
            } else {
                strengthBar.style.backgroundColor = '#10B981'; // Vert
            }
        });
        
        // Validation du formulaire
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = document.getElementById('password').value;
            const confirmPassword = document.getElementById('confirm_password').value;
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            
            let errors = [];
            
            // Validation du nom
            if (name.length < 2) {
                errors.push('Le nom doit contenir au moins 2 caractères');
            }
            
            // Validation de l'email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                errors.push('Veuillez entrer une adresse email valide');
            }
            
            // Validation du mot de passe
            if (password.length < 8) {
                errors.push('Le mot de passe doit contenir au moins 8 caractères');
            }
            
            if (password !== confirmPassword) {
                errors.push('Les mots de passe ne correspondent pas');
            }
            
            // Si erreurs, afficher message
            if (errors.length > 0) {
                e.preventDefault();
                
                // Créer ou mettre à jour le message d'erreur
                let messageDiv = document.querySelector('.message.error');
                if (!messageDiv) {
                    messageDiv = document.createElement('div');
                    messageDiv.className = 'message error';
                    messageDiv.innerHTML = '<i class="fas fa-exclamation-circle"></i><span></span>';
                    const form = document.getElementById('registerForm');
                    form.parentNode.insertBefore(messageDiv, form);
                }
                
                messageDiv.querySelector('span').textContent = errors.join('. ');
                
                // Animation
                messageDiv.style.animation = 'none';
                setTimeout(() => {
                    messageDiv.style.animation = 'slideDown 0.3s ease-out';
                }, 10);
                
                return false;
            }
        });
        
        // Effet de focus sur les champs
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.classList.add('focused');
            });
            
            input.addEventListener('blur', function() {
                if (!this.value) {
                    this.parentElement.classList.remove('focused');
                }
            });
        });
    </script>
</body>
</html>



<?php
// Autre code PHP si nécessaire
?>