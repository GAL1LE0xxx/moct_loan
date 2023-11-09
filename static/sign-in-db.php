<?php
session_start();
include('connect.php');

if (isset($_POST['login_user'])) {

    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM user WHERE u_username = '$username' AND u_password = '$password'";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['u_id'];
        $_SESSION['id'] = $id;
        $name = $row['u_name'];
        $_SESSION['name'] = $name;
        $position = $row['u_position'];
    }

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $username;
        $_SESSION['position'] = $position;

        if ($position == 0) {
            // แอดมิน
            $successMessage = "เข้าสู่ระบบสำเร็จยินดีต้อนรับ $username";
            header("location: admin/user.php?status=success&msg=" . urlencode($successMessage));
            exit();
        } elseif ($position == 1) {
            // พนักงาน
            $successMessage = "เข้าสู่ระบบสำเร็จยินดีต้อนรับ $username";
            header("location: employee/employee.php?status=success&msg=" . urlencode($successMessage));
        }
    } else {
        $errorMessage = "ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง";
        header("location: sign-in.php?status=error&msg=" . urlencode($errorMessage));
    }
}


mysqli_close($conn);
