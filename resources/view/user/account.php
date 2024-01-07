<?php
$pageTitle = 'الحساب الشخصي';
include INCLUDES_USER_PATH . "header.php";
?>

<!-- ***** page-wrapper Start ***** -->

<main class="page-wrapper">
    <section class="account-section section-bg section-full section-style">
        <div class="container">
            <a href="<?= ASSETS_ROOT ?>user/edit-account.html" class="account-area">
                <div class="account-right">
                    <h2 class="account-title">الملف الشخصي</h2>
                </div>

                <div class="account-info">
                    <div class="account-info-content">
                        <h3 class="name">Sara</h3>

                        <h4 class="phone">+966 55 555 5555</h4>
                    </div>

                    <div class="account-info-img">
                        <img src="<?= ASSETS_ROOT ?>user/img/avatar-person.svg" alt="user" loading="lazy"/>
                    </div>
                </div>
            </a>
        </div>
    </section>
</main>

<!-- ***** page-wrapper End ***** -->

<!-- Start side-overlay  -->

<div
        class="side-overlay panel-responsive-btn panel-responsive-close"
        data-target="for-all"
></div>

<!-- End side-overlay  -->

<?php

include INCLUDES_USER_PATH . "footer.php";
?>