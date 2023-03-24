<!-- 
    note sql
    # 2 -truy cập csdl để bắt đầu tạo bảng:với phpMyadmin bắt buộc phải click trực tiếp vào cơ sở dữ liệu đó


    # 1 -tạo CSDL_ php1222e_test
CREATE DATABASE IF NOT EXISTS php1222e_test
CHARACTER SET utf8
COLLATE utf8_general_ci;
# 2 -truy cập csdl để bắt đầu tạo bảng:với phpMyadmin bắt buộc phải click trực tiếp vào cơ sở dữ liệu đó
USE php1222e_test;
# 3 các kiểu dữ  liệu trong Mysql:
# + kiểu số hay sử dụng nhất TINYINT và INT
    #TINYINT : tốn 1 byte, phạm vi từ 123 -> 127
    #INT: tốn 4 byte, phạm vi -2 tỉ -> 2 tỉ
# + kiểu chuỗi hay dùng nhất varchar và text
    # varchar được lưu những chuỗi có 255 chuỗi trở lại
    # text: lưu chuỗi mà ko xác định số ký tự
# + kiểu thời gian :DateTime và timestamp
datetime lưu ngày giờ thủ công người dùng nhập
timestamp lưu theo kiểu tự động hệ thống tạo và cả múi giờ hệ thống hoạt động
định dạng bắt buộc lưu thời gian dạng datetime/timestamp
# y-m-d H:i:s
24/03/2023 19:20:00 -> 2023-03-24 19:10:00
# 4 - tạp bảng : 
# product: id phân biệt các bảng ghi
    # trường id khoá chính, tự dộng tăng mỗi khi có bản ghi sinh ra int
    # name: tên sp, varchar
    # price: giá sản phẩm, int
    # descripton: mô tả chi tiết sp, text
    # created_at: ngày tạo sp, timestamp
    #xoá bảng:
# DROP TABLE abc;
6- 4 truy vấn cở bản trong sql insert, update, delete, Select
# + insert: thêm dữ liệu vào bảng: chỉ intsert vào các trường ko phải trường tự động sinh ra
# + products: id, name, price, description, created_at
INSERT INTO products(name, price, description)
VALUES('IphoneX', 1000, 'Mô tả iphoneX');
VALUES('IphoneX', 1000, 'Mô tả iphoneX'),
		('Iphone2', 2000, 'Mô tả iphoneX'),
        ('IphoneX\3', 3000, 'Mô tả iphoneX');
# + select: lấy dữ liệu từ bảng:
# Lấy tất cả sp và tất cả các trường:
SELECT * FROM products;
# lấy tên và giá của các sp:
SELECT name, price FROM products;
#lấy sp có giá > 2000:
SELECT * FROM products WHERE price > 2000;
#lấy 3 sp đầu tiên:
SELECT # FROM products LIMIT 3;
# lấy 2 sản phẩm đầu tiên tính từ sp thứ 3:
SELECT * FROM products LIMIT 2 OFFSET 3;
SELECT * FROM products LIMIT 3,2;
#SELECT * FROM products WHERE name LIKE '%a%';
# apple, bac, cba, a
SELECT * FROM products WHERE name LIKE 'a%';
#abc,
SELECT * FROM products WHERE name LIKE '%a';#bca
#lấy sp theo thứ tự mới nhất -> cũ nhất
SELECT * FROM products ORDER BY created_at DESC
#desc: giảm dần - descend
#asc: tăng dần - ascend
# lấy sản phẩm có id bằng 1 hoặc 2 hoặc 4
SELECT * FROM products WHERE id = 1 OR id = 2 OR id = 4;
SELECT * FROM products WHERE id in (1, 2, 4);
# Lấy sp có id nằm trong khoảng 1 - 4:
SELECT * FROM products WHERE id >= 1 AND id <= 4;
SELECT * FROM products WHERE id BETWEEN 1 AND 4;
# truy vấn update: cập nhật dữ liệu:
# cập nhật tên sản phẩm abc , giá = 123 cho sp có id = 1;
#với update và delete nên chỉ định điều kiện, nếu không sẽ tác động tới toàn bảng
UPDATE products SET name='abc', price=123 WHERE id = 1;
# + truy vấn delete: xoá dữ liệu
# xoá sp có id > 10
DELETE FROM products WHERE id > 10;
CREATE TABLE IF NOT EXISTS products(
	id INT (11) AUTO_INCREMENT,
    name VARCHAR(150) NOT NULL, # bắt buộc phải nhập giá trị
    price INT(11) DEFAULT 0,
    description TEXT DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id) # khoá chính
    
);
#xoá bảng:
# DROP TABLE abc;
INSERT INTO products(name, price, description)
VALUES('IphoneX', 1000, 'Mô tả iphoneX'),
		('Iphone2', 2000, 'Mô tả iphoneX'),
        ('IphoneX\3', 3000, 'Mô tả iphoneX');
# + select: lấy dữ liệu từ bảng:
# Lấy tất cả sp và tất cả các trường:
SELECT * FROM products;
# lấy tên và giá của các sp:
SELECT name, price FROM products;
#lấy sp có giá > 2000:
SELECT * FROM products WHERE price > 2000;
#lấy 3 sp đầu tiên:
SELECT * FROM products LIMIT 3;
# lấy 2 sản phẩm đầu tiên tính từ sp thứ 3:
SELECT * FROM products LIMIT 2 OFFSET 3;
SELECT * FROM products LIMIT 3,2;
# tìm các sản phẩm mà tên chứa ký tự a
SELECT * FROM products WHERE name LIKE '%a%';
# apple, bac, cba, a
SELECT * FROM products WHERE name LIKE 'a%';
#abc,
SELECT * FROM products WHERE name LIKE '%a';#bca
SELECT * FROM products WHERE name LIKE 'a';
#lấy sp theo thứ tự mới nhất -> cũ nhất
SELECT * FROM products ORDER BY created_at DESC;
#desc: giảm dần - descend
#asc: tăng dần - ascend
# lấy sản phẩm có id bằng 1 hoặc 2 hoặc 4
SELECT * FROM products WHERE id = 1 OR id = 2 OR id = 4;
SELECT * FROM products WHERE id in (1, 2, 4);
# Lấy sp có id nằm trong khoảng 1 - 4:
SELECT * FROM products WHERE id >= 1 AND id <= 4;
SELECT * FROM products WHERE id BETWEEN 1 AND 4;
# truy vấn update: cập nhật dữ liệu:
# cập nhật tên sản phẩm abc , giá = 123 cho sp có id = 1;
#với update và delete nên chỉ định điều kiện, nếu không sẽ tác động tới toàn bảng
UPDATE products SET name='abc', price=123 WHERE id = 1;
# + truy vấn delete: xoá dữ liệu
# xoá sp có id > 10
DELETE FROM products WHERE id > 10;
#-xuất cơ sở dữ liệu: export và import
#export file .sql
#với phpmyadmin, cần truy cập csdl muốn export, menu export
#import 
#với phpmyadmin, cần tạo thủ công csdl trước rồi mới import được
# JOIN bản:
#trong thực sẽ phải thực hiện thao tác với nhiều bảng cùng 1 lúc. cần sử dụng join
#sử dụng JOIN
#điều kiện JOIN là bảng phải liên kết với nhau prime key (khoá ngoại)
#join các loại:
#inner JOIN
#left JOIN
#right JOIN
# lấy tất cả sp kèm theo danh mục tương ứng:
# khi dùng join phải chỉ định tên bảng cụ thể trước trên trường
SELECT products.*, categories.name FROM products
INNER JOIN categories ON products.category_id = categories.id;

# lấy tất cả sp kèm theo danh mục tương ứng:
# khi dùng join phải chỉ định tên bảng cụ thể trước trên trường
SELECT products.*, categories.name AS category_name FROM products
INNER JOIN categories ON products.category_id = categories.id;
# + left join
#giống inner, chỉ khác ở chỗ nếu bảng liên kết không có tìm thấy  thì vẫn trả về, tuy nhiên set null cho các trường trong bảng liên kết






 -->