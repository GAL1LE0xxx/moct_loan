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

    <!-- datatables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <!-- datatables -->


    <style>
        .error {
            border: 1px solid red;
        }
    </style>

</head>

<body>
    <div class="wrapper">
        <?php include("adminnav.php") ?>
        <!-- content -->
        <main class="content">
            <div class="container-fluid p-0">
                <h1 class="h3 mb-3"><strong>แก้ไขข้อมูล</strong> | ผู้ใช้</h1>
            </div>
            <div class="card flex-fill">
                <div class="card-body">
                    <div class="m-sm-4">
                        <form action="useredit_db.php" method="post" class="needs-validation" novalidate="">
                            <?php
                            if (isset($_GET['id'])) {
                                $id = $_GET['id'];
                                $sql = "SELECT * FROM user WHERE u_id = '$id'";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);
                                $username = $row['u_username'];
                                $name = $row['u_name'];
                                $position = $row['u_position'];
                            } ?>
                            <div class="row g-3">
                                <input type="hidden" class="form-control " name="id" value="<?php echo $id ?>" readonly>
                                <div class="col-sm-6">
                                    <label for="username" class="form-label">ชื่อผู้ใช้ :</label>
                                    <input type="text" class="form-control" name="username" placeholder="กรุณากรอกชื่อผู้ใช้" value="<?php echo $username ?>" required="">
                                    <div class="invalid-feedback">
                                        กรุณากรอกชื่อผู้ใช้
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="name" class="form-label">ชื่อ-สกุล :</label>
                                    <input type="text" class="form-control" name="name" placeholder="กรุณากรอกชื่อ-สกุล" value="<?php echo $name ?>" required="">
                                    <div class="invalid-feedback">
                                        กรุณากรอกชื่อ-สกุล
                                    </div>
                                </div>
<!-- 
                                <div class="col-sm-6">
                                    <label for="password" class="form-label">รหัสผ่าน :</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="กรุณากรอกรหัสผ่าน" value="" required="">
                                    <div class="invalid-feedback">
                                        กรุณากรอกรหัสผ่านอย่างน้อย 8 ตัว
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <label for="c_password" class="form-label">ยืนยันรหัสผ่าน :</label>
                                    <input type="password" class="form-control" name="c_password" placeholder="กรุณายืนยันรหัสผ่าน" value="" required="">
                                    <div class="invalid-feedback">
                                        กรุณายืนยันรหัสผ่าน
                                    </div>
                                </div> -->

                                <div class="col-md-5">
                                    <label for="position" class="form-label">ตำแหน่ง :</label>
                                    <select class="form-select" name="position" value="" required="">
                                        <option disabled selected>กรุณาเลือกตำแหน่ง</option>
                                        <option value="0">ผู้ดูแลระบบ</option>
                                        <option value="1">พนักงาน</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid position.
                                    </div>
                                </div>


                                <div class="mt-4">
                                    <button type="submit" name="useredit" class="btn btn-lg btn-success">ยืนยัน</button>
                                    <a class='btn btn-lg btn-danger' href='user.php'>ย้อนกลับ</a>
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
                            <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>AdminKit</strong></a> - <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Bootstrap Admin
                                    Template</strong></a> &copy;
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
                title: msg,
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
                title: msg,
                icon: 'error',
                confirmButtonClass: 'btn btn-primary'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Redirect to order.php with success status and message
                    const redirectURL = 'user_add.php';
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

    <!-- formcheck -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var form = document.querySelector('.needs-validation');
            var passwordInput = document.getElementById('password');

            form.addEventListener('submit', function(event) {
                if (!form.checkValidity() || passwordInput.value.length < 8) {
                    event.preventDefault();
                    event.stopPropagation();

                    // เพิ่มคลาส 'was-validated' ที่เกี่ยวข้อง
                    form.classList.add('was-validated');

                    // แสดงข้อความผิดพลาดสำหรับรหัสผ่าน
                    if (passwordInput.value.length < 8) {
                        passwordInput.classList.add('is-invalid');
                    } else {
                        passwordInput.classList.remove('is-invalid');
                    }
                }
            }, false);
        });
    </script>

    <!-- formcheck -->



</body>

</html>