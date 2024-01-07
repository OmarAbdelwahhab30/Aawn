<?php
$pageTitle = 'تسجيل الدخول';
include INCLUDES_USER_PATH . "header.php";
?>

<main>
    <section class="sign-section section-style section-bg section-full">
        <div class="container">
            <div class="sign-area">

                <form class="sign-in-form" action="<?=URLROOT?>user/LoginController/login" method="post">
                    <h2 class="sub-title">تسجيل الدخول</h2>
                    <?php
                    if (isset($_SESSION['msg'])) {
                        ?>
                        <small id="passwordHelp" class="text-danger">
                            <?= $_SESSION['msg']?>
                        </small>
                        <?php
                    }
                    unset($_SESSION['msg'])
                    ?>
                    <div class="form-group">
                        <input
                                type="tel"
                                class="form-control input-focus text-end"
                                name="phone"
                                placeholder="رقم الهاتف"/>
                        <?php
                        if (isset($errors) && !empty($errors)) {
                            ?>
                            <small id="passwordHelp" class="text-danger">
                                <?= $errors->first('phone') ?>
                            </small>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <div class="password-field">
                            <input
                                    type="password"
                                    class="form-control password-input input-focus"
                                    name="password"
                                    placeholder="كلمة المرور"/>
                            <?php
                            if (isset($errors) && !empty($errors)) {
                                ?>
                                <small id="passwordHelp" class="text-danger">
                                    <?= $errors->first('password') ?>
                                </small>
                                <?php
                            }
                            ?>
                            <div class="eye-icon"></div>
                        </div>
                    </div>


                    <div class="submit">
                        <button type="submit" class="custom-btn outline">
                            تسجيل الدخول
                        </button>
                    </div>
                </form>
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