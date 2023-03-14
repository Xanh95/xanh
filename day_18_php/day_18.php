<!-- xử lý update form trong php
 -->
 <?php 
//   form php upload
echo '<pre>';
print_r($_POST);
print_r($_FILES);

echo '</pre>';
// B2 tạo biến chứa kết quả và lỗi
$error = '';
$result = '';
// B3 xử lý form chỉ khi submit
if (isset($_POST['upload'])){
    // b4 gán giá trị 
    $fullname = $_POST['fullname'];
    $avatar = $_FILES['avata'];// mảng 1 chiều gán lại thành mảng 1 chiều
    // +b5 validate :
    // validate file upload phải là ảnh
    // file upload không lớn hơn 2mb
    // chú ý: về nguyên tắc chỉ validate nếu có file được tải lên
    if ($avatar['error'] == 0) {
        // file upload phải là ảnh:
        // lấy đuôi file: 
        $extension = pathinfo($avatar['name'], PATHINFO_EXTENSION);
        $extension = strtolower($extension);
        var_dump($extension);
        $allowed = ['png', 'jpg', 'jpeg', 'gif'];
        if (!in_array($extension, $allowed)) {
            $error = 'file upload phải là ảnh';
            // -file upload ko được lớn hơn 2mb
            $size_b = $avatar['size'];
            $size_mb = $size_b/ 1024 / 1024;
            if (size_mb > 2) {
                $error = 'file upload ko được lớn 2mb';

            }
            // b6 xử lý khi không có lỗi
            if (empty($error)) {
                // xử lý file vào thư mục chỉ định
                $filename = '';
                if ($avatar['error'] == 0) {
                    $dir_upload = 'uploads';
                    // tạo thư mục uploads trên bằng code, ko được tạo bằng tay
                    // chỉ tạo khi thư mục đó chưa tồn tại : file_exists
                    if (!file_exists($dir_upload)) {
                        mkdir($dir_upload);
                    }
                    // tạo file mang tính duy nhất:
                    $filename = time() . '' . $avatar['name'];
                    // tải file lên hệ thống
                    $is_upload = move_uploaded_file($avatar['tmp_name'],"$dir_upload/$filename");
                    var_dump($is_upload);
                    $result .= "<img src='$dir_upload/$filename' height='50px' >";
                }
            }
        }
        
    }
}
// xử lý file phải upload đc file trên hệ thống, nên ko thể chỉ dựa vào tên file
// bắt buộc form phải thoả mãn 2 điều kiện sau
// + method = post
// + phải có thuộc tính enctype=muntipart/form-data
//  - khi đã thoả mãn 2 dữ liệu này
// - php tạo ra 1 mảng 2 chiều để quản lý file: $_FILES
// name: tên file
// type: định dạng file
// tmp_file: temporary name = đường dẫn tạm, là đường dẫn đang lưu tạm thời file được tải lên, dùng để chuyển đến đường dẫn thật về sau
// + error: mã lỗi khi upload file, = 0 nghĩa là tải lên thư mục tạm thành công, ngược lãi  khác 0 có lỗi
// + size: dung lượng file byte




 ?>
 <h3 style = "color:red"><?php echo $error?></h3>
 <h3 style = "color:green"><?php echo $result?></h3>
 <form action="" method="post" enctype="multipart/form-data"> 
    Nhập tên:
    <input type="text" name="fullname" value = "">
    <br>
    <input type="file" name="avata" id="">
    <br>
    <input type="submit" name="upload" id="" value = "hiển thi">
 </form>