<?php
session_start();
include('../connection.php');
unset($_SESSION['id']);
header("Location:http://localhost/uipractice/login.php");
?>
