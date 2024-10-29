<?php
session_start();
if (empty($_SESSION['id'])) header('Location: ./index.php');
require_once "models/User.php";
$user = new User();

$user->id = $_SESSION['id'];
$user->delete();
session_destroy();
header('Location: ./index.php');

