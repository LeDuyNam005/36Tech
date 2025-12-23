<div class="page">

    <?php
    require __DIR__ . '/../../header.php';
    ?>

    <main class="main">

        <?php
        require __DIR__ . '/../../main-left.php';
        ?>

        <div class="main-right">

            <?php
            if (isset($_GET['page_layout'])) {
                switch ($_GET['page_layout']) {
                    case 'C':
                        include "./models/content_course/C.php";
                        break;
                    default:
                        include "../../index.php";
                        break;
                }
            } else {
                include "../../index.php";
            }
            ?>

        </div>
    </main>

    <?php
    require __DIR__ . '/../../footer.php';
    ?>



</div>