<?php
const DB_HOST = 'localhost'; //127.0.0.1
// - UserName truy cập vào csdl
const DB_USERNAME = 'root'; //XAMPP tạo tài khoản root
// - password truy cập vào csdl:
const DB_PASSWORD = ''; // password rỗng tương ứng với root
// -tên csdl kết nói tới:
const DB_NAME = 'php1222e_crud';
// cổng csdl kết nối tới:
const DB_PORT = '3306';
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if (!$connection) {
    die("lỗi kết nối: " . mysqli_connect_error());
}
echo "kết nối csdl thành công";
