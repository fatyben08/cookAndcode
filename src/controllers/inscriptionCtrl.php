<?php
session_start();

if (!empty($_POST)) {
    require_once "models/User.php";
    $user = new User();
    $error = [];
    
    if (!empty($_POST['pseudo'])) {
        if (strlen($_POST['pseudo']) >= 3 && strlen($_POST['pseudo']) <= 50) {
            if (preg_match('/^[A-Z][a-z]+(-[A-Z][a-z]+)?$/', $_POST['pseudo'])) {
                $user->pseudo = htmlspecialchars($_POST['pseudo']);
            } else {
                $error['pseudo'] = 'pseudo must start with a capital letter and be composed of letters and dashes';
            }
        } else {
            $error['pseudo'] = 'pseudo must be between 3 and 50 characters';
        }
    } else {
        $error['pseudo'] = 'pseudo is required';
    }

    if (!empty($_POST['email'])) {
        if (strlen($_POST['email']) <= 255) {
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $user->email = htmlspecialchars($_POST['email']);
                $checkUser = $user->getUserByEmail();
                if ($checkUser) {
                    $error['email'] = 'Email already exists';
                }
            } else {
                $error['email'] = 'Email is not valid';
            }
        } else {
            $error['email'] = 'Email must be less than 50 characters';
        }
    } else {
        $error['email'] = 'Email is required';
    }

    if (!empty($_POST['password'])) {
        if (strlen($_POST['password']) >= 3) {
            if (!empty($_POST['password-confirm'])) {
                if ($_POST['password'] == $_POST['password-confirm']) {
                    $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                } else {
                    $error['password-confirm'] = 'Passwords do not match';
                }
            } else {
                $error['password-confirm'] = 'Confirm password is required';
            }
        } else {
            $error['password'] = 'Password must be more than 3 characters';
        }
    } else {
        $error['password'] = 'Password is required';
    }

    if (empty($error)) {
        $user->register();
        $userConnected = $user->getUserByPseudo();
        $userId = $userConnected->id;
        $_SESSION['id'] = $userId;
        header('Location: index.php');
    }
}





