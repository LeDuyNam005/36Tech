<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học Responsive và Grid System</title>

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
                        <iframe src="https://www.youtube.com/embed/uz5LIP85J5Y?si=-DSicmZDpjw8Awpb"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title">1. Responsive là gì?</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>22</strong> bài học</span> • <span><strong>03h 56m</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">
                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Bắt đầu</strong>
                                    <span class="lesson-count">3 bài học | 13:21</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">

                                <li class="lesson-item active"
                                    onclick="changeVideo(this, 'uz5LIP85J5Y?si=-DSicmZDpjw8Awpb', '1. Responsive là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Responsive là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 7:28</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, '5QT0aeovTTY?si=u8NlZADtMBE2YFMk', '2. Chúng ta sẽ làm gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Chúng ta sẽ làm gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 1:58</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'CIIYogDrGto?si=wzKkZFBj3J2ISe7-', '3. Chuẩn bị công cụ làm việc')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Chuẩn bị công cụ làm việc</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 3:55</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Viewport, @media, breakpoint</strong>
                                    <span class="lesson-count">4 bài học | 35:10</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'XJiq_d0vGCQ?si=I_6UcnTTPZ4ZZYS_', '4. Khái niệm Viewport')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Khái niệm Viewport</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:11</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'YgkzJkmDP3U?si=cObcEdhmvQmu_MJD', '5. Media query (@media)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Media query (@media)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:01</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, '0i37IU0wjlI?si=222kwlWN4Zj2v9mc', '6. Khái niệm Breakpoints?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Khái niệm Breakpoints?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:24</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'aywAr27pkWE?si=-0AeHjba1fsyI8aQ', '7. Media queries: Px, rem hay em?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Media queries: Px, rem hay em?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:34</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Thực hành nhỏ</strong>
                                    <span class="lesson-count">2 bài học | 50:45</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>

                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '-NK4jLekauw?si=zl9asX5IKQgT-Ir7', '8. Học responsive qua thực hành')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Học responsive qua thực hành</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:33</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'HYy4c6lcOlM?si=FZWOYL2_gQpQfrYx', '9. Responsive navigation bar')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Responsive navigation bar</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 27:12</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. Grid System</strong>
                                    <span class="lesson-count">8 bài học | 01h 33m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>

                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'lvD5K50TZPk?si=nRhdlTOpMB9NaDso', '10. Hệ thống lưới (Grid system)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Hệ thống lưới (Grid system)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:55</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'iKlMB01w47g?si=uOT6kv95ZV0JNRKe', '11. Grid system - Phần 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Grid system - Phần 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:46</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'ScZaj1eG7DQ?si=9WpEK_-uLraEc2K_', '12. Tạo thư viện?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. Tạo thư viện?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:41</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'SZXvXXb_7aA?si=cD9xjZ5vpn_Mcpz6', '13. Tạo đối tượng Grid')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. Tạo đối tượng Grid</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:50</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, '9RHKgjuoIPQ?si=aWSqecsDX0kES71B', '14. Tạo đối tượng Row')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. Tạo đối tượng Row</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:06</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Ck-CnLU7HZI?si=TN_IvmASc6sSXoMS', '15. Tạo đối tượng Column')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. Tạo đối tượng Column</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:23</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'P4LW5HjrOQs?si=K1bhU8ljZ4Zmx_mb', '16. Column offset')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. Column offset</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:04</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'u06X297OuFc?si=Xx-STgrxoCOaUyi6', '17. No gutters')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. No gutters</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:31</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Áp dụng thực tế</strong>
                                    <span class="lesson-count">5 bài học | 43:24</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>

                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'xPwt0rBL-3k?si=I_-GHImTFQMl5YSt', '18. Giới thiệu chương')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Giới thiệu chương</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:31</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'lJworR_9WRk?si=4LuxMEpxI1z0oaP1', '19. Sử dụng với các website khác')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Sử dụng với các website khác</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:38</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, '03HYwqbHrF0?si=MzH-GVGlEOX1-Rxz', '20. Ví dụ dựng layout - Level 1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Ví dụ dựng layout - Level 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:39</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'WREPR84fV80?si=WYR_7cfBItscKMk_', '21. Ví dụ dựng layout - Level 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. Ví dụ dựng layout - Level 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:07</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'DZNA4oNtjOk?si=xDYGUUWOdidmZDVW', '22. Ví dụ dựng layout - Level 3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Ví dụ dựng layout - Level 3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:29</span>
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