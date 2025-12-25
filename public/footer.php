<!-- Footer -->
<?php
require_once __DIR__ . '/../app/auth/auth.php';
// Nhúng file config để lấy BASE_URL
require_once __DIR__ . '/config.php';
requireLogin();
?>

<link rel="stylesheet" href="<?php echo ASSETS; ?>css/index.css">
<footer class="footer">
    <div class="footer-inner">
        <div class="footer-col contact">
            <a href="<?php echo BASE_URL; ?>index.php" class="logo" aria-label="36Tech - Home">
                <img style="border-radius: 10px;" src="<?php echo BASE_URL; ?>assets/image/logo36Tech.png" alt="" width="50px" height="50px">
            </a>
            <p>Điện thoại: 09 6148 0702<br>
                Email: contact@36Tech.edu.vn<br>
                Địa chỉ: Số 18, phố Viên, Đức Thắng, Bắc Từ Liêm, Hà Nội</p>
            <img src="<?php echo ASSETS; ?>image/DCMA.png" alt="DMCA Protected" style="width:120px; margin-top:12px; display:block">
        </div>

        <div class="footer-col">
            <h4>VỀ 36Tech</h4>
            <ul>
                <li><a href="#">Giới thiệu</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="../app/auth/html/termofservices.html">Điều khoản</a></li>
                <li><a href="../app/auth/html/termofservices.html">Bảo mật</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>SẢN PHẨM</h4>
            <ul>
                <li><a href="index.php?page_layout=html_css">Khóa học CSS</a></li>
                <li><a href="index.php?page_layout=javaScript">Khóa học Javascript</a></li>
                <li><a href="index.php?page_layout=github">Khóa học ứng dụng Git và Github </a></li>
                <li><a href="index.php?page_layout=cpp_advance">Khóa học C++</a></li>
                <li><a href="index.php?page_layout=node_js">Khóa học NodeJS</a></li>
                <li><a href="index.php?page_layout=python">Khóa học Python cơ bản</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h4>CÔNG TY CỔ PHẦN CÔNG NGHỆ GIÁO DỤC 36TECH</h4>
            <ul>
                <li><strong>Mã số thuế:</strong> 0000000000</li>
                <li><strong>Ngày thành lập:</strong> 01/09/2025</li>
                <li><strong>Lĩnh vực hoạt động:</strong> Giáo dục, công nghệ - lập trình.</li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <span>© 2025 36Tech. Nền tảng học lập trình hàng đầu Việt Nam</span>
        <div class="social" style="display:flex; gap:12px">
            <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" aria-label="TikTok"><i class="fa-brands fa-tiktok"></i></a>
        </div>
    </div>
</footer>