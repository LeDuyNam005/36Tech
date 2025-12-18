<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết khóa học Lập trình C</title>

    <link rel="stylesheet" href="../../assets/css/index.css">

    <link rel="stylesheet" href="style_inside.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Poppins:wght@600;700&display=swap"
        rel="stylesheet">

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

                <div class="container_content_inside_card">
                    <div class="left_content_inside">
                        <div class="course-header">
                            <h1>Lập trình C cho người mới bắt đầu</h1>
                            <p class="course-desc">Khóa học cung cấp kiến thức nền tảng vững chắc, giúp bạn tư duy logic
                                và sẵn sàng cho con đường lập trình chuyên nghiệp.</p>
                        </div>

                        <div class="what-you-learn-box">
                            <h3><i class="fa-solid fa-check-double"></i> Bạn sẽ học được gì?</h3>
                            <div class="learn-grid">
                                <ul class="list_gt">
                                    <li>Hiểu rõ cú pháp và cách khai báo biến trong C.</li>
                                    <li>Thành thạo nhập xuất dữ liệu (stdio).</li>
                                    <li>Tư duy giải thuật với vòng lặp (for, while).</li>
                                </ul>
                                <ul class="list_gt">
                                    <li>Làm chủ cấu trúc dữ liệu mảng và chuỗi.</li>
                                    <li>Kỹ thuật viết hàm (Function) tối ưu code.</li>
                                    <li>Luyện tập tư duy qua các bài toán thực tế.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="curriculum-section">
                            <h3>Nội dung khóa học</h3>
                            <div class="course-stats">
                                <span><strong>22</strong> bài học</span>
                                <span>•</span>
                                <span><strong>11 giờ</strong> thời lượng</span>
                            </div>

                            <div class="list_dropdown">
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>1. Giới thiệu</strong>
                                        </div>
                                        <span class="lesson-count">3 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Giới thiệu về khóa học lập trình C - Lợi ích khi học lập trình C
                                            </span>
                                            <span class="time">4:12</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Cài đặt và cấu hình Dev-C++ để lập trình C và C++
                                            </span>
                                            <span class="time">18:37</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 3. Cấu hình dev C++ thuận tiện hơn khi lập trình - Sinh code mặc định khi tạo ra file code mới
                                            </span>
                                            <span class="time">5:51</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>2. Biến & Kiểu dữ liệu</strong>
                                        </div>
                                        <span class="lesson-count">3 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Làm quen với lập trình C và Dev-C++ qua một số ví dụ đơn giản</span>
                                            <span class="time">30:14</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Các thành phần cơ bản trong ngôn ngữ lập trình C</span>
                                            <span class="time">30:10</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 3. Một số bài tập tính toán số học đơn giản để làm quen với ngôn ngữ lập trình C</span>
                                            <span class="time">33:31</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>3. Nhập xuất</strong>
                                        </div>
                                        <span class="lesson-count">2 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Hàm nhập xuất trong ngôn ngữ lập trình C</span>
                                            <span class="time">40:14</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Chữa một số bài tập về nhập xuất cơ bản trong ngôn ngữ lập trình C</span>
                                            <span class="time">39:12</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>4. Cấu trúc rẽ nhánh</strong>
                                        </div>
                                        <span class="lesson-count">4 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Cấu trúc rẽ nhánh IF trong lập trình C - phần 1</span>
                                            <span class="time">29:07</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Cấu trúc rẽ nhánh IF trong lập trình C - phần 2</span>
                                            <span class="time">16:53</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 3. Cấu trúc rẽ nhánh IF trong lập trình C - phần 3</span>
                                            <span class="time">27:56</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 4. Cấu trúc rẽ nhánh switch... case trong lập trình C</span>
                                            <span class="time">39:57</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>5. Vòng lặp</strong>
                                        </div>
                                        <span class="lesson-count">2 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Sử dụng for lồng nhau trong ngôn ngữ lập trình C</span>
                                            <span class="time">13:19</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Cấu trúc lặp while và do ... while trong ngôn ngữ lập trình C</span>
                                            <span class="time">21:29</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>6. Hàm</strong>
                                        </div>
                                        <span class="lesson-count">2 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Xây dựng hàm (chương trình con) trong ngôn ngữ lập trình C</span>
                                            <span class="time">28:14</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Xây dựng hàm (chương trình con) trong ngôn ngữ lập trình C (Phần 2)</span>
                                            <span class="time">28:04</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>7. Mảng & Chuỗi</strong>
                                        </div>
                                        <span class="lesson-count">3 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Mảng và chuỗi trong ngôn ngữ lập trình C</span>
                                            <span class="time">34:10</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Mảng 2 chiều trong ngôn ngữ lập trình C</span>
                                            <span class="time">34:28</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 3. Chuỗi trong ngôn ngữ lập trình C</span>
                                            <span class="time">18:54</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>8. Con trỏ</strong>
                                        </div>
                                        <span class="lesson-count">3 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 1)</span>
                                            <span class="time">30:52</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 2)</span>
                                            <span class="time">31:57</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 3. Sử dụng con trỏ (biến con trỏ) trong ngôn ngữ lập trình C (phần 3)</span>
                                            <span class="time">34:25</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>9. Kiểu dữ liệu cấu trúc - Struct</strong>
                                        </div>
                                        <span class="lesson-count">2 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Kiểu dữ liệu tự định nghĩa struct trong C - học ngôn ngữ lập trình C (Phần 1)</span>
                                            <span class="time">23:57</span>
                                        </li>
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 2. Kiểu dữ liệu tự định nghĩa struct trong C - học ngôn ngữ lập trình C (Phần 2)</span>
                                            <span class="time">23:17</span>
                                        </li>

                                    </ul>
                                </div>
                                <div class="accordion-item">
                                    <div class="list_title" onclick="toggleDropdown(this)">
                                        <div class="title-text">
                                            <i class="fa-solid fa-plus icon-toggle"></i>
                                            <strong>10. Kiểu dữ liệu liệt kê - Enum</strong>
                                        </div>
                                        <span class="lesson-count">1 bài học</span>
                                    </div>
                                    <ul class="dropdown">
                                        <li>
                                            <span><i class="fa-regular fa-circle-play"></i> 1. Kiểu enum (kiểu liệt kê) trong C - học ngôn ngữ lập trình C</span>
                                            <span class="time">23:17</span>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="requirements-section">
                            <h3>Yêu cầu</h3>
                            <ul class="list_req">
                                <li><i class="fa-solid fa-circle-check"></i> Máy tính kết nối Internet.</li>
                                <li><i class="fa-solid fa-circle-check"></i> Không cần kiến thức lập trình trước.</li>
                                <li><i class="fa-solid fa-circle-check"></i> Tinh thần kiên trì và chịu khó thực hành.
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="right_content_wrapper">
                        <div class="course-card">
                            <div class="course-img-wrapper">
                                <img src="../img/lap_trinh_c.png" alt="Khóa học C">
                                <div class="play-overlay"><i class="fa-solid fa-play"></i></div>
                            </div>

                            <div class="card-body">
                                <div class="price-tag">Miễn phí</div>
                                <button class="btn_buy">Đăng ký học ngay</button>

                                <ul class="course-features">
                                    <li><i class="fa-solid fa-gauge-high"></i> Trình độ cơ bản</li>
                                    <li><i class="fa-solid fa-film"></i> Tổng số 22 bài học</li>
                                    <li><i class="fa-solid fa-clock"></i> Thời lượng 11h</li>
                                    <li><i class="fa-solid fa-battery-full"></i> Học mọi lúc, mọi nơi</li>
                                    <li><i class="fa-solid fa-certificate"></i> Cấp chứng chỉ khi hoàn thành</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php
        require __DIR__ . '/../../footer.php';
        ?>

    </div>

    <script src="dropdown.js"></script>
</body>

</html>