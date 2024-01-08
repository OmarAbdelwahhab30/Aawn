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

            <div class="reports-contint" style="grid-template-columns: repeat(3, 1fr);">
                <?php
                foreach ($data as $spec){
                ?>
                <a href="<?= URLROOT ?>user/CreateReportController/index/<?=$spec->id?>" class="reports-item">
                    <div class="reports-logo">
                        <img src="<?= ASSETS_ROOT ?>user/img/<?=$spec->img?>" alt="cleanliness" loading="lazy">
                    </div>
                    <p class="reports-title"><?=$spec->specialization?></p>
                </a>
                    <?php
                }
                    ?>
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