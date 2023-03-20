<?php 
session_start();
//  session_cookie trong php
// bài toán taooj 1 file test.php cùng cấp
$fullname = 'xanh';
echo "họ tên : $fullname";
if (isset($_SESSION['age'])) {
    echo "tuổi của bạn : " . $_SESSION['age'];

}
?>