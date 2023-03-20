<?php 
//  process_file.php
// cách đọc ghi file trong php 
// đọc file: import hàng loạt ghi 
// ghi file: lưu log
// đọc file: tạo 1 file ngang hàng với file .php
// hiện tại: note.txt, nội dung ghi tuỳ ý
// hiện tại:note.txt, nội dung ghi tuỳ ý 
// đọc tuỳ ý từng dòng:
$reads = file('note.txt');
echo '<pre>';
print_r($reads);
echo '</pre>';
foreach ($reads AS $read) {
    echo $read . "<br>";
}
// - đọc toàn bộ file $result = 
$result = file_get_contents('note.txt');
var_dump($result);
// echo file_get_contents('https://vnexpress.net');
// ghi gile:
// -ghi đè
file_put_contents('abc.txt', 'nội dung123');
// - ghi nối tiếp
file_put_contents('def.txt', 'nội dung123', FILE_APPEND);

?>