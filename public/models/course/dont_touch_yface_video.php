<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Khóa học AI: Đừng Chạm Tay Lên Mặt</title>

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
                        <iframe src="https://www.youtube.com/embed/r6GWbQL-qwA?si=G94zsTHlXy1GcNtG"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title">1. Giới thiệu</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>13</strong> bài học</span> • <span><strong>02h 03m</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">

                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Giới thiệu</strong>
                                    <span class="lesson-count">2 bài học | 33:01</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">
                                <li class="lesson-item active" onclick="changeVideo(this, 'r6GWbQL-qwA?si=G94zsTHlXy1GcNtG', '1. Giới thiệu')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Giới thiệu</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:41</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'WIyfBMdtNTE?si=SizEmJd0cWbyS9tN', '2. Demo AI hoạt động')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Demo AI hoạt động</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:20</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Xây dựng</strong>
                                    <span class="lesson-count">6 bài học | 39:29</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'bqXyrCjT7V4?si=mYwb-OHM4jnl1E1i', '3. Install NodeJS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Install NodeJS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:11</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '3IWNmXKmRqo?si=z1evs0B0_bJq5dOj', '4. Create react app')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Create react app</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:07</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '3klHfl2fOb0?si=aGbMF6D11zZDVNE6', '5. Install dependencies')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Install dependencies</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:36</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'b5NEWtDwc_0?si=DsR4N2e4UzpwG0L2', '6. Build UI frame')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Build UI frame</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:42</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'jjZGa8foO0s?si=xPVgvEHTCmbyv0nb', '7. Import dependencies')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Import dependencies</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:25</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'uXvZyCnaZ7Y?si=O3jwgnD71uLd4rMg', '8. Setup camera')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Setup camera</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:28</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Training functions</strong>
                                    <span class="lesson-count">5 bài học | 50:29</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'KuDJjRU8XfY?si=JoccwDGiDY1Rc1vB', '9. Train function')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Train function</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'xjXoFX3X2yg?si=K21KJb-y_XY8TMLb', '10. Training function')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Training function</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'C4jm3RWSw10?si=F0d-Wt_QFb1id3y2', '11. Running function')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Running function</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:56</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'pwWS_VcR9Ks?si=62sawkE1fKzrPEvK', '12. Implement audio and notification')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. Implement audio and notification</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'D5Xd9FByKXc?si=cp5R3sszcUgpjOcX', '13. Training guide')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. Training guide</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:14</span>
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