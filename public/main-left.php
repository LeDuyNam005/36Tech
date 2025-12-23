<?php
require_once __DIR__ . '/../app/auth/auth.php';
// Nhúng file config để lấy BASE_URL
require_once __DIR__ . '/config.php';
requireLogin();
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="main-left">
    <div class="main-left-btn">
        <button class="btn-home" onclick="window.location.href='<?php echo BASE_URL; ?>index.php'" style="cursor: pointer;">
            <a href="<?php echo BASE_URL; ?>index.php" style="text-decoration: none; color: inherit; pointer-events: none;">
                <i style="font-size: 20px;" class="fas fa-home"></i>
                <p style="font-weight: 500;margin-top: 6px;">Trang chủ</p>
            </a>
        </button>
    </div>

    <div class="main-left-btn">
        <button class="btn-road" onclick="window.location.href='<?php echo BASE_URL; ?>lotrinh.php'" style="cursor: pointer;">
            <a href="<?php echo BASE_URL; ?>lotrinh.php" style="text-decoration: none; color: inherit; pointer-events: none;">
                <i style="font-size: 20px;" class="fa-solid fa-road"></i>
                <p style="font-weight: 500;margin-top: 6px;">Lộ trình</p>
            </a>
        </button>
    </div>
</div>