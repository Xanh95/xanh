<?php 
//  -cookie
// - lưu trữ thông tin có thể được truy cập từ mọi nơi  trên hệ thống
// - không tự động mất đi khi tắt trình duyệt tuỳ thuộc vào thời gian sống lúc tạo ra nó 
// session lưu trên sever
// cookie ghi nhớ mật khẩu trên hệ thống, quảng cáo
// -php tạo sẵn mảng $_COOKIE lưu toàn bộ cookie trên hệ thống
// -cookie lưu trên trình duyệt, session lưu trên server
// thao tác với cookie
// + thêm cookkie : cần check nơi mà đang lưu cookie của trang hiện tại trên trình duyệt
// inspec - > application -> storage -> cookie, chọn tên miền hiện tại.

// $_COOKIE['username'] = 'abc;';
setcookie('username', 'abc', time() + 60);//60s
setcookie('dsadsa', '123', time() + 3600);
// hiện thị
echo $_COOKIE['username'];
// + xoá:
setcookie('username',"adsasdasd", time() - 1);
// sự giống nhau và khác cửa session và cookie:
// -giống: lưu thông tin có thể truy cập được từ mọi nơi
//          +dạng mảng
// -khác: 
//      + session tự mất đi khi đóng trình duyệt
//      + sesion lưu trên server. cookie lưu trên trình duyệt
//  - > session bảo mật hơn cookie
echo '<pre>';
print_r($_COOKIE);
echo '</pre>';
?>