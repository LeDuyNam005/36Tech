<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <?php
    require 'auth.php';
    requireLogin();
    ?>
    <!-- Header -->
    <header class="header">
        <div class="header-inner">
            <div class="header-inner-left">
                <a href="/" class="logo" aria-label="F8 - Home">
                    <span class="logo-badge">36Tech</span>
                    <span class="site-title">Học Lập Trình </span>
                </a>
            </div>
            <div class="header-inner-center">
                <form class="search" role="search" action="#" method="get">
                    <div class="search-wrapper">
                        <input id="search-input" name="q" type="search" placeholder="Tìm kiếm khóa học, bài viết, video, ..."
                            autocomplete="off">
                        <button type="submit" class="search-btn" aria-label="Tìm kiếm">🔍</button>
                    </div>
                </form>
            </div>
            <div class="header-inner-right">
                <nav class="auth">
                    <?php
                    if (!isset($_SESSION['user_id'])) {
                    ?>
                        <a class="btn btn-ghost" href="./assets/php/register.php">Đăng ký</a>
                        <a class="btn btn-primary" href="./assets/php/login.php">Đăng nhập</a>

                    <?php
                    } else {
                    ?>
                        <div style="display: flex; align-items: center; gap: 10px;">

                            <?php if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') { ?>
                                <a href="../app/admin/dashboard.php" class="btn btn-primary"
                                    style="background-color: #ff6b6b; border-color: #ff6b6b; display: flex; align-items: center; gap: 6px; padding: 12px;">
                                    <i class="fa-solid fa-gauge-high"></i> <span style="font-size: 14px;">Dashboard</span></a>
                            <?php } ?>

                            <a href="../app/auth/profile.php" style="display:flex; align-items:center; gap:8px; padding: 4px 12px; 
                      border-radius:999px; border:1px solid #218080; 
                      text-decoration: none; color: inherit; background: #fff;">

                                <?php
                                $avatarName = !empty($_SESSION['avatar']) ? $_SESSION['avatar'] : 'default-avatar.jpg';
                                $path = './assets/image/' . $avatarName;
                                ?>
                                <img src="<?php echo $path ?>" alt="Avatar"
                                    style="width:28px; height:28px; border-radius:50%; object-fit: cover; border: 1px solid #eee;">
                                <span style="font-weight:600; font-size: 14px; color: #218080;">
                                    <?= htmlspecialchars($_SESSION['fullname']) ?>
                                </span>
                            </a>

                            <a href="../app/auth/logout.php" class="btn btn-ghost" style="color:red; font-size: 19px;">
                                <i class="fa-solid fa-right-from-bracket"></i>
                            </a>

                        </div>
                    <?php } ?>
                </nav>
            </div>
        </div>
    </header>
</body>

</html>