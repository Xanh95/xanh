<!-- ứng dụng login đơn giản áp dụng session cookieL tạo cấu trúc -->
<?php session_start();
//   xử lý form 
// debug 
echo '<pre>';
print_r($_POST);
echo '</pre>';
if (isset($_COOKIE['username'])) {
    $_SESSION['username'] = $_COOKIE['username'];
    $_SESSION['success'] = 'ghi nhớ đăng nhập thành công';
    header('location: profile.php');
    exit();
}
if (isset($_SESSION['username'])) {
    $_SESSION['success'] = 'bạn đã đang nhập rồi không thể đăng nhập trang login';
    header('location: profile.php');
    exit();
}
$error = '';
$result = '';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    // + b5 là validate:
    // - không được để trống username/password
    // - username phải là email
    if (empty($username || empty($password))) {
        $error = 'không được để trống user  name/mật khẩu';
    } elseif (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $error = 'username phải là email';
    }
    // b6: xử lý logic chính chỉ khi không có lỗi:
    if (empty($error)) {
        // login thành công khi password = 123
        if ($password == 123) {
            // login thành công 
            // nếu check vào ghi nhớ đăng nhập, thì tạo cookie để lưu lại vừa login thành công
            if (isset($_POST['remember'])) {
                setcookie('username', $username, time() + 3600);
                // die;
            }
            // tạo 1 session để lưu lại phiên đăng nhập
            $_SESSION['username'] = $username;
            // tạo 1 cái message để thông báo đăng nhập thành công
            $_SESSION['success'] = 'Đăng nhập thành công';
            // chuyển hướng
            header('location: profile.php');
            exit();
        } else {
            $error = 'sai username/password';
        }
    }
}
?>
<?php
//  đổ error và success ra màn hình dạng flash
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}

?>
<h3 style="color: red;"> <?php echo $error ?></h3>
<h3 style="color: green;"> <?php echo $result ?></h3>
<form action="" method="post">
    nhập user name:
    <input type="text" name="username" id="">
    <br>
    Nhập mật khẩu:
    <input type="password" name="password" id="">
    <br>
    <input type="checkbox" name="remember" id="">
    ghi nhớ đang nhập
    <br>
    <input type="submit" name="login" value="đăng nhập">
</form>