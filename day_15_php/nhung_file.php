<?php 
// test.php
echo 'File nhung_file.php';
require 'ádasdasd.txt';
echo 'ádasd';
// khác nhau nhúng 1 file không tồn tại
// include show ra lỗi warning và code phía sau vẫn chạy, ngược lại require dừng thực thi code phía sau -> require chặt chẽ hơn include trong thực tế ưu tiên dùng hàm require_once để nhúng file
?>