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
                        <iframe src="https://www.youtube.com/embed/MGhw6XliFgo?si=YbsTT5wmJElzm3xh"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title">Lập Trình JavaScript Nâng Cao</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>18</strong> bài học</span> • <span><strong>08:24:57</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">

                        <!-- CHƯƠNG 1 -->
                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. IIFE, Scope, Closure</strong>
                                    <span class="lesson-count">4 bài | 01:43:03</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>

                            <ul class="dropdown" style="display:block;">
                                <li class="lesson-item" onclick="changeVideo(this, 'MGhw6XliFgo?si=89bxRFgioI-_3hvm', '1. Giới thiệu')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Giới thiệu</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:48</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'N-3GU1F1UBY?si=MQOylM5T5aI6jhWz', '2. IIFE là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. IIFE là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:57</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, '5N8vz_VmszE?si=XAmAQHUDBmyPMr_A', '3. Scope là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Scope là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 36:27</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'xtQtGKL0NCI?si=xR-7kkxvYrKCMtaH', '4. Khái niệm Closure?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Khái niệm Closure?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 40:51</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- CHƯƠNG 2 -->
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Hoisting, Strict Mode, Data Types</strong>
                                    <span class="lesson-count">4 bài | 01:09:20</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>

                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '3MLhU1DrUxM?si=P31tLjJE1csHuE0J', '5. Hoisting là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Hoisting là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:58</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'w1W-j4cSPF0?si=YyB3FGlh-i6yqcy5', '6. Strict mode?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Strict mode?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:05</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'n4tS1Q5-EzY?si=ZYrmaOByOMS5MsaB', '7. Primitive & Reference Types')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Primitive Types & Reference Types</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 31:55</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'mt71kEv6A_4?si=Pj7KiWP11NhEhtp2', '8. Pass by value & reference')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Pass by value và Pass by reference</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:22</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- CHƯƠNG 3 -->
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. This, Bind, Call, Apply</strong>
                                    <span class="lesson-count">4 bài | 01:23:35 </span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>

                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'ii1Ra_zLDIo?si=YNZOgdWF0J9n9Qzz', '17. Từ khóa this?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Từ khóa “this”?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 25:01</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'F5z6YoR8of0?si=fu6aFsjii6OYGtOW', '18. Fn.bind() method - P1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Fn.bind() method - Phần 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:40</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, '6j9b2_E34JM?si=kyL4C05J_q8uJGXa', '19. Fn.bind() method - P2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Fn.bind() method - Phần 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:33</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'QxLTSdTJDXY?si=grLwP0GQAIL3aUUa', '20. Fn.call() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Fn.call() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 20:21</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- CHƯƠNG 4 -->
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. Các bài thực hành cần nhiều</strong>
                                    <span class="lesson-count">3 bài | 02:43:49</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>

                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'GQ-toR8F7rc?si=wNmrG5W3yXro7UMW', '22. Tìm hiểu về thư viện Redux')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Tìm hiểu về thư viện Redux</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 35:54</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'g7Lh-LpxElU?si=a5eQys8lMVtQpWeR', '23. Tự code thư viện build UI')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Tự code thư viện build UI</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 53:54</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'UajBbcr8sfc?si=YrQdV9OaeG8pd3l7', '24. Code ứng dụng Todo List')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Code ứng dụng Todo List</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:14:01</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <!-- CHƯƠNG 5 -->
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Vừa giải trí vừa học</strong>
                                    <span class="lesson-count">3 bài | 01:25:10</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>

                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'YFhyq-CMGtY?si=-CHbVgN4vPc28ZAu', '25. Giải thích các trường hợp phi lý trong JavaScript?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">25. Giải thích các trường hợp “phi lý” trong JavaScript?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:00</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'sgq7BH6WxL8?si=lJJVlZV24cOfiUbQ', '26. Code Thiếu Nhi Battle Tranh Giành Trà Sữa Size L')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">26. “Code Thiếu Nhi Battle” Tranh Giành Trà Sữa Size L</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 25:10</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item" onclick="changeVideo(this, 'utF5vj7Ljuo?si=fSlwyDz4vEuqiq1E', '27. Học Xong Javascript Có Giải Được Code Thiếu Nhi?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">27. “Học Xong” Javascript Có Giải Được “Code Thiếu Nhi”?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 38:00</span>
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