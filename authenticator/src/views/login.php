
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Page de connexion</title>
    <link rel="stylesheet" href="authenticator/assets/bootstrap/css/bootstrap.min.css">
</head>

<body class="d-flex justify-content-center align-items-center vh-100 bg-light">

    <div class="card p-4 shadow-lg" style="width: 350px;">
        <h3 class="text-center mb-4">Connexion</h3>
        <form method="POST">
            <?php if (isset($_SESSION['message']) && !empty($_SESSION['message'])) : ?>
                <div class="alert alert-<?php echo $_SESSION['type']; ?>">
                    <?php echo $_SESSION['message']; ?>
                </div>
                <?php
                unset($_SESSION['message']);
                unset($_SESSION['type']);
                ?>
            <?php endif ?>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" name="submit" class="btn btn-primary w-100">Se connecter</button> <a href="#">Mot de passe oublié ?</a><br>
            <a class="already" href="?page=register">You already have an account? Login here.</a>
        </form>
        <div class="text-center mt-3">

        </div>
    </div>
    <script src="authenticator/assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>