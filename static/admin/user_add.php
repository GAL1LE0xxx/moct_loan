<?php
session_start();
include("../connect.php");
if (!isset($_SESSION['username'])) {
    header("location: ../sign-in.php"); // redirect ไปยังหน้า login.php
}

$name = $_SESSION['name'];
$position = $_SESSION['position'];


if ($position != '0') {
    $errorMessage = "สำหรับผู้ดูแลระบบเท่านั้น";
    header("location: ../sign-in.php?status=error&msg=" . urlencode($errorMessage));
} else if ('$position = 0 ') {
    $position = "ผู้ดูแลระบบ";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>MCOT LOAN | จัดการข้อมูลผู้ใช้</title>

    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- bootstarp icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    <!-- bootstarp icon  -->


    <!-- sweetalert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
    <!-- sweetalert -->

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

</head>

<body>
    <div class="wrapper">
        <?php include("adminnav.php") ?>
        <!-- content -->
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>เพิ่มข้อมูล</strong> | ผู้ใช้</h1>
            </div>
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="m-sm-4">
                        <form action="useradd_db.php" method="post">
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="text mb-1" for="username">ชื่อผู้ใช้</label>
                                    <input class="form-control" name="username" type="text" placeholder="กรุณากรอกชื่อผู้ใช้">
                                </div>
                                <div class="col-md-6">
                                    <label class="text mb-1" for="name">ชื่อ-สกุล</label>
                                    <input class="form-control" name="name" type="text" placeholder="กรุณากรอกชื่อ-สกุล">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="text mb-1" for="password">รหัสผ่าน</label>
                                    <input class="form-control" name="password" type="password" placeholder="กรุณากรอกรหัสผ่าน">
                                </div>
                                <div class="col-md-6">
                                    <label class="text mb-1" for="c_password">ยืนยันรหัสผ่าน</label>
                                    <input class="form-control" name="c_password" type="password" placeholder="กรุณายืนยันรหัสผ่าน">
                                </div>
                            </div>

                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="text mb-1" for="postion">ตำแหน่ง</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>ตำแหน่ง</option>
                                        <option value="1">ผู้ดูแลระบบ</option>
                                        <option value="2">พนักงาน</option>
                                    </select>
                                </div>
                                
                            </div>

                            <div class="mt-4">
                                <button type="submit" name="useradd" class="btn btn-lg btn-success">ยืนยัน</button>
                                <td><a class='btn btn-lg btn-danger' href='user.php'>ย้อนกลับ</a></td>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <!-- end content -->

        <!-- footer -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row text-muted">
                    <div class="col-6 text-start">
                        <p class="mb-0">
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin Template</strong></a> &copy;
                        </p>
                    </div>
                    <div class="col-6 text-end">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
                            </li>
                            <li class="list-inline-item">
                                <a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer -->

    </div>

    <script src="../js/app.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>

    <!-- datatable -->
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <!-- datatable -->

    <!-- sweetalert -->
    <script>
        // Get the URL query parameters
        const urlParams = new URLSearchParams(window.location.search);
        const status = urlParams.get('status');
        const msg = urlParams.get('msg');

        // Check the status and display the SweetAlert message
        if (status === 'success') {
            Swal.fire({
                title: 'เข้าสู่ระบบสำเร็จ',
                text: msg,
                icon: 'success',
                confirmButtonClass: 'btn btn-primary'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to order.php with success status and message
                    const redirectURL = 'user.php';
                    window.location.href = redirectURL;
                }
            });
        } else if (status === 'error') {
            Swal.fire({
                title: 'ผิดพลาด',
                text: msg,
                icon: 'error',
                confirmButtonClass: 'btn btn-primary'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to order.php with success status and message
                    const redirectURL = 'user.php';
                    window.location.href = redirectURL;
                }
            });
        }
    </script>
    <script>
        function confirmDelete(userId) {
            Swal.fire({
                title: 'ต้องการลบผู้ใช้?',
                text: 'ข้อมูลนี้ไม่สามารถกู้คืนได้',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'ใช่, ลบ!',
                cancelButtonText: 'ยกเลิก'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to the delete page with the user ID
                    window.location.href = 'user_delete.php?d_id=' + userId;
                }
            });
        }
    </script>
    <!-- sweetalert -->


</body>

</html>