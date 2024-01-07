<?php
$pageTitle = 'البلاغات';
include INCLUDES_USER_PATH . "header.php";
?>

<!-- ***** page-wrapper Start ***** -->

<main class="page-wrapper">

    <section id="reports" class="reports-section section-full section-style">
        <div class="container">
            <div class="main-title">
                <h2 class="title">أنشئ بلاغك الأن</h2>

                <p class="desc">حدد نوع البلاغ</p>
            </div>

            <div class="reports-contint">
                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/cleanliness.png" alt="cleanliness" loading="lazy">
                    </div>
                    <p class="reports-title">الصحيه</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/safe.png" alt="cleanliness" loading="lazy">
                    </div>
                    <p class="reports-title">السلامة الشخصية</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/infra.png" alt="cleanliness" loading="lazy">
                    </div>
                    <p class="reports-title">البنية التحتية</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/organize.png" alt="cleanliness" loading="lazy">
                    </div>
                    <p class="reports-title">الازدحام والتنظيم</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/infection.png" alt="cleanliness" loading="lazy">
                    </div>
                    <p class="reports-title">التلوث البيئي</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/monitoring.png" alt="monitoring" loading="lazy">
                    </div>
                    <p class="reports-title">الصيانة</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/lost-and-found.png" alt="lost" loading="lazy">
                    </div>
                    <p class="reports-title">المفقودات الشخصيه</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/animal-cruelty.png" alt="animal" loading="lazy">
                    </div>
                    <p class="reports-title">الحيوانات الضاره</p>
                </a>

                <a href="<?= ASSETS_ROOT ?>user/create-report.php" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/electronic.png" alt="electronic" loading="lazy">
                    </div>
                    <p class="reports-title">التقنيه</p>
                </a>
            </div>
        </div>
    </section>

</main>

<!-- ***** page-wrapper End ***** -->

<!-- Start scroll-top  -->

<div class="scrollup show" id="scrollUp">
    <i class="fas fa-level-up-alt"></i>
</div>

<!-- End scroll-top  -->

<!-- Start side-overlay  -->

<div class="side-overlay panel-responsive-btn panel-responsive-close" data-target="for-all"></div>

<!-- End side-overlay  -->
<?php

include INCLUDES_USER_PATH . "footer.php";
?>