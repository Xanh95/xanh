<?php session_start();
//  hiển thị thông tin user vừa đăng nhập thành công
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if (!isset($_SESSION['username'])) {
    $_SESSION['error'] = 'banj chuwa ddang nhapj';
    header('location: login.php');
    exit();
}
echo "<br>chào bạn" . $_SESSION['username'];
echo "<a href='logout.php'>Đăng Xuất</a>";
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
