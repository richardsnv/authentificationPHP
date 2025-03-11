<?php

require_once "authenticator/src/models/database.php";
// $db = new database();
var_dump($user);
$page = isset($_GET['page']) ? $_GET['page'] : 'register';

switch ($page) {
    case 'register':
        include_once 'authenticator/src/controllers/registerController.php';
        break;
    case 'login':
        include_once 'authenticator/src/controllers/loginController.php';
        break;
    default:
        include_once 'authenticator/src/views/home.php';
}
