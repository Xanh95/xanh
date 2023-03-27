<!-- products:id name price creat -->
<?php session_start();
require_once 'connect.php';
echo "<pre>";
print_r($_POST);
echo "</pre>";
// b2 khai báo biến chứa lỗi kết quả:
$error = '';
$result = '';
// b3 xử lý form chỉ khi user submit form:
if (isset($_POST['submit'])) {
    //b4 lấy giá trị từ form:
    $name = $_POST['name'];
    $price = $_POST['price'];
    // bước 5 :validate
    // tên và giá không được để trống
    // giá phải là số: is_numberic
    if (empty($name) || empty($price)) {
        $error = 'tên không được để trống';
    } elseif (!is_numeric($price)) {
        $error = 'giá phải là số';
    }
    // b6 chỉ khi không có lỗi xảy ra:
    if (empty($error)) {
        // insert dữ liệu vào bảng products
        //  nhúng file kết nối vào để sử dụng được biến connecttion
        // b1 viết truy vấn
        $sql_insert = "INSERT INTO products(name, price) VALUE('$name','$price')";
        $is_insert = mysqli_query($connection, $sql_insert);
        var_dump($is_insert);
        // chuyển hướng về trang index kèm theo 1 thông báo thành công
        $_SESSION['success'] = 'thêm mới thành công';
        header('location: index.php');
        exit();
    }
}
// bước 7 hiển thị error ra form:

?>
<h3 style="color:red"> <?php echo $error ?></h3>
<h2>form them mới sản phẩm</h2>
<form action="" method="post">
    nhập tên sản phẩm:
    <input type="text" name="name" value="">
    <br>
    giá:
    <input type="text" name="price" value="">
    <input type="submit" name="submit" value="lưu sp">
    <a href="index.php">về trang danh sách sp</a>

</form>