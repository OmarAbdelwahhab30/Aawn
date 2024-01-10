<?php
$pageTitle = 'الشكاوي والمقترحات';
include INCLUDES_USER_PATH . "header.php";
?>
<main class="page-wrapper">
    <?php
    if (isset($_SESSION['success'])){
        ?>

        <div class="alert alert-success alert-dismissible fade show mt-4 px-4 mb-0 text-center mb-4" role="alert">
            <i class="uil uil-check-circle d-block display-4 mt-2 mb-3 text-success"></i>
            <p class="fs-3"><?=$_SESSION['success']?></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

            </button>
        </div>

        <?php
        unset($_SESSION['success']);
    }elseif (isset($_SESSION['error'])){
        ?>
        <div class="alert alert-border alert-border-success alert-dismissible fade show" role="alert">
            <i class="uil uil-check font-size-16 text-success me-2"></i>
            <p class="fs-3"><?=$_SESSION['error']?></p>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

            </button>
        </div>
        <?php

        unset($_SESSION['error']);
    }
    ?>
    <section class="complaints section-bg section-full section-style">
        <div class="container">
            <div class="sign-area">
                <form class="sign-in-form" method="post" enctype="multipart/form-data" action="<?= URLROOT ?>user/ComplaintsSuggestionsController/createSuggestionOrComplaint">
                    <h2 class="sub-title">
                        شكوى | اقتراح
                    </h2>
                    <div class="reports-location">
                        <h4 class="title">موقعك</h4>
                        <input class="form-control" id="location" name="location"
                               placeholder="جامهة شهبه, الباحة,الباحة 65724 ,السعودية ">
                        <?php
                        if (isset($errors) && !empty($errors)) {
                            ?>
                            <small id="passwordHelp" class="text-danger">
                                <?= $errors->first('location') ?>
                            </small>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="form-group reports-info">
                        <label class="title" for="info"> الوصف </label>

                        <textarea
                                name="info"
                                id="info"
                                class="form-control input-focus"
                                placeholder="الرجاء ادخال وصف الشكوي"
                                cols="15"
                                rows="10"
                        ></textarea>
                        <?php
                        if (isset($errors) && !empty($errors)) {
                            ?>
                            <small id="passwordHelp" class="text-danger">
                                <?= $errors->first('info') ?>
                            </small>
                            <?php
                        }
                        ?>
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

                            <input type="file" name="file" id="attachment"/>
                        </div>
                    </div>
                    <div class="form-group reports-info">


                        <?php
                        if (isset($errors) && !empty($errors)) {
                            ?>
                            <small id="passwordHelp" class="text-danger">
                                <?= $errors->first('file') ?>
                            </small>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="submit">
                        <button type="submit" class="custom-btn outline">
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