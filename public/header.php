<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../app/auth/auth.php';
requireLogin();

?>

<link rel="stylesheet" href="<?php echo ASSETS; ?>css/index.css">
<script src="<?= ASSETS ?>js/search_course.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

<header class="header">
    <div class="header-inner">
        <div class="header-inner-left">
            <a href="<?php echo BASE_URL; ?>index.php" class="logo" aria-label="36Tech - Home">
                <img style="border-radius: 10px;" src="<?php echo BASE_URL; ?>assets/image/logo36Tech.png" alt="" width="50px" height="50px">
                <span class="site-title">Công cụ học lập trình</span>
                <link rel="icon" href="assets/image/logo36Tech.png" type="image/png">
            </a>
        </div>

        <div class="header-inner-center">
             <form class="search" role="search" autocomplete="off">
                <div class="search-wrapper">
                   <input id="search-input" type="search" placeholder="Tìm kiếm khóa học, bài viết, video, ..."
                       autocomplete="off">

                   <button type="submit" class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>

                   <!-- dropdown kết quả -->
                   <div class="search-result" id="search-result"></div>
               </div>
           </form>
        </div>

        <div class="header-inner-right">
            <nav class="auth">
                <div style="display: flex; align-items: center; gap: 10px;">

                    <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
                        <a href="<?php echo AUTH; ?>admin/dashboard.php" class="btn btn-primary"
                            style="background: #ff6b6b; border: 1px solid rgba(255, 150, 241, 1); display: flex; align-items: center; gap: 6px; padding: 10px;">
                            <i class="fa-solid fa-gauge-high"></i> <span style="font-size: 14px; ">Dashboard</span>
                        </a>
                    <?php } ?>

                    <a href="<?php echo AUTH; ?>auth/profile.php" style="display:flex; align-items:center; gap:8px; padding: 4px 12px; border-radius:999px; border:1px solid #218080; text-decoration: none; color: inherit; background: #fff;">

                        <?php
                        $avatarName = !empty($_SESSION['avatar']) ? $_SESSION['avatar'] : 'default-avatar.jpg';
                        $avatarPath = BASE_URL . 'assets/image/' . $avatarName;
                        ?>

                        <img src="<?php echo $avatarPath; ?>" alt="Avatar"
                            style="width:28px; height:28px; border-radius:50%; object-fit: cover; border: 1px solid #eee;">

                        <span style="font-weight:600; font-size: 14px; color: #218080;">
                            <?php echo htmlspecialchars($_SESSION['fullname']); ?>
                        </span>
                    </a>

                    <a href="<?php echo AUTH; ?>auth/logout.php" class="btn btn-ghost" style="color:red; font-size: 19px;">
                        <i class="fa-solid fa-right-from-bracket"></i>
                    </a>
                </div>
            </nav>
        </div>
    </div>
</header>