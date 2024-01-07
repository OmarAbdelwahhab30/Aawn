<?php
$pageTitle = 'البلاغات ';
include INCLUDES_USER_PATH . "header.php";
?>
<main class="page-wrapper">
    <section class="reports-page section-bg section-full section-style">
        <div class="container">
            <div class="sign-area">
                <h2 class="sub-title">البلاغات الحالية</h2>

                <div class="my-reports-content">
                    <div class="my-reports-item pending">
                        <div class="my-reports-img">
                            <img src="<?= ASSETS_ROOT ?>user/img/repeat.png" alt="repeat"/>

                            <span class="reports-status"> في انتظار الاعتماد </span>
                        </div>

                        <div class="my-reports-info">
                            <p class="report-info">
                                <span> رقم البلاغ </span>
                                <span> 123456 </span>
                                <span> 12/12/2021 </span>
                            </p>

                            <h3 class="report-title">بلاغات صحيه</h3>

                            <p class="report-desc">نظافة دورات المياه</p>
                        </div>
                    </div>

                    <div class="my-reports-item success">
                        <div class="my-reports-img">
                            <img src="<?= ASSETS_ROOT ?>user/img/check.png" alt="check"/>

                            <span class="reports-status"> معتمد </span>
                        </div>

                        <div class="my-reports-info">
                            <p class="report-info">
                                <span> رقم البلاغ </span>
                                <span> 123456 </span>
                                <span> 12/12/2021 </span>
                            </p>

                            <h3 class="report-title">بلاغات صحيه</h3>

                            <p class="report-desc">نظافة دورات المياه</p>
                        </div>
                    </div>

                    <div class="my-reports-item rejected">
                        <div class="my-reports-img">
                            <img src="<?= ASSETS_ROOT ?>user/img/cross.png" alt="cross"/>

                            <span class="reports-status"> مرفوض </span>
                        </div>

                        <div class="my-reports-info">
                            <p class="report-info">
                                <span> رقم البلاغ </span>
                                <span> 123456 </span>
                                <span> 12/12/2021 </span>
                            </p>

                            <h3 class="report-title">بلاغات صحيه</h3>

                            <p class="report-desc">نظافة دورات المياه</p>
                        </div>
                    </div>
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

<?php

include INCLUDES_USER_PATH . "footer.php";
?>