<?php
$pageTitle = 'بلاغاتي';
include INCLUDES_USER_PATH . "header.php";
?>

<!-- ***** page-wrapper Start ***** -->

<main class="page-wrapper">

    <section id="my-reports" class="my-reports-section section-style">
        <div class="container">
            <div class="main-title">
                <h2 class="title">بلاغاتي</h2>

                <p class="desc">تعرف علي حالة بلاغاتك</p>
            </div>

            <div class="my-reports-contint">
                <a href="<?= ASSETS_ROOT ?>user/previous-reports.php" class="my-reports-btn">البلاغات السابقه</a>

                <a href="<?= ASSETS_ROOT ?>user/current-reports.php" class="my-reports-btn">
                    البلاغات الحاليه
                </a>
            </div>
        </div>
    </section>


</main>

<!-- ***** page-wrapper End ***** -->

<!-- Start scroll-top  -->

<div class="scrollup" id="scrollUp">
    <i class="fas fa-level-up-alt"></i>
</div>

<!-- End scroll-top  -->

<!-- Start side-overlay  -->

<div class="side-overlay panel-responsive-btn panel-responsive-close" data-target="for-all"></div>

<!-- End side-overlay  -->

<?php

include INCLUDES_USER_PATH . "footer.php";
?>