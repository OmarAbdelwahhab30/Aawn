<?php
$pageTitle = 'تعديل الحساب';
include INCLUDES_USER_PATH . "header.php";
?>

<main class="page-wrapper">
    <section class="account-section section-bg section-full section-style">
        <div class="container">
            <div class="sign-area account">
                <form class="sign-in-form">
                    <h2 class="sub-title">تعديل الملف الشخصي</h2>

                    <div class="form-group">
                        <label for="name"> الاسم كامل </label>
                        <input
                                type="text"
                                class="form-control input-focus"
                                placeholder="الاسم كامل"
                                value="sara"
                                name="name"
                                id="name"
                        />
                    </div>

                    <div class="form-group">
                        <label for="phone">رقم الهاتف</label>

                        <input
                                type="text"
                                class="form-control input-focus"
                                placeholder="رقم الهاتف"
                                value="+123456789"
                                name="phone"
                                id="phone"
                        />
                    </div>

                    <div class="form-group">
                        <label for="password"> كلمة المرور </label>

                        <div class="password-field">
                            <input
                                    type="password"
                                    class="form-control password-input input-focus"
                                    placeholder="كلمة المرور"
                                    value="1234567"
                                    name="password"
                                    id="password"
                            />
                            <div class="eye-icon"></div>
                        </div>
                    </div>

                    <div class="submit">
                        <a href="<?= ASSETS_ROOT ?>user/verify.html" class="custom-btn outline"> تعديل </a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<!-- ***** page-wrapper End ***** -->

<!-- Start side-overlay  -->

<div
        class="side-overlay panel-responsive-btn panel-responsive-close"
        data-target="for-all"
></div>

<?php

include INCLUDES_USER_PATH . "footer.php";
?>