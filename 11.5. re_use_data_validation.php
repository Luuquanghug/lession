<?php

if (isset($_POST['btn_reg'])) {
    $error = array();

    if (empty($_POST['fullname'])) {
        $error['fullname'] = "Ban can nhap ho va ten";
    } else {
        $fullname = $_POST['fullname'];
    }
    if (empty($_POST['gender'])) {
        $error['gender'] = "Ban can chon gioi tinh";
    } else {
        $gender = $_POST['gender'];
    }


    if (empty($error)) {
        // xử lí không có lỗi
        echo "gender: {$gender}";
    } 
}
?>


<html>

<head>
    <title>
        Chuẩn hóa dữ liệu Form đăng nhập
    </title>
</head>

<body>
    <style>
        p.error{
            color: red;
        }
    </style>

    <h1>Đăng Ký</h1>
    <form action="" method="POST">
        <label for="fullname">Ho va ten</label>
        <input type="text" name="fullname" id="fullname" value="<?php if(!empty($fullname)) echo $fullname ?>"/><br> <br>
        <?php if(!empty($error['fullname'])) echo "<p class='error'>{$error['fullname']}</p>"?>
        <label for="">Giới tính</label>
        <select name="gender" id="">
            <option value="">-- Chon --</option>
            <option <?php if(!empty($gender) && $gender == 'male') echo "selected='selected'"; ?> value="male">Nam</option>
            <option <?php if(!empty($gender) && $gender == 'female') echo "selected='selected'"; ?> value="female">Nữ</option>
        </select>
        <?php if(!empty($error['gender'])) echo "<p class='error'>{$error['gender']}</p>"?>
        <br><br>
        <input type="submit" name="btn_reg" value="Register">
    </form>
</body>