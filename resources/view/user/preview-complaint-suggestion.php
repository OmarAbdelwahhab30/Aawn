<?php
$pageTitle = 'عرض الشكوى و الاقتراح';
include INCLUDES_USER_PATH . "header.php";
?>
<main class="page-wrapper">
    <section class="suggestions section-bg section-full section-style">
        <div class="container">.
            <h1 class="text-center mb-4">
                اقتراح | شكوى
            </h1>
            <div class="sign-area">
                <div class="form-group reports-info text-center">
                    <div class="container">
                        <div class="text-center">
                            <img class="mb-4 img-fluid mx-auto d-block" style="padding-left: 40px"
                                 src="<?= ASSETS_ROOT ?>admin/images/complaint_suggestion/<?=$data->attachment?>">
                        </div>
                    </div>
                </div>
                <div class="form-group reports-info text-center">
                    <h2 class="title mt-4"> الوصف </h2>
                    <div class="container">
                        <div style="margin: 10px"><?=$data->description?>
                        </div>
                    </div>
                </div>
                <div class="form-group reports-info text-center">
                    <h2 class="title">الرد</h2>
                    <?php
                    if ($data->reply == null){
                    ?>
                    <div class="container">
                        <div style="margin: 10px">
                            لا يوجد رد حتى الآن
                        </div>
                    </div>
                        <?php
                    }else{
                        ?>
                        <div class="container">
                            <div style="margin: 10px">
                                <?=$data->reply?>
                            </div>
                        </div>
                            <?php
                    }
                        ?>
                </div>
                <div class="submit">
                    <a type="button" href="<?= URLROOT ?>user/ComplaintsSuggestionsController/getPreviousComplaintSuggestionsView"
                       class="custom-btn outline">
                        رجوع
                    </a>
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