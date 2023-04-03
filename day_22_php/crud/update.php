<?php
//  update
session_start();
require_once 'connect.php';
// validate tham số trên ủl khi xử lý xoá:
$error = '';
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    $_SESSION['error'] = 'tham số id không hợp lệ';
    header('Location: index.php');
    exit();
}
$id = $_GET['id'];
// lấy ra sản phẩm dựa theo id từ url để đổ ra form cạp nhật:
// truy vấn lấy sản phẩm theo id:
$sql_select_one = "SELECT * FROM products WHERE id = $id";
// b2 thực thi
$obj_result_one = mysqli_query($connection, $sql_select_one);
// lấy ra bảng 1 chiều
$product = mysqli_fetch_assoc($obj_result_one);

echo "<pre>";
print_r($product);
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
        //    truy vấn cập nhật dữ liệu
        // B1 viết truy vấn cập nhật dữ liệu
        $slq_update = "UPDATE products SET name='$name', price = '$price' WHERE id = $id";
        // b2 thực thi truy vấn
        $is_update = mysqli_query($connection, $slq_update);
        var_dump($is_update);
        if ($is_update) {
            $_SESSION['success'] = 'cập nhật thành công';
            header('location: index.php');
            exit();
        }
        $error = 'cập nhật thất bại';
    }
}
// bước 7 hiển thị error ra form:
?>
<h3 style="color:red"> <?php echo $error ?></h3>
<h2>form them mới sản phẩm</h2>
<form action="" method="post">
    nhập tên sản phẩm:
    <input type="text" name="name" value="<?php echo $product['name'] ?>">
    <br>
    giá:
    <input type="text" name="price" value="<?php echo $product['price'] ?>">
    <input type="submit" name="submit" value="cập nhật">
    <a href="index.php">về trang danh sách sp</a>

</form>