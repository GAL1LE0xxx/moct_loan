<?php
include("../connect.php");
session_start();

if (isset($_POST['useredit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $name = $_POST['name'];
    $position = $_POST['position'];
    $sql = "UPDATE user SET u_username='$username',u_name='$name',u_position='$position' WHERE u_id='$id'";
    if (mysqli_query($conn, $sql)) {
        $successMessage = "แก้ไขผู้ใช้สำเร็จ";
        header("Location: user.php?status=success&msg=" . urlencode($successMessage));
        exit();
    } else {
        $errorMessage = "แก้ไขผู้ใช้ไม่สำเร็จ";
        header("Location: user_edit.php?status=error&msg=" . urlencode($errorMessage));
        exit();
        $_SESSION['errors'] = "แก้ไขผู้ใช้ไม่สำเร็จ";
    }
}
header('location: user.php');
mysqli_close($conn);
