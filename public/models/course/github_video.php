<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học Git và GitHub</title>

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
                        <iframe src="https://www.youtube.com/embed/-BtolPy15fg?si=YRydpntDoKEG0Chs"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title">1. Giới thiệu GitHub</h1>
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
                                    <span class="lesson-count">2/2 | 33:01</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">

                                <li class="lesson-item active"
                                    onclick="changeVideo(this, '-BtolPy15fg?si=YRydpntDoKEG0Chs', '1. Giới thiệu về GitHub')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Giới thiệu về Git và GitHub</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:41</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Sử dụng Git</strong>
                                    <span class="lesson-count">0/5 | 45:00</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'CckAlmHUsKA?si=k0cZg84Hqo15MM38', '2. Tạo Project với GitHub')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Tạo Project với GitHub</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'pC1s6JOwglE?si=lC_hi3NwJ6iNSGYi', '3. Https và SSH - Tạo Key SSH cho Git')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Https và SSH - Tạo Key SSH cho Git</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'YnLoU_d53js?si=3wjXqIhm8JzS2IXh', '4. Các câu lệnh thường dùng')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Các câu lệnh thường dùng</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:00</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Ứng dụng trong làm việc nhóm</strong>
                                    <span class="lesson-count">0/5 | 45:00</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '-XsRLyKV9_k?si=soUF45dDqA2Pt9Pw', '5. Làm việc nhóm với GitHub')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Làm việc nhóm với GitHub</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'bfVU7FZaIrY?si=dh9ojQV-ngqUuOCT', '6. Resolve Conflict - Giải quyết xung đột')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Resolve Conflict - Giải quyết xung đột</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'QHcQIqLHCCM?si=ZigZVlTe4DmrrPFn', '7. Backup và khôi phục dữ liệu')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Backup và khôi phục dữ liệu</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '1GehwGsTC4M?si=SHrqsjPStVzgT-H9', '8. Mov to GitLab')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Mov to GitLab</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:30</span>
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