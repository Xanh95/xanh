<?php 
session_start();
//   làm cách nào lấy fullname từ file
// require_once 'session_cookie.php';
// bị xử lý các logix thừa
// echo "file test.php, Tên = $fullname";
//   muốn lưu dữ liệu có thể truy cập trên toàn bộ trang, thay vì chỉ truy cập đc nội bộ trong file, thì có thể lưu trữ dưới dạng session/cookie
// 1 session: 
// là 1 phiên làm việc, thời điểm bắt đầu kết thúc
//  lưu giá trị có thể truy cập được ở mọi nơi trên hệ thống
// tự động mất đi khi đóng trình duyệt
// đăng nhập, giỏ hàng ...
// php tạo sẵn 1 mảng $_SESSION lưu trữ thông tin của toàn bộ session đang có
// demo
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
// bắt buộc phải khởi tạo session trước rồi mới sử dụng được hàm khởi này bắt buộc nằm trên đầu file
// thao tác với session: giống hệt thao tác mảng
$_SESSION['age'] = 32;
$_SESSION['address'] = 'hanoi';
echo '<pre>';
print_r($_SESSION);
echo '</pre>';
// hiển thị: 
echo $_SESSION['age'];//32
// xoá :
unset($_SESSION['address']);

?>