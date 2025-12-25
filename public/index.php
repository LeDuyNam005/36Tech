<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>36Tech</title>
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./models/content_course/style_inside.css">
    <link rel="icon" href="assets/image/logo36Tech.png" type="image/png">
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
                        case 'python':
                            include "models/content_course/python.php";
                            break;
                        case 'cpp':
                            include "models/content_course/cpp.php";
                            break;
                        case 'cpp_advance':
                            include "models/content_course/cpp_advance.php";
                            break;
                        case 'javaScript':
                            include "models/content_course/javaScript.php";
                            break;
                        case 'javaScriptNangCao':
                            include "models/content_course/javaScriptNangCao.php";
                            break;
                        case 'github':
                            include "models/content_course/github.php";
                            break;
                        case 'dont_touch_yface':
                            include "models/content_course/dont_touch_yface.php";
                            break;
                        case 'node_js':
                            include "models/content_course/node_js.php";
                            break;
                        case 'reactJS':
                            include "models/content_course/reactJS.php";
                            break;
                        case 'reponsive':
                            include "models/content_course/reponsive.php";
                            break;
                        case 'html_css':
                            include "models/content_course/html_css.php";
                            break;
                        default:
                            include "homepage.php";
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