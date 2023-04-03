<!-- index liệt kêt sản phẩm
update.php cập nhật sản phẩm
create.php tạo sản phẩm
delete.php xoá sản phẩm
Xây dựng crud sản phẩm:
-create - read - update - delete, là 4 chức năng nền tảng cho bất cứ 1 chức thực tế nào của 1 website
- Nên Thành thạo để có hiểu được cơ bản 1 ngôn ngữ lập trình và cách mà ngôn ngữ lập trình đó tương tác với csdl 
connecnt.php file kết nối csdl dùng cho crud
-->
<?php session_start();
//  lấy dữ liệu đổ ra 
require_once('connect.php');
// B1 viết truy vấn: lấy nhiều bản ghi nhiều sản phẩm
$sql_select_all = "Select * From products";
// b2 thực thi truy vấn
$obj_result_all = mysqli_query($connection, $sql_select_all);
// bước b3: lấy ra mảng kết hợp 2 chiều:
$products = mysqli_fetch_all($obj_result_all, MYSQLI_ASSOC);
echo "<pre>";
print_r($products);
echo "</pre>";

?>
<h2>trang liệ kê sản phẩm</h2>
<a href="create.php">thêm mới sản phẩm</a>
<?php
// hiển thị session thông báo dưới dạng flash
if (isset($_SESSION['success'])) {
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
?>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Created_at</th>
        <th></th>
    </tr>
    <?php
    foreach ($products as $product) :
    ?>
        <tr>
            <td><?php echo $product['id'] ?></td>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo number_format($product['price']); ?>vnd</td>
            <td><?php echo date('d/m/Y H:i:s', strtotime($product['created_at'])); ?></td>
            <td>
                <a href="update.php?id=<?php echo $product['id'] ?>">sửa</a><a href="delete.php?id=<?php echo $product['id'] ?>" onclick="return confirm('có xoá ko')">Xoá</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>