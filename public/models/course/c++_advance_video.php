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
                        <iframe src="https://www.youtube.com/embed/Da1tpV9TMU0?si=CAkBaZt2ix8RLx-V"
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
                            <span><strong>24</strong> bài học</span> • <span><strong>3h11p</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">
                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Giới thiệu</strong>
                                    <span class="lesson-count">1/1 | 1:03</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">

                                <li class="lesson-item active"
                                    onclick="changeVideo(this, 'Da1tpV9TMU0?si=f4pSJkH9c0k29YWZ', '1. Giới Thiệu khóa học C++')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Giới Thiệu khóa học C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 1:03</span>
                                        </div>
                                    </div>
                                </li>


                            </ul>
                        </div>
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Nạp chồng hàm toán tử</strong>
                                    <span class="lesson-count">1/1 | 11:31</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'tNlCid6mQ3E?si=b4LTAUbG4raZmUK6', '1. Nạp chồng toán tử trong C++ | Operator overLoading')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Nạp chồng toán tử trong C++ | Operator overLoading</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:31</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Lớp - Class</strong>
                                    <span class="lesson-count">2/2 | 23:30</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'jwvmfp3Kp8U?si=Vf58jRH7q6Z3ZVG0', '1. Class & object | Lớp và đối tượng trong C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Class & object | Lớp và đối tượng trong C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:50</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ye8KRuD-gFY?si=-kvN-owEAWrpImL6', '2. Các hàm thành phần của class')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Các hàm thành phần của class</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 8:31</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. Các thành phần của class</strong>
                                    <span class="lesson-count">4/4 | 39:00</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'Xj7wmFXGn8E?si=5hPHd4ik9-5XbLIf', '1. Các thành phần public')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Các thành phần public</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:40</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'WoJ_jFuffN0?si=AgTj-DdAcRFqPErF', '2. Các thành phần private')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Các thành phần private</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 8:28</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'KlfkpMuMK4g?si=D01UNDBCmCWSE7fl', '3. Các thành phần kiểu protected')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Các thành phần kiểu protected</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 9:38</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Rgu9cd2fUQQ?si=ZRFHPK_5DHQVUDlH', '4. Các thành phần static')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Các thành phần static</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:12</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Hàm phổ biến</strong>
                                    <span class="lesson-count">7/7 | 49:30</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'Zv77Uj2zXNE?si=PAfKxq7lJaDtKCTU', '1. Constructors - Hàm tạo')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Constructors - Hàm tạo</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:02</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'B7J9X1hCKsE?si=tLCzt4LsW2L0H2eA', '2. Hàm set va hàm get')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Hàm set va hàm get</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 7:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'mv1r3fENtOs?si=Nge3WNC-UIdZ8sqS', '3. Destructors - Hàm hủy')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Destructors - Hàm hủy</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 4:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'F74kzmhQRA8?si=qGj9fkP1hq_7r858', '4. Hàm bạn - friend funtions')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. Hàm bạn - friend funtions</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 7:19</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'vdOPB5YByMc?si=-djiBBIFym-CIslt', '5. Hàm inline')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. Hàm inline</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 5:46</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'wKy3BNfoD0c?si=Qgljyply7zLpQHa8', '6. Cách gọi hàm tạo của class cơ sở từ class dẫn xuất')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. Cách gọi hàm tạo của class cơ sở từ class dẫn xuất</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 7:04</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'pSEf0fK4SNk?si=PQlk4n5MRzIuCOzJ', '7. Hàm thành phần tái định nghĩa')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. Hàm thành phần tái định nghĩa</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 5:43</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">6. Con trỏ</strong>
                                    <span class="lesson-count">2/2 | 9:00</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '3A2YQXd1Aso?si=vQFw2FATUPsaPeJ-', '1. Con trỏ this')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. Con trỏ this</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 5:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '6XuNeSI3eTw?si=-2-ArQn2u0EYw7Rj', '2. Con trỏ trỏ tới class')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Con trỏ trỏ tới class</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 3:59</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">7. Hằng đối tượng</strong>
                                    <span class="lesson-count">1/1 | 10:55</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '-_4xfLdxjGg?si=f6ym3YW9IchCIzD1', '1. Hằng đối tượng và hàm thành phần hằng')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Hằng đối tượng và hàm thành phần hằng</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:55</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">8. Tính chất</strong>
                                    <span class="lesson-count">6/6 | 47:00</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'j-LyRHfSY_Y?si=6JvCeeb1hyroDjus', '1. Polymophism - Tính đa hình (Nạp chồng và ghi đè)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Polymophism - Tính đa hình (Nạp chồng và ghi đè)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'm2ZsYwZuns4?si=p8rryoydYO-I2-xO', '2. Polymophism - Tính đa hình (Phương thức ảo)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Polymophism - Tính đa hình (Phương thức ảo)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:02</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ab2TALCZruo?si=2wlGr65Bk-xX31Y_', '3. Encapsulation - Tính Đóng gói')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. Encapsulation - Tính Đóng gói</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'M6FwepHC6vM?si=ewAyy6ctK1PxrK5T', '4. Inheritance - Tính kế thừa')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Inheritance - Tính kế thừa</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:33</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Q9U_dFtWCDI?si=2mQim_VZMveMdlPr', '5. Thuộc tính truy cập và kiểu kế thừa trong C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Thuộc tính truy cập và kiểu kế thừa trong C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '-G0bcwu_Vtw?si=HgOI7xkCp82ab1Iy', '6. Abstraction - Tính trừu tượng')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Abstraction - Tính trừu tượng</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:17</span>
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