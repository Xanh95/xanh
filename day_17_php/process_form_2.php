<!-- demo xử lý form với các input thông dụng -->
<!-- xử lý form với các input phức tạp hơn : raio, check box. select -->
<?php 
//  Xử lý form 
// B1: debug method $_POST
echo '<pre>'; 
print_r($_POST);
echo '</pre>'; 
// b2: khai báo
$error = '';
$result = '';
// +b3 xử lý form chỉ khi form submit:
    if(isset($_POST['submit'])) {
        // +b4: lấy giá trị từ form để thao tác cho dễ
        $age = $_POST['age'];
        // $gender = $_POST['gender'];
        // $jobs = $_POST['job'];
        $note = $_POST['note'];
        //  nếu không chọn bất cứ radio hay checkbox nào php sẽ không bắt được dữ liệu
        // +b5: validate:
        // -tuổi phải là số
    }
?>
<form action="" method="post">
    Nhập tuổi:
    <input type="text" name="age" value="">
    <br>
    Giới tính:
    <input type="radio" name="gender" value="0">Nam
    <input type="radio" name="gender" value="1">Nữ
    <input type="radio" name="gender" value="2">khác
    <br>
    nghề nghiệp:
    <!-- với các input mà cho phép chọn nhiều giá trị tại 1 thời điểm như: checkbox, slect multiple, file mutiple thì name bắt buộc phải ở dạng mảng -->
    <input type="checkbox" name="job[]" value="0">dev
    <input type="checkbox" name="job[]" value="1">tester
    <input type="checkbox" name="job[]" value="2">BA
    <br>
    chọn quốc gia:
    <select name="country" id="" >
        <option value="0">VN</option>
        <option value="1">korea</option>
        <option value="2">japan</option>
    </select>    
    <br>
    ghi chú:
    <textarea name="note" id="" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="submit" value="hiển thị">



</form>