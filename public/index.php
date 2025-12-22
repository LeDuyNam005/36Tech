<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36Tech - Trang chủ</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./models/content_course/style_inside.css">
</head>

<body>
    <div class="page">
        <?php
        require_once '../app/auth/auth.php';
        require_once 'config.php';
        requireLogin();
        ?>

        <?php
        include 'header.php';
        ?>

        <!-- Backdrop for mobile sidebar -->
        <div class="backdrop" id="backdrop"></div>

        <!-- Main -->
        <main class="main">
            <!--Main trái  -->
            <?php
            include 'main-left.php'
            ?>
            <!--Main phải  -->
            <div class="main-right">
                <?php
                if (isset($_GET['page_layout'])) {
                    switch ($_GET['page_layout']) {
                        case 'homepage':
                            include "homepage.php";
                            break;

                        case 'c':
                            include "models/content_course/C.php";
                            break;

                        case 'cplus':
                            include "models/content_course/c++.php";
                            break;
                        case 'cplus_advance':
                            include "models/content_course/c++_advance.php";
                            break;
                    }
                } else {
                    include 'homepage.php';
                }
                ?>
            </div>
        </main>
        <!-- Footer -->
        <?php
        include 'footer.php';
        ?>
        <script src="./assets/js/index.js"></script>
        <script src="<?= CONTENT_COURSE ?>dropdown.js"></script>
</body>

</html>