<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            padding: 40px;
        }
        .box {
            background: white;
            padding: 30px;
            border-radius: 10px;
            max-width: 500px;
            margin: auto;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        a {
            display: inline-block;
            margin-top: 20px;
            color: white;
            background: #667eea;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Dashboard</h2>

    <?php if (isset($user)): ?>
        <p><strong>Nom :</strong> <?= htmlspecialchars($user['name']) ?></p>
        <p><strong>Email :</strong> <?= htmlspecialchars($user['email']) ?></p>

        <a href="index.php?url=logout">Se déconnecter</a>
    <?php else: ?>
        <p>Accès refusé</p>
        <a href="index.php?url=login">Se connecter</a>
    <?php endif; ?>
</div>

</body>
</html>
