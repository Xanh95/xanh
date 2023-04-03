<?php
//  tấn công vào hệ thống thông qua form, thay đổi câu sql theo mục đích của nó 
// demo chức năng tìm kiếm sản phẩm 
// xử lý form
require_once 'connect.php';
if (isset($_GET['submit'])) {
    $name = $_GET['name'];
    $name = mysqli_real_escape_string($connection, $name);
    // chống lỗi bảo mật này
    // truy vấn tìm kiếm
    // b1: viết truy vấn:
    // 12346' OR name != '
    $slq_select_all = "SELECT * FROM products WHERE name LIKE '%$name%'";
    var_dump($slq_select_all);
    // b2 thực thi
    $obj_result_all = mysqli_query($connection, $slq_select_all);
    // b3 trả về mảng kết hợp 2 chiều
    $products = mysqli_fetch_all($obj_result_all, MYSQLI_ASSOC);
    echo "<pre>";
    print_r($products);
    echo "</pre>";
}
?>
<h2>form tìm kiếm sản phẩm crud</h2>
<form action="" method="get">
    nhập tên sản phẩm
    <input type="text" name="name" value="">
    <input type="submit" name="submit" value="tìm kiếm">
</form>