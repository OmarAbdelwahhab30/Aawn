<?php
$pageTitle = 'الشكاوي والمقترحات';
include INCLUDES_USER_PATH . "header.php";
?>
<!-- ***** page-wrapper Start ***** -->

<main class="page-wrapper">

    <section id="suggestions-complaints" class="suggestions-section section-style">
        <div class="container">
            <div class="main-title">
                <h2 class="title">الشكاوي والاقتراحات</h2>

                <p class="desc">
                    يمكنك من خلال هذا القسم تقديم اقتراحاتك وشكاويك للجهات المختصه
                </p>
            </div>

            <div class="my-reports-contint">
                <a href="<?= URLROOT ?>user/ComplaintsSuggestionsController/getCreateComplaintSuggestionView" class="my-reports-btn">
                    <span> إنشاء شكوى </span>

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-plus-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 12h8"></path>
                        <path d="M12 8v8"></path>
                    </svg>
                </a>

                <a href="<?= URLROOT ?>user/ComplaintsSuggestionsController/getCreateComplaintSuggestionView" class="my-reports-btn">
                    <span> إنشاء اقتراح </span>

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-plus-circle">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path d="M8 12h8"></path>
                        <path d="M12 8v8"></path>
                    </svg>
                </a>

                <a href="<?= URLROOT ?>user/ComplaintsSuggestionsController/getPreviousComplaintSuggestionsView" class="my-reports-btn">
                    <span class="text-center"> الشكاوي و الاقتراحات السابقة </span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                         class="lucide lucide-arrow-left-square">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="m12 8-4 4 4 4"></path>
                        <path d="M16 12H8"></path>
                    </svg>
                </a>
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

<div class="side-overlay panel-responsive-btn panel-responsive-close" data-target="for-all"></div>

<!-- End side-overlay  -->

<?php

include INCLUDES_USER_PATH . "footer.php";
?>