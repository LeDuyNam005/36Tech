<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học Javascript</title>

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
                        <iframe src="https://www.youtube.com/embed/-jV06pqjUUc?si=AyFK7j8GItFb0YaX"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen id="iframevd"></iframe>
                    </div>

                    <div class="video-info">
                        <h1 class="video-title" id="noi_dung_video">1. Lời khuyên trước khóa học</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>112</strong> bài học</span> • <span><strong>23h 54m</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">

                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Giới thiệu</strong>
                                    <span class="lesson-count">2 bài học | 06:28</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">
                                <li class="lesson-item active"
                                    onclick="changeVideo(this, '-jV06pqjUUc?si=AyFK7j8GItFb0YaX', '1. Lời khuyên trước khóa học')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Lời khuyên trước khóa học</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'efI98nT8Ffo?si=9H_iRudfCtPklz6k', '2. Cài đặt môi trường')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Cài đặt môi trường</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:08</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Biến, comments, built-in</strong>
                                    <span class="lesson-count">4 bài học | 22:02</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'W0vEUmyvthQ?si=4YJZ_SWrxvInXJAF', '3. Sử dụng JavaScript với HTML')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Sử dụng JavaScript với HTML</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:33</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'CLbx37dqYEI?si=6l3Mw7a2QZNvHfbI', '4. Khái niệm biến và cách sử dụng')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Khái niệm biến và cách sử dụng</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:06</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'xRpXBEq6TOY?si=QnTk_a1E8gd4Eex4', '5. Cú pháp comments là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Cú pháp comments là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:36</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'rSV33HGotgE?si=-AnbhsRGbX78hmpf', '6. Thuật ngữ Built-in là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Thuật ngữ Built-in là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:47</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Toán tử, kiểu dữ liệu</strong>
                                    <span class="lesson-count">12 bài học | 01h 30m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'SZb-N7TfPlw?si=bhZaznsUsHJTDtJx', '7. Làm quen với toán tử')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Làm quen với toán tử</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:24</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'm_h7-dgKnMU?si=FQtq5-gOrtfpCTRv', '8. Toán tử số học')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Toán tử số học</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:34</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ncRmjazgsE8?si=hzB61ZaVlXrPk5HN', '9. Toán tử gán')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Toán tử gán</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:25</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'aM-DUx6Qnc8?si=tu91RZeSkaGdnmQu', '10. Nguyên lý hoạt động của ++ / --')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Nguyên lý hoạt động của ++ / --</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'QCLVU6cZU_E?si=pVMtZB-qMEntALdt', '11. Toán tử nối chuỗi')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Toán tử nối chuỗi</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:09</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'rWM2lXtS-d8?si=QQjNfJDx9X-P1ilr', '12. Toán tử so sánh')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. Toán tử so sánh</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:26</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '9cZEG1SSSQc?si=0SBeIFpFrHik7NMd', '13. Kiểu dữ liệu Boolean')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. Kiểu dữ liệu Boolean</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '9MpHrdWBdxg?si=0Wg5xM629G0s7k0a', '14. Câu lệnh điều kiện If')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. Câu lệnh điều kiện If</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:29</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'O_-SQ-aVR3E?si=01GiKSnYIgtbM5oy', '15. Toán tử logical')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. Toán tử logical</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:36</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'P-fMQ3elxSE?si=jzhCvTB3TDKoagNb', '16. Kiểu dữ liệu')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. Kiểu dữ liệu</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 21:00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'meCXeMeyFdE?si=hcPaV2yUQCCIDHHr ', '17. Toán tử so sánh II')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Toán tử so sánh II</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:07</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'j1PbSq5kJKY?si=w6KTiuegfybceqie', '18. Toán tử logical và câu lệnh điều kiện If')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Toán tử logical và câu lệnh điều kiện If</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:13</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. Làm việc với hàm</strong>
                                    <span class="lesson-count">5 bài học | 41:21</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '4g9ENVc2KLA?si=CfkmtymmPqp0JJ_1', '19. Khái niệm hàm (function)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Khái niệm hàm (function)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:10</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'jE6UPl17Nvo?si=raoj_mME6pyS-TGu', '20. Tham số trong hàm')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Tham số trong hàm</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:14</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'OOoeAIrn69M?si=-kkyXR1SwgJU1YbB', '21. Từ khóa return trong hàm')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. Từ khóa return trong hàm</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:10</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'aTQojRq0N4c?si=hRsLBxQVSetXFfVB', '22. Hiểu hơn về hàm')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Hiểu hơn về hàm</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:44</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'scwab9DMNtM?si=qHX_sTe8-tKnDy-a', '23. Các loại hàm')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Các loại hàm</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:03</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Làm việc với chuỗi</strong>
                                    <span class="lesson-count">2 bài học | 29:29</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '6F_dajRCC9Q?si=xNwfrHTgxzuGnhAm', '24. Kiểu dữ liệu chuỗi (string)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Kiểu dữ liệu chuỗi (string)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:49</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'b4YivuRmcEw?si=Fxmr7pYCj2g6IYut', '25. Làm việc với chuỗi')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">25. Làm việc với chuỗi</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:40</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">6. Làm việc với số</strong>
                                    <span class="lesson-count">1 bài học | 10:18</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'arb35t44v0?si=aNvJidAlZhv9yyMT', '26. Số và làm việc với số')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">26. Số và làm việc với số</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:18</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">7. Làm việc với mảng</strong>
                                    <span class="lesson-count">2 bài học | 28:11</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'YzO65uOJNMg?si=D_CmyXKQ2VNtlX4X', '27. Mảng (array)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">27. Mảng (array)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:08</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'KrYacXScNQk?si=8bXrmSgif7C5fHtB', '28. Làm việc với mảng')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">28. Làm việc với mảng</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:03</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">8. Làm việc với object</strong>
                                    <span class="lesson-count">5 bài học | 47:32</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'orIXdOPFWeM?si=y4rx4IUDI2lIDVfl', '29. Object là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">29. Object là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:38</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'FO1OMbT_k2w?si=ynmee_rkpJKT0HPn', '30. Object constructor')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">30. Object constructor</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Wi-khBYt658?si=NxCl1Tocd2_NXBgj', '31. Object prototype')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">31. Object prototype</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:41</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'cufyZUUIXjw?si=c2U0f68HS0e24my7', '32. Đối tượng Date')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">32. Đối tượng Date</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:50</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'WGsNbFwt0H4?si=xyFxvYZF7VV_YW39', '33. Math object')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">33. Math object</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:44</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">9. Lệnh rẽ nhánh, toán tử 3 ngôi</strong>
                                    <span class="lesson-count">3 bài học | 19:33</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'X9OA4308oIY?si=24AOY1qx110sRD69', '34. Lệnh rẽ nhánh If else')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">34. Lệnh rẽ nhánh If else</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:48</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '24lIiJ4xVQE?si=uGnWc94fok-iOZv2', '35. Lệnh rẽ nhánh Switch')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">35. Lệnh rẽ nhánh Switch</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:25</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'L9pPv8pp71s?si=U0m2yqicutIuCVoD', '36. Toán tử 3 ngôi (Ternary operator)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">36. Toán tử 3 ngôi (Ternary operator)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:20</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">10. Vòng lặp</strong>
                                    <span class="lesson-count">12 bài học | 01h 12m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '1zeMUJeBkeA?si=QUDmUWxNuXoiE0O1', '37. Giới thiệu vòng lặp')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">37. Giới thiệu vòng lặp</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:29</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'tzaq2ay3Q0w?si=Op_kRRuIKkgg2G17', '38. Vòng lặp For')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">38. Vòng lặp For</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'L0a9ZgIEjW8?si=usv8jRpMo1ZAQgmK', '39. Vòng lặp For - Phần 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">39. Vòng lặp For - Phần 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:42</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'LAlvupZV5iU?si=xPyvLuoXsop_exJt', '40. Vòng lặp For - Phần 3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">40. Vòng lặp For - Phần 3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:21</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'stbbeMsgldc?si=kEXEASlHY85WmvUu', '41. Vòng lặp for...in')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">41. Vòng lặp for...in</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:11</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'qhShGK5Y10U?si=L5npaRFCgAr87JPt', '42. Vòng lặp for...of')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">42. Vòng lặp for...of</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'rdH9Dm7IVxU?si=nTA566JA4AKYppPG', '43. Vòng lặp While')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">43. Vòng lặp While</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:59</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Or48jZzowUk?si=QCGbM-P1QbZ6D7-j', '44. Vòng lặp do...while')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">44. Vòng lặp do...while</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:48</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'zSHt_S7W2a8?si=zmKGySS3nMGTNamS', '45. Break và Continue trong vòng lặp')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">45. Break và Continue trong vòng lặp</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:48</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'hRaSotOvTjY?si=enzj6qaJG8DFGHc2', '46. Vòng lặp lồng nhau (Nested loop)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">46. Vòng lặp lồng nhau (Nested loop)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:49</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'MY-eJLzbSZc?si=QKMvfbi_CkifLq4X', '47. Thêm ví dụ về vòng lặp')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">47. Thêm ví dụ về vòng lặp</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ZwbBiGf35V4?si=lIvced06TpkLBJt_', '48. Đệ quy là gì? Học về đệ quy!')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">48. Đệ quy là gì? Học về đệ quy!</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 27:03</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">11. Làm việc với mảng II</strong>
                                    <span class="lesson-count">6 bài học | 01h 27m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'AT-yhX26_Ao?si=OaqK1aMm2WEHFy0A', '49. Làm việc với mảng - Phần 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">49. Làm việc với mảng - Phần 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:34</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '-xZkVmkDwbU?si=UOtWL2kyslOAhA6X', '50. Array map() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">50. Array map() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:06</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '-JMh3A556cw?si=9oUugMYMVA-9sAIA', '51. Array reduce() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">51. Array reduce() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:42</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'gLIXXBIySZ8?si=V1TWYHcMQD0lge9b', '52. Ví dụ: Array reduce() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">52. Ví dụ: Array reduce() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 17:46</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'gLIXXBIySZ8?si=d8zx3jibuyOiNELr', '53. Phương thức reduce có logic như thế nào?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">53. Phương thức reduce có logic như thế nào?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'PozYw4lVgl0?si=xcwB7Kk6sEvs6FAS', '54. String/Array includes() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">54. String/Array includes() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:51</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">12. Callback</strong>
                                    <span class="lesson-count">7 bài học | 01h 00m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'W8vJ-yOtSbE?si=hNuZ5dhjY3T28qjt', '55. Callback?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">55. Callback?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:11</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'LUt36WnREm0?si=YsZ828sBmhljhScZ', '56. Callback - Phần 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">56. Callback - Phần 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:18</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'sQBlrbbqEak?si=Aq3iyNkbtwbxSJPI', '57. Empty elements of array?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">57. Empty elements of array?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:46</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'zfEBuHWif4Q?si=o-ZDJ5PGByURnHFZ', '58. My forEach() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">58. My forEach() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'eRM7ekb1iQU?si=tiewaRIoKCd4iQpP', '59. My filter() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">59. My filter() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:43</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'kUObhKJ-RoU?si=KtJUu97z1qCj5rnI', '60. My some() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">60. My some() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'mmxZ6buXHN4?si=FPTA8RuJ4vlQgcMb', '61. My every() method')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">61. My every() method</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:57</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">13. HTML DOM</strong>
                                    <span class="lesson-count">17 bài học | 04h 23m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'TsTr-tKCREc?si=4GriejXRtWNSDzh-', '62. HTML DOM là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">62. HTML DOM là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:17</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '82KhrbZ7LvA?si=11_yrCjovcrJUEJ3', '63. HTML DOM vs DOM API')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">63. HTML DOM vs DOM API</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ZS2v9B9DRm8?si=XKSzMgDCrkpre2Ob', '64. Document object')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">64. Document object</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:59</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'gETNXKi3l_U?si=_-BnkYmSXMj9QTSI', '65. Get element methods')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">65. Get element methods</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 25:09</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'OQkUwdVvul8?si=PwPtB9jgbBz5Tpme', '66. Get element methods - 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">66. Get element methods - 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:03</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '-4u0Gg1YFQw?si=aMsI7VjYBM_ZyxTm', '67. Get element methods - 3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">67. Get element methods - 3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:17</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '8S1L12Ttu-U?si=8g-dfx_fV50Gk8LS', '68. Attribute node & Text node')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">68. Attribute node & Text node</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:03</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ViPTAlLPnV4?si=Oic68QYEyy1FQUqQ', '69. DOM attribute')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">69. DOM attribute</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:11</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'xwcQl75iSNc?si=_b_JCNsWyo6sa9x3', '70. InnerText vs textContent Property')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">70. InnerText vs textContent Property</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'SXW4QSjk4Js?si=ixQvfpjX-N25oQuN', '71. InnerHTML vs OuterHTML Property')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">71. InnerHTML vs OuterHTML Property</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:04</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'YWTO5hO7d8A?si=qwu97C5Ey958zRYh', '72. Node properties')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">72. Node properties</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 30:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '79gnz1TttHw?si=0F5Jd7SdFCWF_I5Q', '73. DOM CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">73. DOM CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:41</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'xr2d_1h4U0Y?si=0tNouC-_i0IwvSAe', '74. ClassList Property')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">74. ClassList Property</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'AA3WWZAMv_0?si=O5TG49IdDEu9Ii_B', '75. DOM events')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">75. DOM events</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 26:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Ze4b9x7zgas?si=my3XM04EqgUEEufz', '76. DOM events example')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">76. DOM events example</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:14</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '4ZnQur6rewg?si=Zs8I_i6qkk_q4fmW', '77. PreventDefault and StopPropagation')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">77. PreventDefault and StopPropagation</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 19:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'U624VLOxiTo?si=hSgKQFf6PC7kGd4x', '78. Event listener')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">78. Event listener</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:53</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">14. JSON, Fetch, Postman</strong>
                                    <span class="lesson-count">11 bài học | 02h 48m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'Uph14HYkgEQ?si=J7nqyvm7mT4YVGNM', '79. JSON là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">79. JSON là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 17:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'QJmNEqy0zV0?si=JFEjryKAcPRVmeTF', '80. Promise (sync, async)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">80. Promise (sync, async)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'bgSbjJIwrj0?si=hGmjwRqkVeBRJMeM', '81. Promise (pain)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">81. Promise (pain)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:47</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '_4F8ihblZFU?si=9a4COnEPa7y0mmzK', '82. Promise (concept)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">82. Promise (concept)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:03</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Ldl571DAlXI?si=9QMzbJDr5_TCDU_5', '83. Promise (chain)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">83. Promise (chain)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:49</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'pxyxbaq8i8c?si=N7y9v33iVWAxtAwF', '84. Promise methods (resolve, reject, all)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">84. Promise methods (resolve, reject, all)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'XN2mt1i1kjk?si=vU6yO7_-dpLOa6Kw', '85. Promise example')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">85. Promise example</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> </span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '8KkM6JFjJZA?si=3JvrEVFxzXxbntja', '86. Fetch')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">86. Fetch</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '5UJGRHNZc9M?si=M6zZv1VTd9Dv0dhw', '87. JSON server')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">87. JSON server</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'CvX_5uyUXSs?si=GUaX6sNauATkk4y8', '88. Sử dụng Postman làm việc với REST API')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">88. Sử dụng Postman làm việc với REST API</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 17:48</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'TRjVXmk8q8I?si=Cf8EiVDqnGSwSja7', '89. Thêm/sửa/xóa khóa học với Fetch và REST API')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">89. Thêm/sửa/xóa khóa học với Fetch và REST API</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 32:02</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">15. ECMAScript 6+</strong>
                                    <span class="lesson-count">12 bài học | 01h 50m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'MFDXxCNqjKQ?si=NJfpEIlopWO_I6hU', '90. ECMAScript 6 là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">90. ECMAScript 6 là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'tCPTBPua1Xo?si=VlEU_sa-nHqx8UNI', '91. Let & Const')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">91. Let & Const</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:29</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '7Ls-fa8iVXA?si=DI0IVeF4Pk9x9Gb6', '92. Template literals')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">92. Template literals</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:22</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '9QeNLypIiZs?si=2Yk1C5pCXDo9nBDr', '93. Arrow function')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">93. Arrow function</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'jSvViDjWXaE?si=tWLDtRjxs30sS0lG', '94. Classes')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">94. Classes</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:13</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '451KRGBBRJY?si=ed0xMiAk23OdZC-p', '95. Default parameter values')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">95. Default parameter values</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'WB6FQdp41hs?si=VQJHXmnHB5XaJf-W', '96. Enhanced object literals')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">96. Enhanced object literals</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'J1m4vLDUhEI?si=yK9JmvRiEZLI039', '97. Destructuring, Rest')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">97. Destructuring, Rest</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'MJZICS7nQk8?si=RLGN-vcoq5BavD-7', '98. Spread')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">98. Spread</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'XV0d0A37sd8?si=9krFXylEc0Oox-6Z', '99. Tagged template literals')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">99. Tagged template literals</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:30</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '08lWi4T2Bfg?si=jBnadOxBzv15mkph', '100. Modules')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">100. Modules</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:50</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'kxX7kKjXXKs?si=BdOMKjAGn0JRWxKb', '101. Optional chaining (?.)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">101. Optional chaining (?.)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:49</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">16. Các bài thực hành</strong>
                                    <span class="lesson-count">3 bài học | 02h 41m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'oYC6wGu-sWo?si=uim1H-aEXbtqZjoG', '102. Xây dựng Tabs UI')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">102. Xây dựng Tabs UI</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'vAecGPWxzFE?si=xXYfNN8TXiAZfCXf', '103. Code Music Player')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">103. Code Music Player</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:51:41</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '7c7ABhaQJGM?si=EvDeUh4Siemp5zo', '104. Cách làm Toast Message')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">104. Cách làm Toast Message</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 35:49</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">17. Form validation I</strong>
                                    <span class="lesson-count">5 bài học | 02h 14m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'ZdvRm1bfGAk?si=kBY5fms5pcQAShU3', '105. Xử lý báo lỗi cơ bản')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">105. Xử lý báo lỗi cơ bản</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 41:18</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'scybnB9vYVQ?si=95F7l2JFmmF1pwCP', '106. Thêm rules, xử lý submit form')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">106. Thêm rules, xử lý submit form</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 40:11</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'LpgoBaULw30?si=kxK3UvX--SqhQHl7', '107. Review, sửa một số lỗi')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">107. Review, sửa một số lỗi</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 24:24</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'jRnBvlMUvK0?si=JG5c0B6_EwDI9-sK', '108. Xử lý lấy dữ liệu radio, checkbox')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">108. Xử lý lấy dữ liệu radio, checkbox</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 25:10</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'wMH2bHlpWco?si=joeyF-L2fFW3-pCM', '109. Thành quả chúng ta đạt được')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">109. Thành quả chúng ta đạt được</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 03:02</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">18. Form validation II</strong>
                                    <span class="lesson-count">2 bài học | 01h 10m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'jhvEPY8cEu0?si=nUrZ3Cyx8iEr4e9w', '110. Phân tích cách triển khai logic')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">110. Phân tích cách triển khai logic</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 01:01:27</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'V88PFJNlE-I?si=pBAVprMPJY68N_TF', '111. Sửa lỗi, xử lý submit form')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">111. Sửa lỗi, xử lý submit form</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:25</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">19. Tham khảo thêm</strong>
                                    <span class="lesson-count">1 bài học | 07:21</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'zFO-sSfReFs?si=weqGt-2zGO2oagYZ', '112. Polyfill là gì? Khi nào cần sử dụng?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">112. Polyfill là gì? Khi nào cần sử dụng?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:21</span>
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