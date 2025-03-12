<?php
session_start();
require_once "authenticator/src/views/register.php";
require_once "authenticator/src/models/database.php";
require_once "authenticator/src/models/register.php";
$database = new database();
$register = new register();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $hasPassword = password_hash($password, PASSWORD_DEFAULT);

    //Verifier si email est deja utilisé
    $testemail = $register->verifiEmail($email);

    $nbremail = $testemail->rowCount();
    if ($nbremail > 0) {
        $_SESSION['message'] = "Cet email est deja utilisé";
        $_SESSION['type'] = 'danger';
        header("Location: index.php?page=register");
        exit();
    }

    //Insertion dans la base de donnee
    if ($register->create($name, $lastname, $phone, $email, $hasPassword)) {
        header("Location: index.php?page=register");
        exit();
    } else {
        $_SESSION['message'] = "Inscription reussir !";
        $_SESSION['type'] = 'success';
        return header("Location: index.php?page=login");
        exit();
    }
}
