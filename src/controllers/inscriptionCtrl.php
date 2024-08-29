<?php
require_once "models/User.php";

if (!empty($_POST)) {
    $user = new User();

    $user->pseudo = $_POST['pseudo'];
    $user->email = $_POST['email'];
    $user->password = $_POST['password'];


    $user->register();
}
