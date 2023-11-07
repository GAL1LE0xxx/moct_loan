<?php
session_start();
include('connect.php');

if (isset($_POST['login_user'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE admin_username = '$username' AND admin_password = '$password'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['admin_id'];
        $_SESSION['id'] = $id;
        $name = $row['admin_name'];
        $_SESSION['name'] = $name ;
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;

            $successMessage = "เข้าสู่ระบบสำเร็จยินดีต้อนรับ $username";
            header("location: admin.php?status=success&msg=" . urlencode($successMessage));
            exit();
       
    } 
    else {
        $errorMessage = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header("location: admin-sign-in.php?status=error&msg=" . urlencode($errorMessage));
    }
}


mysqli_close($conn);
