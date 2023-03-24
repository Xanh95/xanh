<!-- 
//  database.php
// ngôn ngữ truy vấn sql 
1. cơ sở dữ liệu
- cơ sở dữ liệu là kho lưu trữ dữ liệu, lưu trữ thông tin về lâu dài và được tổ chức
- là 1 thành phần bắt buộc để tạo website động
- có nhiều hệ quản trị csdl khác nhau : mysql, sql server, oracle. postgree. mongo ...
-php hay kết hợp với csdl mysql
+ csdl mysql: free hỡ trợ nhiều nền tảng, windown, linuxx, Macos
xampp cài sẵn Mysql
MySQL có thể sử dụng thông qua giao diện hoạc command line
dùng command line trước
- sử dụng công cụ phpMyadmin để quản trị csdl MySQL cho trực quan (Navicat, MySQLWorkBench ... )
Xampp cài sẵn PHPMyadim
truy cập PHPMyadim bằn cách sau: click button ADmin ở module
MySQL của Xampp
http://localhost/phpmyadmin
2. ngôn ngữ truy vấn SQL
+ sql - structure query language, là ngôn ngữ truy vấn có cấu trúc dùng để tương tác vơi csdl
+ bắt buộc phải học slq để biết cú pháp truy vấn dữ liệu xuống csdl
3. thuật ngữ liên quan đến csdl:
database: tên csdl
tables : 1 csdl bao gồm 1 hoặc nhiều hàng, lưu trữ các thông tin các đối tượng cụ thể
vd: products: lưu thông tin các sản phẩm
users : lưu thông tin user
orders : thông tin đơn hàng
.....
-field/ column: các trường trong bảng, lưu thông tin thuộc tính lưu về đối tượng đó 
vd:
products: name, price, amount ... 
users: username, password, fullname, age, address ...
record/row : bản ghi, là thông tin cụ thể của 1 đối tượng trong bảng, 
vd: products: name, price, amount
Record 1: name = IphoneX, price = 1000, amount = 10 
Record 2: name = Tivi, price = 2000, amount = 10 
-Primary key: khoá chính là 1 trường để phân biệt các bản ghi với nhau
khoá chính thường được đặt tên là id có cơ chế tự động tăng lên 1
-Foreign key: khoá ngoại là 1 trường trong bảng nhưng là khoá chính của bảng có liên kết
4. học sql để tương tác với csdl thông qua giao diện của phpmyadmin
truy cập phpadmin, click vào tabsql để bắt đầu viết truy vấn

 -->