<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <title>عــــــــــــــاون | <?= isset($pageTitle) ? $pageTitle : '' ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= ASSETS_ROOT ?>admin/images/logo.jpeg">

    <!-- Bootstrap Css -->
    <link href="<?= ASSETS_ROOT ?>admin/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet"
          type="text/css"/>
    <!-- Icons Css -->
    <link href="<?= ASSETS_ROOT ?>admin/css/icons-rtl.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="<?= ASSETS_ROOT ?>admin/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'IBM Plex Sans Arabic', sans-serif;
        }
    </style>
</head>

<body data-sidebar="dark" cz-shortcut-listen="true">


<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="<?= ASSETS_ROOT ?>admin/images/logo.png" alt="" height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?= ASSETS_ROOT ?>admin/images/logo.png" alt="" height="20">
                                </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="<?= ASSETS_ROOT ?>admin/images/logo.png" alt=""
                                         style="height: 60px;width: 60px"
                                         height="22">
                                </span>
                        <span class="logo-lg">
                                    <img src="<?= ASSETS_ROOT ?>admin/images/logo.png" alt="" height="20">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->

            </div>

            <div class="d-flex">
                <div class="dropdown d-inline-block">
                    <button style="cursor: default" type="button" class="btn header-item waves-effect"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?= ASSETS_ROOT ?>admin/images/sa.png"
                             alt="Header Avatar">
                    </button>
                </div>
                <div class="dropdown d-inline-block language-switch">

                    <button type="button" style="cursor: default" class="btn header-item"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span><?= $_SESSION['data']->specialization ?></span>
                    </button>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" data-bs-toggle="modal" data-bs-target="#logout"
                            class="btn header-item waves-effect"
                            aria-haspopup="true" aria-expanded="false">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15">تسجيل الخروج</span>
                    </button>
                </div>


                <div class="dropdown d-inline-block">
                    <button type="button" style="cursor: default" class="btn header-item" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="<?= ASSETS_ROOT ?>admin/images/admin.png"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?= $_SESSION['data']->username ?></span>
                    </button>
                </div>

            </div>
        </div>

    </header>
    <div class="modal fade" id="logout" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">تسجيل الخروج !</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    هل أنت متأكد من تسجيل الخروج ؟
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-dark" data-bs-dismiss="modal">تراجع</button>
                    <a type="button" class="btn btn-danger" href="<?= URLROOT . 'admin/LogoutController/logout' ?>">
                        تسجيل خروج
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu mm-active">

        <!-- LOGO -->
        <div class="navbar-brand-box">

            <div>
                <a href="index.php" class="logo logo-light">
                <span class="logo-lg">
                    <img src="<?= ASSETS_ROOT ?>admin/images/logo.png" style="display: block;
                        margin-left: auto;
                        margin-right: auto;
                        height: 100px;width: 100px">
                </span>
                </a>
            </div>
        </div>

        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect vertical-menu-btn">
            <i class="fa fa-fw fa-bars"></i>
        </button>

        <div data-simplebar="init" class="sidebar-menu-scroll mm-show">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask" style="margin-top: 30px">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper"
                             style="height: 100%; overflow: hidden; padding-right: 0px; padding-bottom: 0px;">
                            <div class="simplebar-content" style="padding: 0px;">

                                <!--- Sidemenu -->
                                <div id="sidebar-menu" class="mm-active">
                                    <!-- Left Menu Start -->
                                    <ul class="metismenu list-unstyled mm-show" id="side-menu">
                                        <li class="">
                                            <a href="<?= URLROOT ?>admin/HomeController/index" class="active"
                                               aria-expanded="false">
                                                <i class="uil-home-alt"></i>
                                                <span>الصفحة الرئيسية</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?= URLROOT ?>admin/ReportsController/index/1" class="active"
                                               aria-expanded="false">
                                                <i class="fa fa-exclamation-circle"></i>
                                                <span>البلاغات</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?= URLROOT ?>admin/ComplaintsSuggestionsController/index/1" class="active" aria-expanded="false">
                                                <i class="fa fa-flag"></i>
                                                <span>الشكاوي والمقترحات</span>
                                            </a>
                                        </li>
                                        <li class="">
                                            <a href="<?= URLROOT ?>admin/AccountController/index" class="active" aria-expanded="false">
                                                <i class="fa fa-user"></i>
                                                <span>تعديل الملف الشخصي</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="active" aria-expanded="false" data-bs-toggle="modal" data-bs-target="#logout">
                                                <i class="uil-sign-out-alt"></i>
                                                <span style="color: white" class="fs-5">تسجيل الخروج</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Sidebar -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: auto; height: 169px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                <div class="simplebar-scrollbar"
                     style="height: 519px; transform: translate3d(0px, 0px, 0px); display: none;"></div>
            </div>
        </div>
    </div>


    <div class="main-content">