<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học Lập trình python</title>

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
                        <iframe src="https://www.youtube.com/embed/NZj6LI5a9vc?si=GzEey85oDX_aYHwt"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                    <div class="video-info">
                        <h1 class="video-title">1. Giới thiệu ngôn ngữ Python</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>35</strong> bài học</span> • <span><strong>12h 33m</strong></span>
                        </div>
                    </div>

                    <div class="curriculum-list scroll-bar">

                        <div class="accordion-item">
                            <div class="list_title active-chapter" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">1. Giới thiệu</strong>
                                    <span class="lesson-count">4 bài học | 42:18</span>
                                </div>
                                <i class="fa-solid fa-chevron-down icon-toggle"></i>
                            </div>
                            <ul class="dropdown" style="display: block;">

                                <li class="lesson-item active"
                                    onclick="changeVideo(this, 'NZj6LI5a9vc?si=GzEey85oDX_aYHwt', '1. Giới thiệu ngôn ngữ Python')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. Giới thiệu ngôn ngữ Python</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:45</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'jf-q_dG8WzI?si=MxDnobB94Eyt2zra', '2. Cài đặt môi trường (IDE)')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. Cài đặt môi trường (IDE)</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 6:16</span>
                                        </div>
                                    </div>
                                </li>

                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'QFxqY8qv42E?si=ROuS4-l9ZMw3NW5b', '3. Chạy file python')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Chạy file python</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:23</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 't3dERE9T5yg?si=UAQXOVhdVcefPyf2', '4. Comment trong Python')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Comment trong Python</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 9:54</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Biến & Kiểu dữ liệu</strong>
                                    <span class="lesson-count">16 bài học | 07h 03m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'nclE18Yl-kA?si=poIgxUPuJxK6OSY_G', '5. Biến')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Biến</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:18</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'IAVvgqDBiv0?si=dZp6hCy9JftLL8Wl', '6. Kiểu số')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Kiểu số</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 38:35</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'Vb6XWSLPQfg?si=ud6tv2V1PT16q3vq', '7. Kiểu chuỗi part 1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. Kiểu chuỗi part 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 26:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'gzWriEOVjU0?si=ahvCiJrt4x8n81Lt', '8. Kiểu chuỗi part 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. Kiểu chuỗi part 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 29:36</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'LRUHnuHljPQ?si=DKiQoTtiol5kOTdb', '9. Kiểu chuỗi part 3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Kiểu chuỗi part 3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 40:32</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'q2TNJMBx6GE?si=SnR9bqcbDfcH6DhX', '10. Kiểu chuỗi part 4')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Kiểu chuỗi part 4</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 29:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'u2Kd3weqPZE?si=MTAIG7M305tGr8ov', '11. Kiểu chuỗi part 5')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. Kiểu chuỗi part 5</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:52</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'UzTE665WXb8?si=6h_0EwNJtFx-ODKH', '12. List part 1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. List part 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 43:16</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '9IH3EynbcpU?si=AMg3u3lq63JLVnC1', '13. List part 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. List part 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'dDFFCbRGm3o?si=3PGs9anuq14WpgZU', '14. tuple')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. tuple</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 20:32</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'gw9zbl2Q7r4?si=I-rvy2_0VmyhHLMl', '15. Hashtable')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. Hashtable</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 24:35</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'S-CWHkKiOBs?si=haZyn245NF-tnCnU', '16. Set')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. Set</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 31:35</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'zFDTmZjJFws?si=wZ5DgcFoOMCpF5la', '17. Dictionary part 1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Dictionary part 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 21:53</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'jmwBKuJl2Zg?si=X4Gl3HuFZr10luMf', '18. Dictionary part 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. Dictionary part 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:13</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'GSUwh958k_A?si=HF4v2z5uB01Y8IK3', '19. Iteration')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Iteration</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 20:56</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'iB9EhSZvfFk?si=00K1BFFlAG9qLnpY','20. Kiểu Boolean')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Kiểu Boolean</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 26:10</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. Hàm nhập - xuất </strong>
                                    <span class="lesson-count">3 bài học | 01h 02m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '6J8-jkoRBXw?si=lY30eUMA3F2Kybn9', '21. Xử lí file')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. Xử lí file</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:35</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'rhOyCSIf1is?si=Cfw1rrn2kRWh-Rl4', '22. Hàm xuất')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Hàm xuất</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:12</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'rK4MphZVhDM?si=4YkzEu_yEpy4Z3ru', '23. Hàm nhập')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Hàm nhập</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:41</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. Vòng lặp & Rẽ nhánh</strong>
                                    <span class="lesson-count">4 bài học | 01h 54m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '4_Jb1xZsDJ8?si=QSuM2aSG2_rdJP09', '24. Cấu trúc rẽ nhánh')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Cấu trúc rẽ nhánh</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'wq7Th3nXyCQ?si=6TZprdRr6QoQ3nfg', '25. While Loop')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">25. While Loop</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:36</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '9TxJ71NNO64?si=2sNdxzTSvkP-3Cde', '26. For Loop part 1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">26. For Loop part 1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 38:11</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'LwC0n2A6QRQ?si=qFLLRXH8EknQXgps', '27. For Loop part 2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">27. For Loop part 2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 34:27</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Function (Hàm) </strong>
                                    <span class="lesson-count">8 bài học | 01h 50m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'a6FnNvt3Fw4?si=mwRiQgFIQu74_EjS', '28. Sơ lược về hàm')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">28. Sơ lược về hàm</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:59</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'M77p3PB-qzM?si=W44wEwd0OpRpRwZX', '29. Positional')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">29. Positional</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:01</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '0Gf5MVTWuCY?si=pC7SSiR8fjSlvDmw', '30. Packing và Unpacking')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">30. Packing và Unpacking</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:10</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'w7qnt6iIakM?si=0Te7rwSHWa0l_yrw', '31. Globals và Locals')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">31. Globals và Locals</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:25</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '3bdMH8z50zE?si=6Du5OH43FVRkLG6e', '32. Return')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">32. Return</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:02</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'aChGfj5h3UQ?si=UCa2ixcwbeYnLK4A', '33. Yield')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">33. Yield</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:06</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, '7YTL1u5Ja5A?si=Trqurcecr5NZElVR', '34. Lambda')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">34. Lambda</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:16</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item"
                                    onclick="changeVideo(this, 'W5Xvw_2WPeg?si=3t2XDqPiPVXK_c3k', '35. Functional tools')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">35. Functional tools</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:59</span>
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