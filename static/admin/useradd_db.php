<?php
include("../connect.php");
session_start();

    // ตรวจสอบว่ามีข้อมูลที่ถูกส่งมาหรือไม่
    if (isset($_POST['useradd'])) {
        // ดึงข้อมูลจาก $_POST
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $c_password = $_POST['c_password'];
        $position = $_POST['position'];

        $sql = "SELECT * FROM user WHERE u_username = '$username'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($password != $c_password) {
            $errorMessage = "รหัสผ่านไม่ตรงกัน";
            header("Location: user_add.php?status=error&msg=" . urlencode($errorMessage));
            exit();
        } elseif ($row) {
            if ($row['u_username'] === $username) {
                $errorMessage = "มีชื่อผู้ใช้นี้ในระบบแล้ว";
                header("Location: user_add.php?status=error&msg=" . urlencode($errorMessage));
                exit();
            }
        } else {
            $encryptpassword = md5($password);
            $sql = "INSERT INTO user (u_username,u_password,u_name,u_position) VALUES ('$username','$encryptpassword','$name','$position')";
            if (mysqli_query($conn, $sql)) {
                $successMessage = "เพิ่มผู้ใช้สำเร็จ";
                header("Location: user.php?status=success&msg=" . urlencode($successMessage));
                exit();
            } else {
                $errorMessage = "เพิ่มผู้ใช้ไม่สำเร็จ";
                header("Location: user_add.php?status=error&msg=" . urlencode($errorMessage));
                exit();
            }
        }
        mysqli_close($conn);
    }
