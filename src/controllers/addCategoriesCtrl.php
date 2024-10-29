<?php
session_start();


if (!empty($_POST)) {
    require_once "models/Categories.php";
    $categories = new Categories();
    $error = [];

    if (!empty($_POST['name'])) {
        if (strlen($_POST['name']) >= 3 && strlen($_POST['name']) <= 50) {
            $categories->name = htmlspecialchars($_POST['name']);
        } else {
            $error['name'] = 'name must be between 3 and 50 characters';
        }
    } else {
        $error['name'] = 'name is required';
    }

    if (empty($error)) {
        $name->register();
        header('Location: index.php');
    }
}
