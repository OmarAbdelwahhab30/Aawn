<?php
$pageTitle = 'البلاغات السابقة';
include INCLUDES_USER_PATH . "header.php";
?>

<main class="page-wrapper">
    <section class="reports-page section-bg section-full section-style">
        <div class="container">
            <div class="sign-area">
                <h2 class="sub-title">البلاغات السابقه</h2>

                <div class="my-reports-content">

                    <?php
                    if (isset($data) && !empty($data)){
                        foreach ($data as $report){
                            ?>
                            <div class="my-reports-item">
                                <div class="my-reports-img">
                                    <img src="<?= ASSETS_ROOT ?>user/img/unlock.png" alt="unlock"/>

                                    <span class="reports-status"> بلاغ مغلق </span>
                                </div>

                                <div class="my-reports-info">
                                    <p class="report-info">
                                        <span> رقم البلاغ </span>
                                        <span> #report-<?=$report->id?> </span>
                                        <span> <?=$report->date_reported?> </span>
                                    </p>

                                    <h3 class="report-title"><?=$report->specialization?></h3>

                                    <p class="report-desc"><?=$report->description?></p>
                                </div>
                            </div>

                            <?php
                        }
                    }else{
                        ?>
                        <div class="alert alert-info alert-dismissible fade show mt-4 px-4 mb-0 text-center" role="alert">
                            <i class="uil uil-exclamation-octagon d-block display-4 mt-2 mb-3 text-danger"></i>
                            <h5 class="text-info">!!</h5>
                            <p>لا يوجد بلاغات سابقة</p>
                        </div>
                            <?php
                    }

                    ?>
                </div>
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

<div
        class="side-overlay panel-responsive-btn panel-responsive-close"
        data-target="for-all"
></div>

<!-- End side-overlay  -->
<?php

include INCLUDES_USER_PATH . "footer.php";
?>