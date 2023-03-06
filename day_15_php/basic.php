<!--basic.php-->

<?php
//sử dụng tính năng chạy tắt của php ắt của php để chạy đường dẫn, bắt buộc phải mở dùng php mở thư mục gốc đang chứ file .php hiện tại
echo 'php';
//1- biến:  một giá trị dữ liệu có thể được thay đổi trong chương trình
// + Cú pháp:
$name = 'manhnv';
$number_of_year = 2023; // snake
$numberOfYear = 2023; // camel
// chuẩn psr
$age = 32;
echo $age; //32
//2- kiểu dữ liệu:
//+integer: số nguyên -2 tỷ đến 2 tỷ
$number = 1;
$number = -123;
//hàm debug php
var_dump($number);
// float/double: số thực hoặc só nguyên ngoài phạm vi
//-2 tỉ -> 2 tỉ
$number2 = 1.23;
var_dump($number2);
//+ string: kiểu chuỗi
$str1 = 'String 1';
$str2 = "string 2";
$str3 = "chào bạn, 'xanh' ";
echo $str3;
echo $str1 . $str2; // nối chuỗi
echo "<br>";
$name = 'xanh';
//dấu nháy kép thì hiểu được biến bên trong, ngược lại nếu dùng dấu nháy đơn không hiểu được
//
echo "chào bạn, $name";
echo 'chào bạn, $name';
// + boolean: chỉ có 2 giá trị duy nhất true và false
$is_female = true;
$is_boy = false;
var_dump($is_boy);
//+null: kiểu đặc biệt, 1 obj không tồn tại
$test = null;
//+ array: kiểu mảng, lưu trữ nhiều giá trị tại 1 thời điểm
//mọi version php
$name = array(12, 'abc', true, null, array());
// 5.4 ++
$name = [12, 'abc', true, null, []];
var_dump($name);
//+ object: đối tượng, học ở phần oop
?>