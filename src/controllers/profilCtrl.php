<?php
session_start();

if (empty($_SESSION['id'])) header('Location: ./index.php');



require_once './models/User.php';
$user = new User();

$user->id = $_SESSION['id'];
$error = [];

if (!empty($_POST)) {
    if (!empty($_POST['pseudo'])) {
        if (strlen($_POST['pseudo']) >= 3 && strlen($_POST['pseudo']) <= 50) {
            $user->pseudo = $_POST['pseudo'];
            $user->updatePseudo();
        } else {
            $error['pseudo'] = 'pseudo must be between 3 and 50 characters';
        }
    } else {
        $error['pseudo'] = 'pseudo is required';
    }
    
    
    $userData = $user->getUserById();
    
    if (!empty($_POST['email'])) {
        if (strlen($_POST['email']) <= 255) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $user->email = $_POST['email'];
                $user->updateEmail();
            } else {
                $error['email'] = 'Email is not valid';
            }
        } else {
            $error['email'] = 'Email must be less than 255 characters';
        }
    } else {
        $error['email'] = 'email is required';
    }
    
    
    if (!empty($_POST['new_password']) || !empty($_POST['old_password'])) {
        if (!empty($_POST['new_password'])) {
            if (!empty($_POST['old_password'])) {
                if (password_verify(password: $_POST['old_password'], hash: $userData->password)) {
                    $user->password = password_hash($_POST['new_password'], PASSWORD_DEFAULT);;
                    $user->updatePassword();
                } else {
                    $error['old_password'] = 'Invalid password';
                }
            } else {
                $error['old_password'] = 'Please enter a new password';
            }
        } else {
            $error['new_password'] = 'Please enter a new password';
        }
    }
}

$userData = $user->getUserById();
