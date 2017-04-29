<?php
session_start();
include('../connection.php');
unset($_SESSION['id']);
header("Location:".$base_url."/login.php");
?>
