<?php
session_start();
include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- icon -->
    <link rel="shortcut icon" href="https://www.mcot.net/assets/www/svg/mcot-digital.svg" />
    <!-- icon -->

    <title>MCOT LOAN | ระบบกู้ยืมสวัสดิการสำหรับพนักงาน บมจ. อสมท</title>
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>

<body>
    <!-- header  -->
    <div id="header">
        <nav class="navbar navbar-expand bg-header">
            <a href="idex.php">
                <img class="mx-3" width="120" height="60" src="https://www.mcot.net/assets/www/svg/mcot-digital.svg" alt="logo">
            </a>
            <span class="mx-1 text-light">ระบบกู้ยืมสวัสดิการพนักงาน บมจ.อสมท <br>MCOT LOAN SYSTEM</span>
            <div class="ms-auto">
                <a href="admin-sign-in.php" class="btn btn-outline-light mx-3">ลงชื่อเข้าใช้</a>
            </div>
        </nav>
    </div>


    <!-- end header  -->

    <!-- navbar 1 -->
    <div class="sticky-top bg-navbar">
        <ul class="nav justify-content-center ">
            <li class="nav-item">
                <a href="#">ข่าวสาร</a>
            </li>
            <li class="nav-item ">
                <a href="#">ทดสอบ</a>
            </li>
            <li class="nav-item">
                <a href="#">ทดสอบ</a>
            </li>
            <li class="nav-item">
                <a href="#">ทดสอบ</a>
            </li>
        </ul>
    </div>
    <!-- end navbar 1 -->

    <div class="content">
        <div class="container-fluid">

            <!--  slide image -->
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleInterval" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="img\photos\unsplash-1.jpg" class="d-block w-100 h-150" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="img\photos\unsplash-2.jpg" class="d-block w-100 h-150" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="img\photos\unsplash-3.jpg" class="d-block w-100 h-150" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="img\carousel\test-image.jpg" class="d-block w-100 h-150" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="container mt-5">
                <div class="row">
                    <div class="col mt-2">
                        <h1>Header Test 1</h1>
                    </div>
                    <div class="col mt-2">
                        <h1>Header Test 2</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slide image -->

    <!-- footer -->
    <footer class="footer mt-auto py-2  bg-footer">
        <div class="container-fluid">
            <span>MCOT LOAN | ระบบกู้ยืมสวัสดิการพนักงาน บมจ.อสมท</span>
        </div>
    </footer>
    <!-- footer -->


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


</body>

</html>