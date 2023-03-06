<?php
// echo "hello world";
//2- Ép kiểu dữ liệu sử dụng tên kiểu dữ liệu trc giá trị cần ép kiểu
$number = 5;
if ($number) {
    echo 'test';
}
$test = 11.5; // float
$test1 = (integer) $test; //11
var_dump($test1);
$test2 = (boolean) $test;// true
// các giá trị khác chuỗi rỗng, nulll, số 0 thì ép về true, ngược lại false
var_dump($test2);
$test3 = (string) $test;//11.5
var_dump($test3);
// 3- Hằng:
define('PI',3.14);
echo PI; //3.14
const Max_AGE = 100; // nên dùng cách này để khai báo hằng 
// Max_AGE = 12;
// một số hằng số có sẵn trong PHP
echo '<br>';
echo __LINE__;
echo '<br>';

echo __FILE__;// vị trí tuyệt đối
echo '<br>';
echo __DIR__;
echo '<br>';
// 4 - Hàm (mục đích tính sử dụng lại) quan trọng nhất
function sum($number1, $number2) {
    $sum = $number1 + $number2;
    return $sum;
}
$result1 = sum(1, 2);
echo $result1; //3
// 5- truyền biến dạng tham trị và tham chiếu vào hàm:
// truyền tham chiếu
$number = 3;
echo "Ban đầu biến number = $number";// 3
function changnumber($num) {
    $num = 1;
    echo "trong hàm, biên = $num"; //1
}
changnumber($number);
echo "Sau khi gọi hàm, biến = $number";
// truyền tham chiếu
$number = 3;
echo "Ban đầu biến number = $number";// 3
function changnumber1(&$num) {
    $num = 1;
    echo "trong hàm, biên = $num"; //1
}
changnumber1($number);
echo "Sau khi gọi hàm, biến = $number";
// -truyền tham trị: lấy bản sao của biến gốc truyền vào hàm, bên trong hàm thao tác với bản sao
// truyền tham chiếu: lấy bản gốc truyền vào hàm, bên trong hàm thao tác chính bản gốc
// 6 - toán tử:
// -Toán tử số học:+ - * / ++ --
// -Toán tử logic: && || !
// -toán tử so sánh: > >= < <= !=
// - toán tử gán: = += -= *= /= %/
// 7- câu lệnh điều kiện: if else elseif switch case
$number = -1;
if ($number) {
    echo 'number > 0';
}else {
    echo 'Number <= 0 ';
}
// switch case
$day = 2;
switch ($day){
    case 2: echo 'Thứ 2';break;
    case 3: echo 'thứ 3';break;
    case 4: echo 'thứ 4';
}
// toán tử điều kiện : ? :
$test = 5 > 0 ? 'đúng' : 'sai';
// hiển thị logic HTML phức tạp theo 1 điều kiện:
$number =5;
if ($number > 0){
    echo '<table>';
    echo '<tr>';
    echo '<td>1</td>';
    echo '<td>2</td>';
    echo '<td>3</td>';
    echo '<td>4</td>';
    echo '</tr>';
    echo '</table>';
}
// sử dụng thẻ viết tắt để tách biệt code php và html





?>
<?php if($number > 0): ?>
<table border="1" cellspacing="0" cellpadding = "0">
    <tr>
        <td>1</td>
        <td>2</td>
        <td>4</td>
        <td>5</td>
    </tr>
</table>
<?php endif; ?>
<?php elseif (4 > 0): ?>
<?php elseif (3 > 0): ?>
<?php else: ?>
<?php endif; ?>
<?php
// 7- vòng lặp
//for while do ... while
// từ khoá break - continue
?>
<!-- nhúng file php
nhúng   --> 
<?php 
echo 'File nhung_file.php';
// -có 4 hàm nhúng file: include, require
// incude_once, require_once
// tạo 1 file test.php, nằm cùng cấp với file nhung_file.php
?>
