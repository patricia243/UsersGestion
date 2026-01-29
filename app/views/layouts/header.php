<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? htmlspecialchars($page_title) : 'Application'; ?></title>
    
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- CSS Custom -->
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --success-color: #28a745;
            --danger-color: #dc3545;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        html, body {
            height: 100%;
        }
        
        body {
            display: flex;
            flex-direction: column;
            background-color: #f8f9fa;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        nav {
            background: linear-gradient(135deg, var(--primary-color), #0056b3);
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        nav a {
            font-weight: 500;
            transition: opacity 0.3s ease;
        }
        
        nav a:hover {
            opacity: 0.8;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        main {
            flex: 1;
            padding: 40px 0;
        }
        
        .container {
            max-width: 1200px;
        }
        
        footer {
            background-color: #343a40;
            color: white;
            padding: 30px 0;
            margin-top: auto;
            border-top: 1px solid #dee2e6;
        }
        
        footer p {
            margin-bottom: 0;
        }
        
        .alert {
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .btn {
            border-radius: 5px;
            font-weight: 500;
            transition: all 0.3s ease;
        }
        
        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .form-control {
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        
        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 0.2rem rgba(0,123,255,0.25);
        }
        
        .auth-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 60vh;
        }
        
        .form-box {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 450px;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/Users/public/?url=home/dashboard">🔐 User Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Users/public/?url=home/dashboard">Tableau de bord</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Users/public/?url=auth/logout">Déconnexion</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/Users/public/?url=auth/login">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Users/public/?url=auth/register">Inscription</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Contenu principal -->
    <main>
        <div class="container">