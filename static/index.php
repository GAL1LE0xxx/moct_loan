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
    <div class="sticky-md-top ">
        <nav class="navbar navbar-expand-md bg-header shadow p-2 mb-3 bg-body-tertiary ">
            <a href="index.php">
                <img class="mx-2" width="90" height="60" src="https://www.mcot.net/assets/www/svg/mcot-digital.svg" alt="logo">
            </a>
            <span class="mx-1 text-light">ระบบกู้ยืมสวัสดิการพนักงาน บมจ.อสมท <br>MCOT LOAN SYSTEM</span>
            <div class="ms-auto d-flex justify-content-md-end">
                <ul class="nav">
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
            <div class="ms-auto d-flex  justify-content-md-end">
                <a href="sign-in.php" class="btn btn-outline-light mx-3">ลงชื่อเข้าใช้</a>
            </div>
        </nav>
    </div>

    <!-- end header  -->

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
            <!-- end slide image -->

            <!-- news -->
            <div class="container mt-5">
                <div class="row ">
                    <div class="col-6 mt-2 d-flex justify-content-center">
                        <div class="row g-0 bg-body-secondary position-relative">
                            <div class="col-md-6 mb-md-0 p-md-4">
                                <img src="img\avatars\avatar.jpg" class="w-100" alt="...">
                            </div>
                            <div class="col-md-6 p-4 ps-md-0">
                                <h5 class="mt-0">Columns with stretched link</h5>
                                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                                <a href="#" class="stretched-link">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 mt-2 d-flex justify-content-center">
                        <div class="row g-0 bg-body-secondary position-relative">
                            <div class="col-md-6 mb-md-0 p-md-4">
                                <img src="img\avatars\avatar.jpg" class="w-100" alt="...">
                            </div>
                            <div class="col-md-6 p-4 ps-md-0">
                                <h5 class="mt-0">Columns with stretched link</h5>
                                <p>Another instance of placeholder content for this other custom component. It is intended to mimic what some real-world content would look like, and we're using it here to give the component a bit of body and size.</p>
                                <a href="#" class="stretched-link">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end news -->

        </div>
    </div>


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