<?php
include INCLUDES_USER_PATH . "header.php";
?>
    <main>
        <section class="sign-section section-style section-bg section-full">
            <div class="container">
                <div class="sign-area">
                    <form class="sign-in-form">
                        <h2 class="sub-title">تسجيل الدخول</h2>

                        <div class="form-group">
                            <label for="verify">رمز التحقق</label>

                            <div class="form-group-info">
                                <p class="form-group-info-txt">
                                    تم ارسال رمز التحقق الى البريد الالكتروني الخاص بك
                                </p>

                                <p class="form-group-info-txt">
                                    ex: user@mail.com
                                </p>
                            </div>

                            <input
                                    type="email"
                                    class="form-control input-focus"
                                    placeholder="الرجاء ادخال عنوان البريد الإلكتروني"
                                    name="verify"
                                    id="verify"
                            />
                        </div>

                        <div class="submit">
                            <button type="submit" class="custom-btn outline">
                                تأكيد الرمز
                            </button>
                        </div>

                        <div class="resend">
                            <button type="submit" class="custom-btn txt-btn">
                                اعادة ارسال الرمز
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