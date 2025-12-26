<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học Lập trình C</title>

    <link rel="stylesheet" href="../../assets/css/index.css">
    <link rel="stylesheet" href="style_video.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="page">
        <?php
        require __DIR__ . '/../../header.php';
        ?>

        <main class="main">

            <?php
            require __DIR__ . '/../../main-left.php';
            ?>

            <div class="main-right">
                <div class="video-column">
                    <div class="video-wrapper">
                        <iframe src="https://www.youtube.com/embed/yiB5AdEQHPY?si=_ZPrSuGnAd0tihNr"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title">1. Giới thiệu ngôn ngữ C</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>25</strong> bài học</span> • <span><strong>11h 02m</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">

                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Giới thiệu</strong>
                                    <span class="lesson-count">3 bài học | 28:40</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">
                                <li class="lesson-item active"
                                    onclick="changeVideo(this, 'yiB5AdEQHPY?si=_ZPrSuGnAd0tihNr', '1. Giới thiệu về khóa học lập trình C - Lợi ích khi học lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Giới thiệu về khóa học lập trình C - Lợi ích khi học lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 4:12</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'FKrukvR62yo?si=bqsyibsRJALR6G09', '2. Cài đặt và cấu hình Dev-C++ để lập trình C và C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Cài đặt và cấu hình Dev-C++ để lập trình C và C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'hrnIRCNGc30?si=Uea5kiN0kf_j4mXj', '3. Cấu hình dev C++ thuận tiện hơn khi lập trình - Sinh code mặc định khi tạo ra file code mới')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Cấu hình dev C++ thuận tiện hơn khi lập trình - Sinh code mặc định khi tạo ra file code mới</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 5:51</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Biến & Kiểu dữ liệu</strong>
                                    <span class="lesson-count">3 bài học | 1h 33m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'ymeQrma63qs?si=r1Kdv_lSJvbo67dV', '1. Làm quen với lập trình C và Dev-C++ qua một số ví dụ đơn giản')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Làm quen với lập trình C và Dev-C++ qua một số ví dụ đơn giản</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 30:14</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'IQkbu7E7L08?si=JVTPSCxMM_ddw9NY', '2. Các thành phần cơ bản trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Các thành phần cơ bản trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 30:10</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'yiIo-A019cQ?si=pwy0IO-XWSSYtFYk', '3. Một số bài tập tính toán số học đơn giản để làm quen với ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Một số bài tập tính toán số học đơn giản để làm quen với ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 33:31</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Nhập xuất</strong>
                                    <span class="lesson-count">2 bài học | 1h 19m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'qm_5cRgWS9U?si=c9VxGP-iAo9WEIKx', '1. Hàm nhập xuất trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Hàm nhập xuất trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 40:14</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'WxIWCbBkJs4?si=0MpORjNuwL1_o4hg', '2. Chữa một số bài tập về nhập xuất cơ bản trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Chữa một số bài tập về nhập xuất cơ bản trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 39:12</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. Cấu trúc rẽ nhánh</strong>
                                    <span class="lesson-count">4 bài học | 1h 53m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'CcwVcf1-Tj8?si=9KXRGf_kQJcv5TPl', '1. Cấu trúc rẽ nhánh IF trong lập trình C - phần 1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Cấu trúc rẽ nhánh IF trong lập trình C - phần 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 29:07</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '6XchOAeNXDE?si=PHWB6Bz_d_Ip8yuG', '2. Cấu trúc rẽ nhánh IF trong lập trình C - phần 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Cấu trúc rẽ nhánh IF trong lập trình C - phần 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:53</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'gD_TDhAVkhM?si=4Esg7c35ZlxlwcrQ', '3. Cấu trúc rẽ nhánh IF trong lập trình C - phần 3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Cấu trúc rẽ nhánh IF trong lập trình C - phần 3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 27:56</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'InZSSVRw5pA?si=rkzzfIDon58RI2my', '4. Cấu trúc rẽ nhánh switch... case trong lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. Cấu trúc rẽ nhánh switch... case trong lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 39:57</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Vòng lặp</strong>
                                    <span class="lesson-count">2 bài học | 34:48</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'Oyr2acF2Fl4?si=AqjKQRv2qLim1H8Y', '1. Sử dụng for lồng nhau trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. Sử dụng for lồng nhau trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:19</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '2zKoEqUTTak?si=BDClpEXE99Zjc7Dl', '2. Cấu trúc lặp while và do ... while trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. Cấu trúc lặp while và do ... while trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 21:29</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">6. Hàm</strong>
                                    <span class="lesson-count">2 bài học | 56:18</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'nDwSIVI8AN4?si=F93HEOFORvnz4qit', '1. Xây dựng hàm (chương trình con) trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. Xây dựng hàm (chương trình con) trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 28:14</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Wtfi9ObEcDI?si=ClsI1rItTXe2wGON', '2. Xây dựng hàm (chương trình con) trong ngôn ngữ lập trình C (Phần 2)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. Xây dựng hàm (chương trình con) trong ngôn ngữ lập trình C (Phần 2)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 28:04</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">7. Mảng & Chuỗi</strong>
                                    <span class="lesson-count">3 bài học | 1h 27m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'vAVmGoe8cmM?si=iWqafAfIYQ7Vfazy', '1. Mảng và chuỗi trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Mảng và chuỗi trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 34:10</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'wTeslGHhaSs?si=boDyYFQ3-LOznPlo', '2. Mảng 2 chiều trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Mảng 2 chiều trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 34:28</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'mq3E8k7BKT0?si=2Pm2Sx3niSbKj9qh', '3. Chuỗi trong ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Chuỗi trong ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:54</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">8. Con trỏ</strong>
                                    <span class="lesson-count">3 bài học | 1h 37m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'r0isySc5siE?si=cfoq5AbhhzBgOLAw', '1. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 1)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 1)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 30:52</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'jzkBlD4wi7A?si=8vjLp2JjryXJQf4x', '2. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 2)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 2)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 31:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'QcEBRHHhRkg?si=yIgoG6iM4ON-ahxn', '3. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 3)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 3)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 34:25</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">9. Kiểu dữ liệu cấu trúc - Struct</strong>
                                    <span class="lesson-count">2 bài học | 47:14</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '1IzB1B-HHCk?si=Gl2M7sZLrre-wVn5', '1. Kiểu dữ liệu tự định nghĩa struct trong C - học ngôn ngữ lập trình C (Phần 1)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Kiểu dữ liệu tự định nghĩa struct trong C - học ngôn ngữ lập trình C (Phần 1)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'rwp41UGN414?si=ryUXSOA6XGIjukKf', '2. Kiểu dữ liệu tự định nghĩa struct trong C - học ngôn ngữ lập trình C (Phần 2)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Kiểu dữ liệu tự định nghĩa struct trong C - học ngôn ngữ lập trình C (Phần 2)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:17</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">10. Kiểu dữ liệu liệt kê - Enum</strong>
                                    <span class="lesson-count">1 bài học | 23:17</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'rwp41UGN414?si=OCUpz-vncfdS_PVx', '1. Kiểu enum (kiểu liệt kê) trong C - học ngôn ngữ lập trình C')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">25. Kiểu enum (kiểu liệt kê) trong C - học ngôn ngữ lập trình C</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:17</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
        require __DIR__ . '/../../footer.php';
        ?>
    </div>

    <script src="scrip.js"></script>
</body>

</html>