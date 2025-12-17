<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="page">
        <?php
        require '../app/auth/auth.php';
        requireLogin();
        ?>
        <!-- Header -->
        <header class="header">
            <div class="header-inner">
                <div class="header-inner-left">
                    <a href="/" class="logo" aria-label="F8 - Home">
                        <span class="logo-badge">36Tech</span>
                        <span class="site-title">Học Lập Trình </span>
                    </a>
                </div>
                <div class="header-inner-center">
                    <form class="search" role="search" action="#" method="get">
                        <div class="search-wrapper">
                            <input id="search-input" name="q" type="search" placeholder="Tìm kiếm khóa học, bài viết, video, ..."
                                autocomplete="off">
                            <button type="submit" class="search-btn" aria-label="Tìm kiếm">🔍</button>
                        </div>
                    </form>
                </div>
                <div class="header-inner-right">
                    <nav class="auth">
                        <?php
                        if (!isset($_SESSION['user_id'])) {
                        ?>
                            <a class="btn btn-ghost" href="./assets/php/register.php">Đăng ký</a>
                            <a class="btn btn-primary" href="./assets/php/login.php">Đăng nhập</a>

                        <?php
                        } else {
                        ?>
                            <div style="display: flex; align-items: center; gap: 10px;">

                                <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
                                    <a href="../app/admin/dashboard.php" class="btn btn-primary"
                                        style="background-color: #ff6b6b; border-color: #ff6b6b; display: flex; align-items: center; gap: 6px; padding: 12px;">
                                        <i class="fa-solid fa-gauge-high"></i> <span style="font-size: 14px;">Dashboard</span></a>
                                <?php } ?>

                                <a href="../app/auth/profile.php" style="display:flex; align-items:center; gap:8px; padding: 4px 12px; 
                      border-radius:999px; border:1px solid #218080; 
                      text-decoration: none; color: inherit; background: #fff;">

                                    <?php
                                    $avatarName = !empty($_SESSION['avatar']) ? $_SESSION['avatar'] : 'default-avatar.jpg';
                                    $path = './assets/image/' . $avatarName;
                                    ?>
                                    <img src="<?php echo $path ?>" alt="Avatar"
                                        style="width:28px; height:28px; border-radius:50%; object-fit: cover; border: 1px solid #eee;">
                                    <span style="font-weight:600; font-size: 14px; color: #218080;">
                                        <?= htmlspecialchars($_SESSION['fullname']) ?>
                                    </span>
                                </a>

                                <a href="../app/auth/logout.php" class="btn btn-ghost" style="color:red; font-size: 19px;">
                                    <i class="fa-solid fa-right-from-bracket"></i>
                                </a>

                            </div>
                        <?php } ?>
                    </nav>
                </div>
            </div>
        </header>

        <!-- Backdrop for mobile sidebar -->
        <div class="backdrop" id="backdrop"></div>

        <!-- Main -->
        <main class="main">

            <!--Main trái  -->
            <div class="main-left">
                <div class="main-left-btn">
                    <button class="btn-home">
                        <i style="font-size: 20px;" class="fa-regular fa-house"></i>
                        <p style="font-weight: 500;margin-top: 6px;">Trang chủ</p>
                    </button>
                </div>
                <div class="main-left-btn">
                    <button class="btn-road">
                        <i style="font-size: 20px;" class="fa-solid fa-road"></i>
                        <p style="font-weight: 500;margin-top: 6px;">Lộ trình</p>
                    </button>
                </div>


            </div>
            <!--Main phải  -->
            <div class="main-right">

                <div class="main-right">
                    <!-- banner The Huy -->
                    <div class="banner">
                        <div class="slider-container">
                            <button class="prev">‹</button>
                            <div class="slides">
                                <div class="slide">
                                    <div class="content">
                                        <h2><a href="#">Học HTML CSS cho người mới 👑</a></h2>
                                        <p>Thực hành dự án với Figma, hàng trăm bài tập, hướng dẫn 100% bởi Sơn Đặng, tặng kèm Flashcards,
                                            v.v.</p>
                                        <button class="cta">HỌC THỬ MIỄN PHÍ</button>
                                    </div>
                                    <div class="image">
                                        <a href="#"><img src="./assets/image/html.png" alt="" style="height: 250px; width: 450px;"></a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="content">
                                        <h2><a href="#">Học ReactJS Miễn Phí!</a></h2>
                                        <p>Khóa học ReactJS từ cơ bản tới nâng cao. Kết quả của khóa học này là bạn có thể làm hầu hết các
                                            dự
                                            án thường gặp với ReactJS.</p>
                                        <button class="cta">HỌC THỬ MIỄN PHÍ</button>
                                    </div>
                                    <div class="image">
                                        <a href="#"><img src="./assets/image/Banner_web_ReactJS.png" alt=""
                                                style="height: 250px; width: 450px;"></a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="content">
                                        <h2><a href="#">Thành Quả của Học Viên</a></h2>
                                        <p>Để đạt được kết quả tốt trong mọi việc ta cần xác định mục tiêu rõ ràng cho việc đó. Học lập
                                            trình
                                            cũng không là ngoại lệ.</p>
                                        <button class="cta">XEM THÀNH QUẢ</button>
                                    </div>
                                    <div class="image">
                                        <a href="#"><img src="./assets/image/Banner_01_2.png" alt=""
                                                style="height: 250px; width: 450px;"></a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="content">
                                        <h2><a href="#">Lớp học FullStack Online</a></h2>
                                        <p>Học online trực tiếp qua Zoom, phù hợp nếu bạn muốn được review code, chấm bài trực tiếp bởi
                                            giảng
                                            viên và trợ giảng giàu kinh nghiệm. Giờ học linh hoạt, phù hợp cả sinh viên và người đi làm.</p>
                                        <button class="cta">TƯ VẤN MIỄN PHÍ</button>
                                    </div>
                                    <div class="image">
                                        <a href="#"><img src="./assets/image/banner-fs.png" alt="" style="height: 250px; width: 450px;"></a>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="content">
                                        <h2><a href="#">36Tech trên Youtube</a></h2>
                                        <p>36Tech được nhắc tới ở mọi nơi, ở đâu có cơ hội việc làm cho nghề IT và có những con người yêu
                                            thích
                                            lập trình 36Tech sẽ ở đó.</p>
                                        <button class="cta">ĐĂNG KÍ KÊNH</button>
                                    </div>
                                    <div class="image">
                                        <a href="#"><img src="./assets/image/Banner_03_youtube.png" alt=""
                                                style="height: 250px; width: 450px;"></a>
                                    </div>
                                </div>
                            </div>
                            <button class="next">›</button>
                        </div>
                    </div>


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
                        </div> <!--  hàng 2 -->





                    </div>
                </div>



        </main>

        <!-- Footer -->
        <footer class="footer">
            <div class="footer-inner">
                <div class="footer-col contact">
                    <a href="/" class="logo" aria-label="36Tech - Home">
                        <img style="border-radius: 10px;" src="./assets/image/logo36Tech.png" alt="" width="50px" height="50px">

                    </a>
                    <p>Điện thoại: 09 6148 0702<br>
                        Email: contact@36Tech.edu.vn<br>
                        Địa chỉ: Số 18, phố Viên, Đức Thắng, Bắc Từ Liêm, Hà Nội</p>
                    <img src="./assets/image/DCMA.png" alt="DMCA Protected" style="width:120px; margin-top:12px; display:block">
                </div>

                <div class="footer-col">
                    <h4>VỀ 36Tech</h4>
                    <ul>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="#">Liên hệ</a></li>
                        <li><a href="#">Điều khoản</a></li>
                        <li><a href="#">Bảo mật</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>SẢN PHẨM</h4>
                    <ul>
                        <li><a href="#">Khóa học CSS</a></li>
                        <li><a href="#">Khóa học javascript</a></li>
                        <li><a href="#">Khóa học nhập môn cntt </a></li>
                        <li><a href="#">Khóa học C++</a></li>
                        <li><a href="#">Khóa học Java</a></li>
                        <li><a href="#">Khóa học python</a></li>
                    </ul>
                </div>



                <div class="footer-col">
                    <h4>CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC F8</h4>
                    <ul>
                        <li><strong>Mã số thuế:</strong> 0000000000</li>
                        <li><strong>Ngày thành lập:</strong> 01/09/2025</li>
                        <li><strong>Lĩnh vực hoạt động:</strong> Giáo dục, công nghệ - lập trình.</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <span>© 2025 36Tech. Nền tảng học lập trình hàng đầu Việt Nam</span>
                <div class="social" style="display:flex; gap:12px">
                    <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>
        </footer>
        <script src="./assets/js/index.js"></script>
    </div>
</body>

</html>