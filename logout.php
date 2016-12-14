<?
ob_start();
session_start();
unset($_SESSION['session_username']);
session_destroy();
header("location:login.php");
ob_end_flush();
?>