<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }
        
        .register-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }
        
        input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        button {
            width: 100%;
            padding: 14px;
            background: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }
        
        button:hover {
            background: #218838;
        }
        
        .error {
            color: #dc3545;
            background: #f8d7da;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .login-link a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Inscription</h2>
        
        <?php if (isset($error) && $error): ?>
            <div class="error"><?php echo htmlspecialchars($error); ?></div>
        <?php endif; ?>
        
        <form method="POST" action="index.php?url=auth/register">
            <input type="text" 
                   name="name" 
                   placeholder="Nom complet" 
                   required
                   value="<?php echo isset($old['name']) ? htmlspecialchars($old['name']) : ''; ?>">
            
            <input type="email" 
                   name="email" 
                   placeholder="Email" 
                   required
                   value="<?php echo isset($old['email']) ? htmlspecialchars($old['email']) : ''; ?>">
            
            <input type="password" 
                   name="password" 
                   placeholder="Mot de passe (min. 6 caractères)" 
                   required>
            
            <input type="password" 
                   name="confirm_password" 
                   placeholder="Confirmer le mot de passe" 
                   required>
            
            <button type="submit">S'inscrire</button>
        </form>
        
        <div class="login-link">
            <p>Déjà un compte? <a href="index.php?url=auth/login">Se connecter</a></p>
        </div>
    </div>
</body>
</html>