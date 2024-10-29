<?php
session_start();
if (!empty($_POST)) {
    require_once "models/User.php";
    $user = new User();
    $error = [];


    
    if (!empty($_POST['pseudo'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
    } else {
        $error['pseudo'] = 'Pseudo is required';
    }
    
    if (!empty($_POST['password'])) {
        $password = htmlspecialchars($_POST['password']);
    } else {
        $error['password'] = 'Password is required';
    }
    
    if (empty($error)) {
        $user->pseudo = $_POST['pseudo'];
        $userConnected = $user->getUserByPseudo();
        
        if ($userConnected) {
            if (password_verify($password,  $userConnected->password)) {
                $userId = $userConnected->id;
                $_SESSION['id'] = $userId;
                $userPseudo = $userConnected->pseudo;
                $userEmail = $userConnected->email;
                // $usernames[] = $userInfo->
                header('Location:index.php');

            } else {
                $error['password'] = 'Incorrect password';
                var_dump($error);
            }
        } else {
            $error['pseudo'] = 'Incorrect pseudo';
        }

    }

}


