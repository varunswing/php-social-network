<?php
session_start();
session_destroy();
if(!isset($_SESSION['user_id'])) header('Location:login.php');
else header('Location:dashboard.php');
?>