<?php
ob_start();
session_start();

//  To Logout User
$_SESSION['username'] = null;
$_SESSION['email'] = null;
$_SESSION['user_id'] = null;

header("Location: ../index.php");
