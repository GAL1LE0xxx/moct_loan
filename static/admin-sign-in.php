<?php
session_start();
include("connect.php");
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
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-in.html" />

	<title>MCOT LOAN | ลงชื่อเข้าใช้</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

	<!-- sweetalert -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.7/dist/sweetalert2.all.min.js"></script>
	<!-- sweetalert -->

</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">
						<div class="text-center mt-4">
							<h1 class="h2">MCOT | LOAN</h1>
							<p class="lead">
								ระบบเงินกู้สวัสดิการพนักงาน บมจ.อสมท
							</p>
						</div>
                        <a class="btn btn-primary mb-3" href="index.php">ย้อนกลับ</a>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-3">
									<form action="admin-sign-in-db.php" method="post">
										<div class="mb-3">
											<label class="form-label">ชื่อผู้ใข้</label>
											<input class="form-control form-control-lg" type="username" name="username" placeholder="กรุณากรอกชื่อผู้ใช้" />
										</div>
										<div class="mb-3">
											<label class="form-label">รหัสผ่าน</label>
											<input class="form-control form-control-lg" type="password" name="password" placeholder="กรุณากรอกรหัสผ่าน" />
										</div>
										<div class="form-group mt-3">
											<button type="submit" name="login_user" class="form-control btn btn-primary btn-lg submit px-3">เข้าสู่ระบบ</button>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="text-center mb-3">
							ไม่มีบัญชีผู้ใช้ใช่หรือไม่ ? <a href="pages-sign-up.html">สมัครสมาชิก</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>
	<!-- sweetalert -->
	<script>
		// Get the URL query parameters
		const urlParams = new URLSearchParams(window.location.search);
		const status = urlParams.get('status');
		const msg = urlParams.get('msg');

		// Check the status and display the SweetAlert message
		if (status === 'success') {
			Swal.fire({
				title: 'Success',
				text: msg,
				icon: 'success',
				confirmButtonClass: 'btn btn-primary'
			}).then((result) => {
				if (result.isConfirmed) {
					// Redirect to order.php with success status and message
					const redirectURL = 'admin-sign-in.php';
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
					const redirectURL = 'admin-sign-in.php';
					window.location.href = redirectURL;
				}
			});
		}
	</script>
	<!-- sweetalert -->

</body>

</html>