<?php session_start();
setcookie('username', $username, time() + -1);
unset($_SESSION['username']);
unset($_SESSION['password']);
$_SESSION['success'] = 'đăng xuất thành công';
header('location: login.php');
exit();
