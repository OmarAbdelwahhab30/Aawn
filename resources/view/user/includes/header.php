<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8"/>

    <meta
            name="viewport"
            content="height=device-height,
                      width=device-width, initial-scale=1.0,
                      minimum-scale=1.0, maximum-scale=1.0,
                      user-scalable=no"
    />

    <meta name="theme-color" content="#94C120"/>

    <title>عــــــــــــــاون | <?= $pageTitle ?? '' ?></title>


    <link rel="shortcut icon" href="<?= ASSETS_ROOT ?>admin/images/logo.jpeg">

    <link rel="stylesheet" type="text/css" href="<?= ASSETS_ROOT ?>user/css/bootstrap.min.css"/>

    <link rel="stylesheet" type="text/css" href="<?= ASSETS_ROOT ?>user/css/all.min.css"/>

    <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css?family=Cairo"
    />

    <link rel="icon" href="<?= ASSETS_ROOT ?>user/img/logo.jpeg" sizes="16x16 32x32 48x48 64x64"/>

    <link rel="stylesheet" type="text/css" href="<?= ASSETS_ROOT ?>user/css/main.css"/>
</head>

<body>
<!-- ***** header ***** -->

<header
        class="top-nav panel-responsive-item noScroll no-overlay"
        id="header"
>
    <div class="container">
        <div class="nav-content">
            <div class="content-pull">
                <div class="nav-logo flex-item">
                    <div
                            class="nav-toggler mobile-item panel-responsive-btn panel-responsive-open"
                            data-target="top-nav"
                    >
                        <svg
                                height="384pt"
                                viewBox="0 -53 384 384"
                                width="384pt"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                    d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                            ></path>
                            <path
                                    d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                            ></path>
                            <path
                                    d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                            ></path>
                        </svg>
                    </div>

                    <a class="logo-link" href="<?= ASSETS_ROOT ?>user/index.html">
                        <img class="img-fluid" src="<?= ASSETS_ROOT ?>user/img/logo.png" alt="Awin"/>
                    </a>
                </div>
            </div>

            <div class="content-pull">
                <ul class="nav-list" id="navList">
                    <li class="list-item mobile-item banner-logo-item no-border">
                        <div class="banner-logo">
                            <div
                                    class="close-menu panel-responsive-btn panel-responsive-close"
                                    id="mobileClose"
                                    data-target="top-nav"
                            >
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <img class="img-fluid" src="<?= ASSETS_ROOT ?>user/img/logo.png" alt="Awin"/>
                        </div>
                    </li>

                    <li class="list-item">
                        <a class="item-link" href="<?= URLROOT ?>user/IndexController/index">الرئيسية</a>
                    </li>

                    <li class="list-item">
                        <a class="item-link" href="<?= URLROOT ?>user/CreateReportController/preIndex"> انشاء بلاغ </a>
                    </li>

                    <li class="list-item">
                        <a class="item-link" href="<?= URLROOT ?>user/MyReportsController/index"> بلاغاتي </a>
                    </li>

                    <li class="list-item">
                        <a class="item-link" href="<?= ASSETS_ROOT ?>user/complaints.html"> الشكاوي والاقتراحات </a>
                    </li>

                    <li class="list-item">
                        <a class="item-link" href="<?= ASSETS_ROOT ?>user/index.html#contact-us"> التواصل </a>
                    </li>
                    <?php
                    if (isset($_SESSION['user']->id)) {
                        ?>
                        <li class="list-item">
                            <a href="<?= ASSETS_ROOT ?>user/account.html" class="item-link"> الملف الشخصي </a>
                        </li>

                        <li class="list-item">
                            <button type="button" data-bs-toggle="modal" data-bs-target="#logout"
                                    class="item-link text-danger"> تسجيل الخروج
                            </button>
                        </li>
                        <?php
                    } else {
                        ?>
                        <li class="list-item">
                            <a href="<?= URLROOT ?>user/LoginController/index" class="item-link"> تسجيل الدخول </a>
                        </li>
                        <li class="list-item">
                            <a href="<?= URLROOT ?>user/RegisterController/index" class="item-link"> تسجيل الاشتراك </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>


                <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel"
                     aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">تسجيل الخروج !</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                هل أنت متأكد من تسجيل الخروج ؟
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">تراجع
                                </button>
                                <a type="button" href="<?= URLROOT ?>user/LogoutController/logout" class="btn btn-danger">تسجيل خروج</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div
            class="side-overlay panel-responsive-btn panel-responsive-close"
    ></div>
</header>