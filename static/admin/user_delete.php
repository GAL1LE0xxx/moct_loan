<?php
session_start();
include('../connect.php');

$loggedInUserID = $_SESSION['id'];

if (isset($_GET['d_id'])) {
    $d_id = $_GET['d_id'];

    if ($d_id != $loggedInUserID) {
        $sql = "UPDATE user SET u_status = 1 WHERE u_id='$d_id'";

        if (mysqli_query($conn, $sql)) {
            $successMessage = "ลบผู้ใช้สำเร็จ";
            header("location: user.php?status=success&msg=" . urlencode($successMessage));
            exit();
        }
    } else {
        $errorMessage = "ไม่สามารถลบบัญชีของตัวเองได้";
        header("location: user.php?status=error&msg=" . urlencode($errorMessage));
        exit();
    }
}

header('location: user.php');
mysqli_close($conn);
