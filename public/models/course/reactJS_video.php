<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học ReactJS</title>

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
                        <iframe src="https://www.youtube.com/embed/x0fSBAgBrOQ?si=N2_G-WwXFw"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen id="iframevd"></iframe>
                    </div>

                    <div class="video-info">
                        <h1 class="video-title" id="noi_dung_video">1. ReactJS là gì? Tại sao nên học ReactJS?</h1>
                        <p class="video-desc">Cập nhật tháng 12 năm 2025</p>
                    </div>
                </div>

                <div class="playlist-column">
                    <div class="curriculum-header">
                        <h3>Nội dung khóa học</h3>
                        <div class="course-stats">
                            <span><strong>84</strong> bài học</span> • <span><strong>27h 41m</strong></span>
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
                                <li class="lesson-item active" onclick="changeVideo(this, 'x0fSBAgBrOQ?si=N2_G-WwXFw', '1. ReactJS là gì? Tại sao nên học ReactJS?')">
                                    <div class="lesson-info">
                                        <i class="fa-solid fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">1. ReactJS là gì? Tại sao nên học ReactJS?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:41</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '30sMCciFIAM', '2. SPA/MPA là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">2. SPA/MPA là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:20</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">2. Ôn tập ES6+</strong>
                                    <span class="lesson-count">5 bài học | 55:59</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '9QeNLypIiZs', '3. Arrow function')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">3. Arrow function</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'WB6FQdp41hs', '4. Enhanced object literals')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">4. Enhanced object literals</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'J1m4vLDUhEI', '5. Destructuring, Rest')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">5. Destructuring, Rest</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:20</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'MJZICS7nQk8', '6. Spread operator')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">6. Spread operator</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:57</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '08lWi4T2Bfg', '7. JS modules')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">7. JS modules</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:50</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">3. React, ReactDOM</strong>
                                    <span class="lesson-count">6 bài học | 01h 00m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'Nno-r1Cz_-I', '8. document.createElement() để làm gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">8. document.createElement() để làm gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:02</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '5KfoXHWzcLw', '9. Lưu ý: React đã có phiên bản 18')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">9. Lưu ý: React đã có phiên bản 18</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:56</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'SdphnMywCbo', '10. Cách thêm React vào Website')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">10. Cách thêm React vào Website</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:51</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'JN_SxpAujDw', '11. React.createElement() nữa là sao?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">11. React.createElement() nữa là sao?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'zWOREJxiRVY', '12. ReactDOM là gì? Tại sao phải sử dụng?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">12. ReactDOM là gì? Tại sao phải sử dụng?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:09</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'AJ8j6_L94Bc', '13. Sử dụng ReactDOM phiên bản 18')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">13. Sử dụng ReactDOM phiên bản 18</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 07:03</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">4. JSX, Components, Props</strong>
                                    <span class="lesson-count">7 bài học | 02h 11m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'samx2yC15Pg', '14. JSX là gì? Tại sao cần JSX?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">14. JSX là gì? Tại sao cần JSX?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:59</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'i1cjVyIZCKs', '15. JSX render Arrays | JSX FQA')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">15. JSX render Arrays | JSX FQA</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:36</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'uGopxH14kYA', '16. React element types')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">16. React element types</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:13</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'xTvE2FuYiuXo', '17. Props là gì? Dùng props khi nào?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">17. Props là gì? Dùng props khi nào?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 25:42</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '7jQrn1KjcEw', '18. DOM events?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">18. DOM events?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '5SU6P-cqoJw', '19. Quy ước đặt tên components?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">19. Quy ước đặt tên components?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 26:07</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '1Bse4Lx5CP8', '20. Children props? Render props?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">20. Children props? Render props?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 22:05</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">5. Create React App</strong>
                                    <span class="lesson-count">7 bài học | 01h 47m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'ysjJlvQ3FFc', '21. NodeJS là gì? Tại sao phải sử dụng NodeJS?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">21. NodeJS là gì? Tại sao phải sử dụng NodeJS?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '', '22. Lưu ý: Sử dụng React & React-DOM 17')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">22. Lưu ý: Sử dụng React & React-DOM 17</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 02:13</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '61EBe-l1E3pM', '23. Tạo dự án với React + Webpack')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">23. Tạo dự án với React + Webpack</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 31:15</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'okMA31wi-yg', '24. Nâng cấp React & ReactDOM lên 18')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">24. Nâng cấp React & ReactDOM lên 18</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:19</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'gA3rFa6uu14', '25. Tạo dự án với create-react-app')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">25. Tạo dự án với create-react-app</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:13</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '7sX_8lKURqo', '26. NPM, NPX và YARN là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">26. NPM, NPX và YARN là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 31:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '-Ka_3RkQAvk', '27. CRA Folder Structure')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">27. CRA Folder Structure</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:37</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">6. Hooks</strong>
                                    <span class="lesson-count">22 bài học | 05h 55m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '5ismRwx4ebM', '28. Hooks là gì?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">28. Hooks là gì?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'rIaFc5MLCcs', '29. useState hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">29. useState hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 19:51</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'CVaEWBFpxhc', '30. Two-way binding trong React?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">30. Two-way binding trong React?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 28:07</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'bpVFSiNsFHY', '31. Todolist with useState')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">31. Todolist with useState</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:08</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ELMyJQNxy50', '32. Mounted & Unmounted?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">32. Mounted & Unmounted?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'hjIxfXKmkjk', '33. useEffect hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">33. useEffect hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 24:50</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'OOt2VRa1Oeg', '34. useEffect with dependencies')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">34. useEffect with dependencies</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:03</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'xZcWHaGsKUQ', '35. useEffect with DOM events')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">35. useEffect with DOM events</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:39</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'zGNOhVjrWFw', '36. useEffect with timer functions')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">36. useEffect with timer functions</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 09:03</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'Fnb3GbY9FUY', '37. useEffect with preview avatar')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">37. useEffect with preview avatar</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:31</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'eFrgfL3O_UQ', '38. useEffect with fake Chat App')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">38. useEffect with fake Chat App</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:46</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'loSqbCbH2xo', '39. useLayoutEffect hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">39. useLayoutEffect hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:45</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'qr1dQqRJRNo', '40. useRef hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">40. useRef hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 17:35</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'pPoKG_l3UFQ', '41. React.memo HOC')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">41. React.memo HOC</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:00</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '_aiLvBnYwnA', '42. useCallback hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">42. useCallback hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:12</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'TGaxZyZzB7E', '43. useMemo hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">43. useMemo hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 11:06</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'yn-8PVKBBn0', '44. useReducer hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">44. useReducer hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'p54lj4vM_LA', '45. Todo App with useReducer hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">45. Todo App with useReducer hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 21:35</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'vzbW1TMXlZo', '46. useReducer recap')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">46. useReducer recap</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:18</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'TENin-HxvRg', '47. useContext hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">47. useContext hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 18:52</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'GE4jeED9B1s', '48. Context + useReducer')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">48. Context + useReducer</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 28:54</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'dSzf0nv6QmM', '49. useImperativeHandle hook')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">49. useImperativeHandle hook</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 16:45</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">7. CSS, SCSS & Modules</strong>
                                    <span class="lesson-count">4 bài học | 44:43</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 's-vzXxTG9pQ', '50. Sử dụng CSS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">50. Sử dụng CSS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:17</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'U6pZ5uf2oLM', '51. CSS module')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">51. CSS module</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:51</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'T1NogjaceIo', '52. Thư viện clsx và classnames')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">52. Thư viện clsx và classnames</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:12</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'UIHO6QXj0ms', '53. Install SASS để dùng SCSS?')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">53. Install SASS để dùng SCSS?</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 05:23</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">8. React Router V6</strong>
                                    <span class="lesson-count">1 bài học | 15:07</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, '5jYlY4y5Dfs', '54. Cài đặt và tạo router')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">54. Cài đặt và tạo router</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:07</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">9. Dựng base dự án Tiktok</strong>
                                    <span class="lesson-count">7 bài học | 01h 40m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'VCgk2y-LUJY', '55. Giới thiệu dự án Tiktok')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">55. Giới thiệu dự án Tiktok</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 04:07</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'v8fnbIqFwgM', '56. Tạo dự án và đẩy lên Github')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">56. Tạo dự án và đẩy lên Github</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:22</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'R4HQI7B4qbw', '57. Cài đặt customize-cra')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">57. Cài đặt customize-cra</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 06:43</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'wwGkGi1WFgg', '58. Cài đặt babel-plugin-module-resolver')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">58. Cài đặt babel-plugin-module-resolver</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 19:29</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '1s8iJZltSlo', '59. Cài đặt và cấu hình Prettier')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">59. Cài đặt và cấu hình Prettier</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 08:18</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'N8PmDt4dcG8', '60. Cấu hình sử dụng CSS/SASS')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">60. Cấu hình sử dụng CSS/SASS</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 13:59</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'FwTQ0yoF0_g', '61. Cấu hình Router/Layout cho dự án')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">61. Cấu hình Router/Layout cho dự án</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 37:15</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">10. Xây dựng phần Header</strong>
                                    <span class="lesson-count">19 bài học | 10h 19m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'VkMAlrn3-Ww', '62. Dựng khung Layout mặc định')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">62. Dựng khung Layout mặc định</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 23:02</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'hFK4okw-XYs', '63. Xây dựng UI phần Header #1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">63. Xây dựng UI phần Header #1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 58:52</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '6lB3HhjEr7E', '64. Xây dựng UI phần Header #2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">64. Xây dựng UI phần Header #2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 44:09</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'LPGQoWG7pno', '65. Xây dựng UI phần Header #3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">65. Xây dựng UI phần Header #3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 55:12</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'oOYwdi2f_Qo', '66. Xây dựng UI phần Header #4')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">66. Xây dựng UI phần Header #4</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 42:27</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'WL4dL3R6Pac', '67. Xây dựng UI phần Header #5')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">67. Xây dựng UI phần Header #5</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 35:37</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'VRpsvMwtdws', '68. Xây dựng UI phần Header #6')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">68. Xây dựng UI phần Header #6</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 38:25</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'iyJ7b4_AdjQ', '69. Xây dựng UI phần Header #7')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">69. Xây dựng UI phần Header #7</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 34:24</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'cgLkdc6Y8Zk', '70. Xây dựng Logic phần Header #1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">70. Xây dựng Logic phần Header #1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 30:38</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '8b_H4onKXWc', '71. Xây dựng Logic phần Header #2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">71. Xây dựng Logic phần Header #2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 38:06</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'ZoFl6gxRv6g', '72. Xây dựng Logic phần Header #3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">72. Xây dựng Logic phần Header #3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 15:01</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '_zeOSnVHI2I', '73. Tìm hiểu và sử dụng thư viện Axios')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">73. Tìm hiểu và sử dụng thư viện Axios</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 36:28</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'cZbm5P7V-iM', '74. Sửa lỗi và hoàn thiện phần Header #1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">74. Sửa lỗi và hoàn thiện phần Header #1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 26:53</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '3dit5NJVxMU', '75. Sửa lỗi và hoàn thiện phần Header #2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">75. Sửa lỗi và hoàn thiện phần Header #2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 35:56</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '9KIub8JNcXg', '76. Tái cấu trúc và tối ưu code #1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">76. Tái cấu trúc và tối ưu code #1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 28:59</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '_azdqV1MoXE', '77. Tìm hiểu thư viện PropTypes')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">77. Tìm hiểu thư viện PropTypes</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 14:58</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'UbhnlxLWXZU', '78. Áp dụng PropTypes vào dự án')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">78. Áp dụng PropTypes vào dự án</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 21:09</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'J-6vcwggqGQ', '79. Giải quyết vấn đề nhiều file index.js')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">79. Giải quyết vấn đề nhiều file index.js</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 12:40</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'J-6vcwggqGQ', '80. Tối ưu Header phần cuối')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">80. Tối ưu Header phần cuối</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 26:09</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">11. Xây dựng phần Sidebar</strong>
                                    <span class="lesson-count">3 bài học | 02h 07m</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'J-6vcwggqGQ', '81. Xây dựng UI phần sidebar #1')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">81. Xây dựng UI phần sidebar #1</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 48:36</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, '-5jFoaGqcF8', '82. Xây dựng UI phần sidebar #2')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">82. Xây dựng UI phần sidebar #2</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 36:21</span>
                                        </div>
                                    </div>
                                </li>
                                <li class="lesson-item" onclick="changeVideo(this, 'SYAwVG6Ujco', '83. Xây dựng UI phần sidebar #3')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">83. Xây dựng UI phần sidebar #3</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 42:12</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="accordion-item">
                            <div class="list_title" onclick="toggleDropdown(this)">
                                <div class="title-text">
                                    <strong class="chapter-name">12. Deploy dự án Tiktok</strong>
                                    <span class="lesson-count">1 bài học | 10:41</span>
                                </div>
                                <i class="fa-solid fa-chevron-up icon-toggle"></i>
                            </div>
                            <ul class="dropdown">
                                <li class="lesson-item" onclick="changeVideo(this, 'G_b-Q_b-gXo', '84. Deploy dự án lên Vercel')">
                                    <div class="lesson-info">
                                        <i class="fa-regular fa-circle-play status-icon"></i>
                                        <div class="lesson-text">
                                            <span class="lesson-name">84. Deploy dự án lên Vercel</span>
                                            <span class="lesson-time"><i class="fa-regular fa-clock"></i> 10:41</span>
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