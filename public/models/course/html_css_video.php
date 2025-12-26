<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML CSS từ Zero đến Hero | Xem Video</title>

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
                        <iframe id="main-video" src="https://www.youtube.com/embed/R6plN3FvzFY?si=HqW2lwNsYdVDTCNi"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title" id="noi_dung_video">1. Bạn sẽ làm được gì sau khóa học?</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>43</strong> bài học</span> • <span><strong>05h 48m</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">

                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Bắt đầu</strong>
                                    <span class="lesson-count">5 bài học | 16:39</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">
                                <li class="lesson-item active"
                                    onclick="changeVideo(this, 'R6plN3FvzFY?si=HqW2lwNsYdVDTCNi', '1. Bạn sẽ làm được gì sau khóa học?')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Bạn sẽ làm được gì sau khóa học?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'zwsPND378OQ?si=GnbDInjoC65ZNq2V', '2. Tìm hiểu về HTML, CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Tìm hiểu về HTML, CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:29</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '7BJiPyN4zZ0?si=96b6XphJwyyB92pa', '3. Làm quen với Dev tools')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Làm quen với Dev tools</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:55</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'ZotVkQDC6mU?si=UoYCWRm9ZwiVpHGg', '4. Cài đặt VS Code, Page Ruler extension')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Cài đặt VS Code, Page Ruler extension</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Cu-NtBVeX4g?si=sjrZBJFTpPFmcjOi', '5. Khắc phục lỗi cài đặt Page Ruler Redux')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Khắc phục lỗi cài đặt Page Ruler Redux</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:03</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Làm quen với HTML</strong>
                                    <span class="lesson-count">5 bài học | 32:12</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'LYnrFSGLCl8?si=Wy1seTnZGcpOvfp5', '6. Cấu trúc của 1 file HTML')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Cấu trúc của 1 file HTML</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '-9_HT2Jo4IU?si=FGNvtES2GjMiAOLS', '7. Làm quen với màn thử thách')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Làm quen với màn thử thách</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'AzmdwZ6e_aM?si=QH5SwlZpzK20EZl4', '8. Các thẻ HTML thông dụng')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Các thẻ HTML thông dụng</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:08</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'UYpIh5pIkSA?si=Ex5U6m_S-FVYeTiu', '9. Attribute trong HTML là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Attribute trong HTML là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'TkPppGzB9ZA?si=o1K2HdD-_c4NQfmF', '10. Cách quản lý thư mục dự án')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Cách quản lý thư mục dự án</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:50</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Làm quen với CSS</strong>
                                    <span class="lesson-count">10 bài học | 01h 20m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'NsSsJTg29oE?si=jY_Nx800I0fZkX_9', '11. Sử dụng CSS trong HTML')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Sử dụng CSS trong HTML</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:13</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '4J6d8cr0X48?si=Ih3TrAYkiPv7EpmS', '12. ID và Class')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. ID và Class</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:18</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'hzn_VKpGdTg?si=MLdY8O4ntIRcFs-S', '13. CSS selectors cơ bản #1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. CSS selectors cơ bản #1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:09</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'AgZ0PX28bnA?si=kh51FEMkbcGL_stU', '14. Độ ưu tiên trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. Độ ưu tiên trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'x9fnxVTkpP4?si=46-2fLWNmQhYKy2R', '15. Sử dụng biến trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. Sử dụng biến trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:48</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'pcUiTt6eBk0?si=-J0__K-knFKtgnD8', '16. Các đơn vị trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. Các đơn vị trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:56</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'LZfoRgIYw2s?si=PGBp0VNHAZ0ew3JN', '17. Một số hàm trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Một số hàm trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:14</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'zEJiYc-SvWs?si=ibLAAtribkQ5FEkW', '18. Pseudo classes trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Pseudo classes trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:43</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'QuBLHCT7fuM?si=SGVd3j1VPt77b3fy', '19. Pseudo elements trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Pseudo elements trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'BpEyoVI3erw?si=fyK4ho4nponiLe68', '20. Thực hành sử dụng pseudo elements')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Thực hành sử dụng pseudo elements</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:19</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. Đệm, viền và khoảng lề (Box Model)</strong>
                                    <span class="lesson-count">4 bài học | 23:09</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'aj-lD4XXr8A?si=rhABTmaHPtTU1oBo', '21. Thuộc tính padding (đệm)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. Thuộc tính padding (đệm)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'VbzOimNAOxE?si=Vr4UfkD8RjuR1I1a', '22. Thuộc tính border (đường viền)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Thuộc tính border (đường viền)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:06</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '8X48l0CK5_4?si=rY10hL1NH9iTuIU-', '23. Thuộc tính margin (khoảng cách lề)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Thuộc tính margin (khoảng cách lề)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'bv16wjxgV4U?si=A_Sl58TrRJZIx5xl', '24. Thuộc tính box-sizing')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Thuộc tính box-sizing</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:12</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Thuộc tính tạo nền (Background)</strong>
                                    <span class="lesson-count">6 bài học | 40:23</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'OPz7Uz20XNQ?si=2CBTBTd-94iPFyiw', '25. Thuộc tính background-image')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">25. Thuộc tính background-image</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:47</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '8zsmGFNpqb4?si=lRmgJpJFr1w7FnuS', '26. Thuộc tính background-size với cover, contain')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">26. Thuộc tính background-size với cover,
                                                contain</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:17</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '32a_fYd5zIo?si=-Uv0AYu77Nu5IL-u', '27. Thuộc tính background-origin')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">27. Thuộc tính background-origin</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'R4q66obGDjs?si=KfZyS35-z2AtP3vS', '28. Thuộc tính background-position')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">28. Thuộc tính background-position</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '4hf8kMSRUJI?si=_RokrmILQ8P8pLlO', '29. Cú pháp shorthand cho background')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">29. Cú pháp "shorthand" cho background</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'JLGeykAYSMw?si=Ds6I7EMfoBNVAcoZ', '30. Tìm hiểu về các giá trị màu sắc trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">30. Tìm hiểu về các giá trị màu sắc trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:36</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">6. Thuộc tính vị trí (Position)</strong>
                                    <span class="lesson-count">4 bài học | 17:49</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'h1No10BHI5Y?si=GkeVU2x7fw1CNbIG', '31. CSS position relative')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">31. CSS position relative</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:04</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Y8tX8CzWsyA?si=XqjkWPNSLu2hrPOR', '32. CSS position absolute')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">32. CSS position absolute</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'jAm8wm77aTM?si=7YrOecdzz8MDy6VM', '33. CSS position fixed')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">33. CSS position fixed</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:29</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'y0WuNaMgwpc?si=V15Xy4sJ2Fb58xJf', '34. CSS position sticky')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">34. CSS position sticky</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:18</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">7. Dựng bố cục web với Flexbox</strong>
                                    <span class="lesson-count">4 bài học | 01h 02m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'bVUN6nS82k8?si=sfS1cvrrFaUoLVIA', '35. Giới thiệu Flexbox')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">35. Giới thiệu Flexbox</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'jX9KFgugpl4?si=RGEOTRv_VCxq7Osz', '36. Thuộc tính CSS trong Flexbox')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">36. Thuộc tính CSS trong Flexbox</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:26</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'G19jZzK5FWI?si=R3e49Xh0Zlq87TNE', '37. Học Flexbox qua ví dụ')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">37. Học Flexbox qua ví dụ</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 35:04</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Ma8q2RYH5qY?si=tx6BhznrI69RHSlu', '38. Để học Flexbox tốt hơn bạn nên xem video này')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">38. Để học Flexbox tốt hơn bạn nên xem video
                                                này</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:23</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">8. Một số tricks và tips</strong>
                                    <span class="lesson-count">3 bài học | 01h 02m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'I2-m_kWZp_Y?si=l_xjzZf7kZ0rKptK', '39. Các cách căn giữa trong CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">39. Các cách căn giữa trong CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'ycb6ZDgX224?si=gVZJJxeWozhTKBRX', '40. Hiển thị ảnh dự phòng khi ảnh chính lỗi')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">40. Hiển thị ảnh dự phòng khi ảnh chính lỗi</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:27</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Cgn82mchbgM?si=5BjPx_HCs8Yf3jWy', '41. Tối ưu perfomance hình ảnh với srcset')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">41. Tối ưu perfomance hình ảnh với srcset</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 38:46</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">9. Hoàn thành khóa học</strong>
                                    <span class="lesson-count">2 bài học | 13:00</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'GJV_UJKXS1Y?si=2QEyjvcKgLvFUr-k', '42. Ứng tuyển xin việc làm')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">42. Ứng tuyển xin việc làm</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Q3YJHNT3dVo?si=WxiNV9OxbQF3kwXi', '43. Hoàn thành khóa học')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">43. Hoàn thành khóa học</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:00</span>
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