<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36Tech - Trang chủ</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./models/content_course/style_inside.css">
</head>

<body>
    <div class="page">
        <?php
        require_once '../app/auth/auth.php';
        require_once 'config.php';
        requireLogin();
        ?>

        <?php
        include 'header.php';
        ?>

        <!-- Backdrop for mobile sidebar -->
        <div class="backdrop" id="backdrop"></div>

        <!-- Main -->
        <main class="main">
            <!--Main trái  -->
            <?php
            include 'main-left.php'
            ?>
            <!--Main phải  -->
            <div class="main-right">
                <?php
                if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                        case 'homepage':
                            include "homepage.php";
                            break;

                        case 'c':
                            include "models/content_course/C.php";
                            break;

                        case 'c++':
                            include "models/content_course/c++.php";
                            break;

<<<<<<< Updated upstream
<<<<<<< Updated upstream
                    <div class="container_khoa_hoc">
                        <div class="c1"> <!--  hàng 1 -->
                            <h2>Khóa học cơ bản</h2>
                            <div class="list_khoa_hoc">
                                <div class="card_box">
                                    <div><img src="./models/img/lap_trinh_c.png" class="img_card"> </div>
                                    <div class="info">
                                        <a href="./assets/php/nextpage.php" style="font-size: 20px;">Lập trình C cho người mới bắt đầu</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./models/img/c++.jpg" class="img_card"> </div>
                                    <div class="info">
                                        <a href="./assets/php/nextpage.php" style="font-size: 20px;">Khoá học C++ cơ bản</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./models/img/jscoban.jpg" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">Javascript cơ bản</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./models/img/reactJS.jpg" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">ReactJS cơ bản</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./models/img/python.jpg" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">Python cơ bản</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div> <!--  hàng 1 -->

                        <div class="c1"> <!--  hàng 2 -->
                            <h2>Khóa học nổi bật</h2>
                            <div class="list_khoa_hoc">
                                <div class="card_box">
                                    <div><img src="./models/img/c++_advance.jpg" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">C++ nâng cao</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./models/img/jsnangcao.png" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">Javascript nâng cao</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./models/img/github.webp" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">Ứng dụng Git và GitHub</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./assets/image/video-7.jpg" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">Kiến thức nhập môn IT</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="card_box">
                                    <div><img src="./assets/image/video-7.jpg" class="img_card"> </div>
                                    <div class="info">
                                        <a href="#" style="font-size: 20px;">Kiến thức nhập môn IT</a>
                                        <div class="btoom">
                                            <p><i class="fa-regular fa-circle-play"></i>9</p>
                                            <p><i class="fa-regular fa-clock"></i>3h12p</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
=======
=======
>>>>>>> Stashed changes
                        case 'c++_advance':
                            include "models/content_course/c++_advance.php";
                            break;
                    }
                } else {
                    include 'homepage.php';
                }
                ?>
            </div>
<<<<<<< Updated upstream
>>>>>>> Stashed changes
=======
>>>>>>> Stashed changes
        </main>
        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>
        <script src="./assets/js/index.js"></script>
        <script src="<?= CONTENT_COURSE ?>dropdown.js"></script>
</body>

</html>