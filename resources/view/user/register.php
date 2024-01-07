<?php
$pageTitle = 'تسجيل الاشتراك';
include INCLUDES_USER_PATH . "header.php";
?>

<main>
    <section class="sign-section section-style section-bg section-full">
        <div class="container">
            <div class="sign-area">
                <form class="sign-in-form" method="post" action="<?= URLROOT ?>user/RegisterController/register">
                    <h2 class="sub-title">تسجيل الاشتراك</h2>
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
                                type="text"
                                class="form-control input-focus"
                                placeholder="اسم المسخدم"
                                name="username"
                        />
                        <?php
                        if (isset($errors) && !empty($errors)) {
                            ?>
                            <small id="passwordHelp" class="text-danger">
                                <?= $errors->first('username') ?>
                            </small>
                            <?php
                        }
                        ?>
                    </div>

                    <div class="form-group">
                        <input
                                type="number"
                                class="form-control input-focus"
                                placeholder="رقم الهاتف"
                                name="phone"
                        />
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
                                    placeholder="كلمة المرور"
                                    name="password"
                            />
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

                    <div class="form-group">
                        <div class="password-field">
                            <input
                                    type="password"
                                    class="form-control password-input input-focus"
                                    placeholder="تأكيد كلمة المرور"
                                    name="confirm_password"
                            />
                            <?php
                            if (isset($errors) && !empty($errors)) {
                                ?>
                                <small id="passwordHelp" class="text-danger">
                                    <?= $errors->first('confirm_password') ?>
                                </small>
                                <?php
                            }
                            ?>
                            <div class="eye-icon"></div>
                        </div>
                    </div>
                    <div class="submit">
                        <button type="submit"  class="custom-btn outline">
                            تسجيل الاشتراك
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
<?php

include INCLUDES_USER_PATH . "footer.php";
?>
