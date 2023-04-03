<?php
session_start();
require_once 'connect.php';
//  xoá crud/delete.php?id=3
// validate tham số trên ủl khi xử lý xoá:
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'tham số id không hợp lệ';
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
// truy vấn dữ liệu
// b1 viết truy vấn:
$sql_delete = "DELETE FROM products WHERE id = $id";
// bước 2: thực thi
$is_delete = mysqli_query($connection, $sql_delete);
var_dump($is_delete);
if ($is_delete) {
    $_SESSION['success'] = 'xoá thành công';
} else {
    $_SESSION['error'] = 'Xoá thất bại';
}
header('Location: index.php');
exit();
