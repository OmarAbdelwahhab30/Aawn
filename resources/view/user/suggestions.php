<?php
$pageTitle = 'الشكاوي والمقترحات';
include INCLUDES_USER_PATH . "header.php";
?>

<main class="page-wrapper">
    <section class="suggestions section-bg section-full section-style">
        <div class="container">
            <div class="sign-area">
                <form class="sign-in-form">
                    <h2 class="sub-title">
                        اقتراح
                    </h2>

                    <div class="form-group reports-info">
                        <label class="title" for="info"> الوصف </label>

                        <textarea
                                name="info"
                                id="info"
                                class="form-control input-focus"
                                placeholder="الرجاء ادخال وصف الاقتراح"
                                cols="15"
                                rows="10"
                        ></textarea>
                    </div>

                    <div class="reports-attachment">
                        <label for="attachment" class="title">المرفقات</label>

                        <div class="attachment-contint">
                            <div class="attachment-cover">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="lucide lucide-camera"
                                >
                                    <path
                                            d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"
                                    />
                                    <circle cx="12" cy="13" r="3"/>
                                </svg>
                            </div>

                            <input type="file" name="attachment" id="attachment"/>
                        </div>
                    </div>

                    <div class="submit">
                        <button type="submit" href="<?= ASSETS_ROOT ?>user/#" class="custom-btn outline">
                            إرسال
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