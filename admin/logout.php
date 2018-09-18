<?php
/*
session_start();
if(isset($_SESSION['login_admin']))
{
unset($_SESSION['login_admin']);
}
 */
if(isset($_COOKIE['login_admin']))
    setcookie ('login_admin','',time());
header('location:login.php');
?>