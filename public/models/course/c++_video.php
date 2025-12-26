<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học Lập trình C++</title>

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
                        <iframe src="https://www.youtube.com/embed/5vLkWRF-dpE?si=zILBcXsiTfaFtDBC"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title">1. Giới thiệu ngôn ngữ C++</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>85</strong> bài học</span> • <span><strong>24h 05m</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">

                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Giới thiệu</strong>
                                    <span class="lesson-count">2 bài học | 18:43</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">
                                <li class="lesson-item active"
                                    onclick="changeVideo(this, '5vLkWRF-dpE?si=zILBcXsiTfaFtDBC', '1. Giới thiệu ngôn ngữ C++')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Giới thiệu ngôn ngữ C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 8:13</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Gwix4rtQpdk?si=BgFO35nrOK9YWUQA', '1.2 Cài đặt và chạy chương trình C++ trên VS Code')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1.2 Cài đặt và chạy chương trình C++ trên VS Code</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:30</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Biến và kiểu dữ liệu</strong>
                                    <span class="lesson-count">5 bài học | 1h 09m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'qTC5HlYZFt4?si=WWoT22OWUHxjFSII', '2. Nhập xuất dữ liệu')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Nhập xuất dữ liệu</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 25:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'k1x71K0h19Y?si=yYIDKJMBlKT9kbV5', '3. Các kiểu dữ liệu cơ bản')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Các kiểu dữ liệu cơ bản</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 17:03</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '_ybp0WFKg5w?si=A9_PhtkNBzS2IQTr','4. Hằng số và biểu thức')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Hằng số và biểu thức</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 8:55</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'h4cKMbEgt_Q?si=jO0dCB9nHNUu4Ztq','5. Ép kiểu dữ liệu')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Ép kiểu dữ liệu</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:23</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'FKS_kEfuvB8?si=agi616u18tyCt9C8','6. Các phép toán cơ bản')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Các phép toán cơ bản</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 6:27</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Các loại toán tử</strong>
                                    <span class="lesson-count">3 bài học | 34:55</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'u9f-NKwNRlA?si=cioH6xd0klHAcvxL','7. Toán tử gán, các phép toán số học')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Toán tử gán, các phép toán số học</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:26</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'rCHLbtOAX8o?si=p5EOTNwKFL3ySorE','8. Toán tử logic, toán tử tiền tố, hậu tố')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Toán tử logic, toán tử tiền tố, hậu tố</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'SYO_0Ol6ei4?si=P-LtKvhOP24wrhyY','9. Toán tử 3 ngôi')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Toán tử 3 ngôi</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 7:35</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. if-else, switch-case </strong>
                                    <span class="lesson-count">2 bài học | 33:17</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'm1xZxVOkHyM?si=f70loOHdzNvn2l_a','10. Câu lệnh if-else')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Câu lệnh if-else</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 19:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'cKGypq7BSQs?si=5usetx_m4Gmi_-i2','11. Câu lệnh switch-case')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Câu lệnh switch-case</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:32</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Vòng lặp</strong>
                                    <span class="lesson-count">5 bài học | 1h 22m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'NhYCorLmc-s?si=CdlghORM-8duD7-z','12. Vòng lặp while')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. Vòng lặp while</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'zBLB5aiDh4c?si=9BIvPcwFGPhpaCa9','13. Vòng lặp do-while, while true')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. Vòng lặp do-while, while true</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:16</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'NPGofCbJN0Q?si=XyPk319bCd-btRLz','14. Vòng lặp for')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. Vòng lặp for</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:23</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'r4gfFi9T4AY?si=qEeFTzAZ03iWe5pd','15. break, continue trong vòng lặp')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. break, continue trong vòng lặp</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 20:16</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '6pla-9n10Ts?si=f4gXld9cLI8L_u8C','16. Vòng lặp for lồng nhau')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. Vòng lặp for lồng nhau</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:47</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">6. Hàm </strong>
                                    <span class="lesson-count">3 bài học | 40:14</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'p0pzLvY8FHE?si=y0fn1Hc362Mn88kp','17. Hàm trong C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Hàm trong C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 25:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'U3a_4HaHzaA?si=l2UWhsHL0O1Ol4cy','18. Truyền tham biến và tham trị')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Truyền tham biến và tham trị</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 9:25</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '65YMlbP8Mjk?si=vGnbGHmdaS5TVX5H','19. Parameter mặc định')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Parameter mặc định</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 4:55</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">7. Mảng </strong>
                                    <span class="lesson-count">3 bài học | 57:34</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'GIiAhzLNnrM?si=smR3CzhSZa4ba3jC','20. Mảng (Array) trong C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Mảng (Array) trong C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:26</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Wr_MCnFDPz0?si=usREo7pPGb25pk82','21. Mảng 2 chiều part 1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. Mảng 2 chiều part 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 19:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '3F5K0T8jTFM?si=F3okrFUprElXCd_D','22. Mảng 2 chiều part 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Mảng 2 chiều part 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:11</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">8. Con trỏ </strong>
                                    <span class="lesson-count">4 bài học | 59:15</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Nja9UEdANzs?si=YVgbw80XbdVioqpe','23. Khái niệm con trỏ')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Khái niệm con trỏ</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 17:25</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'pGxJ6NGLZWk?si=0YLEmVwcIhjAtpkT','24. Con trỏ void - con trỏ NULL')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Con trỏ void - con trỏ NULL</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:21</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'fPcEKaSGDpM?si=KXlEYHunzvbSq2JH','25. Con trỏ và mảng 1 chiều')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">25. Con trỏ và mảng 1 chiều</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:10</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '54eWNhU3v8g?si=RH6J2NyFMDt0NjW9','26. Con trỏ cấp 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">26. Con trỏ cấp 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:19</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">9. Mảng ký tự </strong>
                                    <span class="lesson-count">7 bài học | 1h 11m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '-Sffbp3GnDU?si=kjYoQra44Y3ngka0','27. Khai báo mảng char C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">27. Khai báo mảng char C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'ZQoM23y7dU8?si=C0gr8CVWlEjw1JTW','28. Nhập xuất chuỗi - mảng char C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">28. Nhập xuất chuỗi - mảng char C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:16</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'bwz6ZjLJqU4?si=G6ux8UzxQBdsCBMW','29. Sao chép mảng ký tự')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">29. Sao chép mảng ký tự</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:48</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'hbZlchDi0kg?si=R6_3Kn3gWwdMERgA','30. Nối chuỗi mảng ký tự')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">30. Nối chuỗi mảng ký tự</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '-Qe0yLDoWa0?si=cuvi6NXeBoZ1dHNV','31. Tìm kiếm ký tự, chuỗi trong mảng ký tự')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">31. Tìm kiếm ký tự, chuỗi trong mảng ký tự</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'ZbI-f8Cd-eI?si=i6Pz1kCFFnOANl45','32. So sánh chuỗi')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">32. So sánh chuỗi</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'SZijGcaYkTw?si=iUjqQSSsisOdydnI','33. Mảng ký tự toUpper và toLower')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">33. Mảng ký tự toUpper và toLower</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:33</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">10. Kiểu dữ liệu cấu trúc </strong>
                                    <span class="lesson-count">5 bài học | 1h 09m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '5YmipJCOupA?si=pOe0VvhufZccVxXN','34. Khai báo struct trong C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">34. Khai báo struct trong C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 9:16</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'u9f-NKwNRlA?si=cioH6xd0klHAcvxL','35. Tạo đối tượng từ struct trong C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">35. Tạo đối tượng từ struct trong C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:26</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'kFhiJXd1H18?si=Pe-_35qzmkYLVYnK','36. Sao chép giá trị struct trong C++')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">36. Sao chép giá trị struct trong C++</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 17:59</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'CUpJFcvmvJA?si=0yWZhvZ6LIgwVWRd','37. Mảng cấu trúc struct')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">37. Mảng cấu trúc struct</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'FO3uCeGCZ4o?si=msF5T0htKLGwkGP-','38. Con trỏ cấu trúc - Struct')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">38. Con trỏ cấu trúc - Struct</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:43</span>
                                        </div>
                                    </div>
                                </li>

                            </ul>
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