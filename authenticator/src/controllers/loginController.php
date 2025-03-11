<?php
session_start();
require_once 'authenticator/src/views/login.php';
$database = new database();
$login = new login();
if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // Recuperation des donnes du formulaire

    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $user = $login->getEmail($email);
    if ($user) {
       
        //verification du mot de passe 
        if (password_verify($password, $user['password'])) {
            $_SESSION['message'] = "Connexion reussie !";
            $_SESSION['user_id'] = $user['id']; // recupere l'id de l'utilisateur 
            header("Location: index.php?page=login");
            exit();
        } else {
            $_SESSION['message'] = "Utilisateur non trouvé.";
            $_SESSION['type'] = "error";
            header("Location: index.php?page=home");
            exit();
        }
    }
}
