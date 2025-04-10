<?php

if(isset($_POST['btn_login'])){
    $error = array(); // Mảng lưu lỗi hay Phất cờ
    if(empty($_POST['username'])){
        // Hạ cờ
        $error['username'] = "Không được để trống Username";
    } else {
        $username = $_POST['username'];
    }
    if(empty($_POST['password'])){
        // Hạ cờ
        $error['password'] = "Không được để trống Password";
    } else {
        $password = $_POST['password'];
    }

    // Kết luận
    if(empty($error)){
        // xử lí không có lỗi
        echo "Username: {$username} <br> Password: {$password}";
    } else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
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
    <h1>Đăng Nhập</h1>
    <form action="" method="POST">
       <label for="username">Username</label><br>
       <input type="text" name="username" id="username"><br>
       <label for="password">Password</label><br>
       <input type="password" name="password" id="password"><br><br>

       <input type="submit" name="btn_login" value="Login">
    </form>
</body>