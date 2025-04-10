<?php

if (isset($_POST['btn_login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = "Không được để trống Username";
    } else {
        if (!strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32) {
            $error['username'] = "Số lượng kí tự phải từ 6 đến 32";
        } else {
            $partten = "/^[A-Za-z0-9_\.](6,32)$/";
            if (!preg_match($partten, $_POST['username'], $matchs))
                $error['username'] = "Lưu ";
            else {
                $username = $_POST['username'];
                echo $username;
            }
        }
    }
    if (empty($_POST['password'])) {
        // Hạ cờ
        $error['password'] = "Không được để trống Password";
    } else {
        $password = $_POST['password'];
    }

    // Kết luận
    if (empty($error)) {
        // xử lí không có lỗi
        echo "Username: {$username} <br> Password: {$password}";
    } else {
        echo "<pre>";
        print_r($error);
        echo "</pre>";
    }
}
?>


<head>
    <title>
        Chuẩn hóa dữ liệu Form đăng nhậpnhập
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