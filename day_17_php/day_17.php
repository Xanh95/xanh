<?php 
//  process_form.php
// - form là gì là nơi nhập dữ liệu khi gửi đi
// thì php sẽ cần sử lý -> trên form
// -form có 2 dạng : 
//  + lấy thông tin dưới dạng dữ liệu cơ bản ( giá trị có thể nhìn thấy được)
// + lấy thông tin dưới dạng file 
// - xử lý form: lấy thông tin từ form sau đó hiển thị ra
// code php xử lý nằm phía trên khai báo form html
// quy trình xử lý form
// b1: debug  
//  dựa vào method của form thì php sẽ sinh ra biến tương ứng lưu trữ
// toàn bộ dữ liệu gửi từ form lên nhìn được cấu trúc dữ liêu gửi lên
//  nếu method = get -> $_GET
//  nếu method = post -> $_POST
echo '<pre>';
print_r($_GET);
echo '</pre>';
// khi mới vào form $_GET/ $_POST là mảng rỗng
// + b2: khai báo biến chứa lỗi và kết quả:
$error = '';
$result = '';
// +b3: xử lý dữ liệu từ form gửi lên với điều kiện user phải submit form
// submit form dựa vào name của nút submit
if (isset($_GET['show'])) {
    // b4: lấy giá trị từ form thông qua việc gán biến để thao tác cho dễ
    $fullname = $_GET['fullname'];
    // +B5 validate form: lọc dữ liệu rác, giúp bảo mật form
    // nếu có lỗi thì đổ biến vào error ở b2
    // tên không được để trống empty -> true là rỗng
    // tên phải ít nhất 3 ký tự : strlen
    // tên phải dạng email: filter_var
    if (empty($fullname)) {
        $error = 'tên không được để trống';
    } elseif (strlen($fullname) < 3) {
        $error = 'tên phải ít nhất 3 ký tự';

    } elseif (filter_var($fullname, FILTER_VALIDATE_EMAIL) == false) {
        $error = 'tên phải dạng email';
    }
    // b6: xử lý logic chính chỉ khi không có lỗi nào xảy ra, dựa vào biến error
    // lưu biến kết quả vào biến result ở bước 2 
    if (empty($error)){
        $result = "chào bạn : $fullname";
    }
    // b4 b5 b6 sẽ nằm trong bước 3
    // +b7 hiển thị error và result  ra form, nằm ngoài bước 3
    // +b8 đổ lại dữ liệu đã nhập ra form





}









?>
<!-- action của form : url/file mà dữ liệu từ form đc gửi lên action = "" tương đương với chính file hiện tại -->
<!-- method: phương thức gửi dữ liệu lên php, post và get
post: dữ liệu được truyền ngầm
get: dữ liệu được truyền lên url theo form ?name1=value1&name2=value2
không được sử dụng khicos form có dữ liệu cần bảo mật  password, ngân hàng ...-->
<!-- form tìm kiếm -> get -->
<!--  phân biệt post/get dựa vào url, port url ko thay đổi sau khi submit
còn get sẽ bị thay đổi,post bảo mật hơn -->


<h3 style="color: red;"><?php echo $error?></h3>
<h3 style="color: green;"><?php echo $result?></h3>
<form action="day_17.php" method="get">
    nhập tên của bạn:
    <!-- các input bắt buộc khai báo thuộc tính name vì php dựa vào thuộc tính name  để biết được dũ liệu gửi lên là của input nào -->
    <input type="text" name="fullname" value="<?php echo isset($_GET['fullname']) ? $_GET['fullname'] : '' ?>" placeholder="tên đầy đủ của bạn" id="">
    <br>
    <input type="submit" value="hiển thị tên" name="show">
</form>
