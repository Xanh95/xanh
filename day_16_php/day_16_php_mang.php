<!-- demo_array -->
<?php 
echo 'hello array';
// -Mảng là gì: mảng là kiểu dữ liệu lưu được nhiều giá trị tại 1 thời điểm có thể là bất kỳ giá trị nào?
//  cú pháp khai báo mảng
// từ khoá Array
$names = array(1,2,3,4,5);// mọi version php
$name = [1,2,3,4,5];// từ 5.4 trở lên -> ưu tiên dùng
// - Bài toán dùng kiểu dữ liệu mảng
// Khai báo tên 500 ae, sau đó hiển thị 500 tên này ra màn hình
// thông thường tạo 5000 biến và echo 500 biến ra
// -Tạo ra mảng và có 500 phần tử
// xử lý dữ liệu dễ dàng hơn so với biến thông thường xử lý dữ liệu SLL dễ dàng hơn
// - Các thuật ngữ cần biết khi nhắc đến mảng
// phần tử element : một mảng chứa nhiều phần tử mảng 
// chỉ mục index/key: giá trị để xác định ra phần tử mảng, 1 mảng key không trùng nhau
// giá trị value giá trị của phần tử mảng tương ứng với key
$names = ['php','css','js','html'];
//  mảng có 4 phần tử, đếm phần tử mảng
echo '<br>';
$c = count($names);
var_dump($c);
// phần tử đầu tiên: key=0, value = php
echo '<br>';
var_dump($names);
// debug mảng bằng cách sau:
echo '<pre>';
print_r($names);
echo '</pre>';
// xử lý mảng theo kiểu thủ công:
$names = ['php','css','js','html'];
// lấy giá trị của phần tử mảng theo kiểu thủ công
// để lấy được giá trị của 1 phần tử mảng bắt buộc biết key của phần tử mảng
echo $names[0];//php
echo '<br>';
echo $names[2];//js
echo '<br>';
// echo $names[4];// báo lỗi không tìm thấy key
// - Xử lý mảng sử  dụng vòng lặp for while do ... while
$c = count($names);// 4
for($key = 0; $key < $c; $key++) {// đơn giản hơn tiết kiệm dòng code
    echo $names[$key];
}
// for while do...while chưa phải cách tối ưu nhất để lặp mảng  vì tốn nhiều bước và chỉ áp dụng cho mảng đơn giản (mảng tuần tự, mảng có key là số tăng dần)
// -vòng lặp foreach 
// + chuyền dùng để lặp mảng
// dạng đầy đủ dạng khuyết
// Dạng đầy đủ
foreach ($names as $key => $value) {
    echo "<br> key: $key, value: $value";
}
foreach ($names as $k => $v) {
    echo "<br> key: $k, value: $v";
}
// dạng khuyết 
foreach ($names as $v) {
    echo "<br> Value: $v";
}
// - Thẻ viết tắt của foreach khi hiển thị các mã html phức tạp
echo '<table border ="1" cellpadding="0">';
foreach ($names as $language) {
    echo "<tr>";
        echo "<td>$language</td>";
       
    echo "</tr>";

}
echo '</table>';
// phân loại mảng
// + Mảng tuần Tự : key của nó là số nguyên mảng dễ thao tác nhất
$ages = [1,5,7,9,100];
echo '<pre>';
print_r($ages);
echo '<pre>';
// mảng kết hợp:key xuất hiện ở dạng chuỗi phổ biến nhất trong php

$infor = [
    'fullname' => 'xanh',
    'age' => '19',
    'address' => 'hn',
];
foreach ($infor as $key => $value){
    echo "<br>Key: $key, Value: $value";

};
echo '<pre>';
print_r($infor);
echo '<pre>';
// + Mảng đa chiều: mảng trong mảng:
$infors = [
    'name' => 'php122e',
    'infor' => [
            'amount' => 30,
            'address' => 'vn'
    ]
];
// xử lý mảng phức tạp hơn
foreach ($infors as $key => $value) {
    // echo "<br>Key: $key, Value: $value";
}
// 
echo $infors['infor']['amount'];






?>
<table border="1" cellpadding="8" cellspacing="0">
    <?php foreach($names as $language): ?>
    <tr>
        <td><?php echo $language; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
