<?php 
// demo_function.php
// 1- một số function xử lý mảng cơ bản:
// + tính tổng các giá trị phần tử mảng:
$arrs = [1,2,3,4];
$sum = 0;
foreach ($arrs as $value) {
    $sum += $value;
}
echo $sum;
echo array_sum($arrs);
// kiểm tra phần tử mảng có tồn tại theo key hay ko
$names = ['a','b','c'];
$check = isset ($names[4]);//false
// -Tham khảo các silde còn lại
?>