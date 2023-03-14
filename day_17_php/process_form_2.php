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
        $country = $_POST['country'];
        //  nếu không chọn bất cứ radio hay checkbox nào php sẽ không bắt được dữ liệu
        // +b5: validate:
        // -tuổi phải là số
        if (empty($age)) {
            $error = 'phải nhâp tuổi';
        } elseif (!isset($_POST['gender'])) {
            $error = 'phải chọn giới tính';
        } elseif (!isset($_POST['jobs'])) {
            $error = 'phải chọn nghề nghiệp';
        } elseif (empty($note)) {
            $error = 'phải nhập ghi chú';
        } elseif(!is_numeric($age)) {
            $error = 'tuổi phải là số';
        }
        if (empty($error)) {
            $result .= "tuổi : $age <br>";
            $gender = $_POST['gender'];
            switch ($gender) {
                case '0':
                    $result .= "giới tính : Nam <br>"; 
                    break;
                case '1':
                    $result .= "giới tính : Nữ <br>"; 
                    break;
                case '2':
                    $result .= "giới tính : Khác <br>"; 
                    break;
            }
            $jobs = $_POST['jobs'];
            $jobs_text = '';
            foreach ($jobs AS $job) {
                switch($job) {
                    case 0 : $jobs_text .= " dev ";break;
                    case 1 : $jobs_text .= " tester ";break;
                    case 2 : $jobs_text .= " ba ";break;
                }
            }
            $result .= "nghề nghiệp: $jobs_text <br>";
            switch ($country) {
                case 0:
                    $result .= "Quốc gia: VN";
                    break;
                case 1:
                    $result .= "Quốc gia: korea";
                    break;
                case 2:
                    $result .= "Quốc gia: Japan";
                    break;
                
            }
            $result .= "<br>Ghi Chú: $note";
        }

    }
?>
<h3 style="color:red"><?php echo $error; ?></h3>
<h3 style="color:green"><?php echo $result; ?></h3>
<form action="" method="post">
    Nhập tuổi:
    <input type="text" name="age" value="<?php echo isset($_POST['age']) ? $_POST['age'] :""; ?>" >
    <br>
    Giới tính:
    <?php 
    //  có bao nhiêu radio có bấy nhiêu biến trạng thái check được hay ko
    $checked_male ='';
    $checked_female ='';
    $checked_another ='';
    if (isset($_POST['gender'])){
        $gender = $_POST['gender'];
        switch ($gender) {
            case 0: $checked_male = 'checked';break;
            case 1: $checked_female = 'checked';break;
            case 2: $checked_another = 'checked';break;
        }
    }
    ?>
    <input type="radio" name="gender" value="0" <?php echo $checked_male ?>>Nam
    <input type="radio" name="gender" value="1" <?php echo $checked_female ?>>Nữ
    <input type="radio" name="gender" value="2"<?php echo $checked_another ?>>khác
    <br>
    nghề nghiệp:
    <!-- với các input mà cho phép chọn nhiều giá trị tại 1 thời điểm như: checkbox, slect multiple, file mutiple thì name bắt buộc phải ở dạng mảng -->
    <?php 
     $checked_dev = ''; 
     $checked_tester = ''; 
     $checked_ba = ''; 
     if (isset($_POST['jobs'])){
        $jobs = $_POST['jobs'];
        foreach ($jobs AS $job) {
            switch ($job) {
                case 0 : $checked_dev = 'checked';break;
                case 1 : $checked_tester = 'checked';break;
                case 2 : $checked_ba = 'checked';
            }
        }
     }
    ?>
    <input type="checkbox" name="jobs[]" value="0" <?php echo $checked_dev ?>>dev
    <input type="checkbox" name="jobs[]" value="1" <?php echo $checked_tester ?>>tester
    <input type="checkbox" name="jobs[]" value="2" <?php echo $checked_ba ?>>BA
    <br>
    chọn quốc gia:
    <?php 
     $selected_vn = ''; 
     $selected_korea = ''; 
     $selected_japan = ''; 
     if(isset($_POST['country'])){
        $country = $_POST['country'];
        switch($country) {
            case 0 : $selected_vn = 'selected';break;
            case 1 : $selected_korea = 'selected';break;
            case 2 : $selected_japan = 'selected';
        }
     }
    ?>
    <select name="country" id="" >
        <option value="0" <?php echo $selected_vn ?>>VN</option>
        <option value="1" <?php echo $selected_korea ?>>korea</option>
        <option value="2" <?php echo $selected_japan ?>>japan</option>
    </select>    
    <br>
    ghi chú:
    <textarea name="note" id="" cols="30" rows="10"><?php echo isset($_POST['note'])?$_POST['note']:'';?></textarea>
    <br>
    <input type="submit" name="submit" value="hiển thị">



</form>