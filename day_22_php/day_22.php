<!-- php_connect_mysql.php
-php kết nối csdl my sql thông qua thư viện mysql
1 - thư viện mysqli
+ là thư viện giúp kết nói csdl mysqli
+ chỉ hỗ trợ kết nói tới 1 csdl duy nhất là mysql,
thực tế sử dụng thư viện PDO hỗ trợ kết nối nhiều db hơn
+ dễ học vì hỗ trợ cú pháp php thuần
+ giúp hình dung được kết nối và tương tác với csdl để dễ làm quen với thư viện pdo về sau
2 - code php kết nối và tương tác với csdl mýql:
tạo csdl php1222e_crud
-khơi tạo kết nói từ php tới msql:
- máy chủ đang lưu trữ csdl
- 
 -->
<?php
// - máy chủ đang lưu trữ csdl
const DB_HOST = 'localhost'; //127.0.0.1
// - UserName truy cập vào csdl
const DB_USERNAME = 'root'; //XAMPP tạo tài khoản root
// - password truy cập vào csdl:
const DB_PASSWORD = ''; // password rỗng tương ứng với root
// -tên csdl kết nói tới:
const DB_NAME = 'php1222e_crud';
// cổng csdl kết nối tới:
const DB_PORT = '3306';
// + code kết nối: tên hàm đều có tiền tố là mysqli_
$connection = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
if (!$connection) {
    die("lỗi kết nối: " . mysqli_connect_error());
}
echo "kết nối csdl thành công";
// 3 - code insert:
//  + B1 viết truy vấn sql:
$sql_insert = "INSERT INTO products(name,price) VALUE('iphone X', 100)";
// + thực thi truy vấn: INSERT trả về boolean sau khi thực thi
$is_insert = mysqli_query($connection, $sql_insert);
var_dump($is_insert);
//  4- code update: 
// cập nhật name = adc, price = 200 cho sp có id = 1
$sql_update = "UPDATE products SET name = 'abc', price = 200 WHERE id = 2";
// thực thi truy vấn:
$is_update = mysqli_query($connection, $sql_update);
var_dump($is_update);
// xoá sản phẩm có id > 5
// +b1: viết truy vấn:
$sql_delete = "DELETE FROM products WHERE id > 5";
// + B2: THực thi truye vấn delete trả về boolean
$is_delete = mysqli_query($connection, $sql_delete);
var_dump($is_delete);
// -> INSERT, UPDATE, DELETE các bước giống hệt nhau, chỉ khác câu truy vấn
// 6 - Code Seletet
// + lấy nhiều bản ghi cùng 1 lúc 
// lấy tất cả sản phẩm đang có
// +B! viết truy vấn:
$sql_select_all = "SELECT * FROM products ORDER BY created_at DESC";
// Bước 2: thực thi truy vấn trả về đối tượng trung gian, chứ không phải boolean như INSERT UPDATE DELETE
$result_all = mysqli_query($connection, $sql_select_all);
// b3: Trả về mảng kết hợp 2 chiều:
$products = mysqli_fetch_all($result_all, MYSQLI_ASSOC);
echo "<pre>";
print_r($products);
echo "</pre>";
foreach ($products as $product) {
    echo $product['name'] . "<br>";
}
// + lấy 1 bản duy nhất
// b1 + viết truy vấn:
$sql_select_one = "SELECT * FROM products WHERE id = 1";
// B2: thực thi SELECT trả về OBJ trung gian
$result_one = mysqli_query($connection, $sql_select_one);
// B3: Trả về mảng kết hợp 1 chiều
$product = mysqli_fetch_assoc($result_one);
echo "<pre>";
print_r($product);
echo "</pre>";
echo $product['price'];
?>