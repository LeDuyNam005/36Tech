<?php
require_once __DIR__ . '/../app/auth/auth.php';
// Nhúng file config để lấy BASE_URL
require_once __DIR__ . '/config.php';
requireLogin();
?>

<!DOCTYPE html>
<html lang="vi">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lộ trình - 36Tech</title>
  <link rel="stylesheet" href="<?php echo ASSETS; ?>css/index.css">
  <link rel="stylesheet" href="<?php echo ASSETS; ?>css/lotrinh.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
    integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <div class="page">
    <?php include 'header.php'; ?>

    <div class="backdrop" id="backdrop"></div>

    <main class="main">
      <?php include 'main-left.php'; ?>

      <div class="main-right">
        <div class="intro-section">
          <h1>Lộ trình Phát triển <span class="highlight">Full-Stack</span></h1>
          <p>Các kiến thức cần có để trở thành lập trình viên chuyên nghiệp.</p>
          <img src="./assets/image/roadmap.png" alt="Roadmap" class="roadmap-img">
        </div>

        <br>
        <h2 style="text-align: center; color: #2c3e50; margin-bottom: 30px;">Các kỹ năng cốt lõi</h2>

        <div class="grid-container">
          <div class="card">
            <div class="icon-box pink">
              <i class="fa-solid fa-code"></i>
            </div>
            <h3>Frontend Development</h3>
            <p>Xây dựng giao diện và trải nghiệm người dùng (UI/UX). Các công nghệ: HTML, CSS, JavaScript, React/Vue.</p>
          </div>

          <div class="card">
            <div class="icon-box purple">
              <i class="fa-solid fa-server"></i>
            </div>
            <h3>Backend Development</h3>
            <p>Xử lý logic máy chủ, API và bảo mật. Các công nghệ: PHP, Node.js, Python, Java.</p>
          </div>

          <div class="card">
            <div class="icon-box green">
              <i class="fa-solid fa-database"></i>
            </div>
            <h3>Database</h3>
            <p>Quản lý lưu trữ và truy xuất dữ liệu. SQL (MySQL, PostgreSQL) và NoSQL (MongoDB).</p>
          </div>

          <div class="card">
            <div class="icon-box orange">
              <i class="fa-solid fa-mobile-screen"></i>
            </div>
            <h3>Mobile App</h3>
            <p>Phát triển ứng dụng đa nền tảng hoặc native cho iOS và Android (React Native, Flutter).</p>
          </div>

          <div class="card">
            <div class="icon-box blue">
              <i class="fa-solid fa-cloud"></i>
            </div>
            <h3>Cloud Computing</h3>
            <p>Triển khai ứng dụng trên nền tảng đám mây như AWS, Azure, Google Cloud.</p>
          </div>

          <div class="card">
            <div class="icon-box cyan">
              <i class="fa-solid fa-gears"></i>
            </div>
            <h3>DevOps & Infra</h3>
            <p>Quản lý hạ tầng, CI/CD, Docker, Kubernetes để vận hành hệ thống trơn tru.</p>
          </div>
        </div>
      </div>
    </main>

    <?php include 'footer.php'; ?>
  </div>
</body>

</html>