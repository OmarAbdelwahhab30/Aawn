<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8"/>
    <title>عـــــــــــــــــــــــــــــــاون</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesbrand" name="author"/>
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?=ASSETS_ROOT?>admin/images/logo.jpeg">

    <!-- Bootstrap Css -->
    <link href="<?=ASSETS_ROOT?>admin/css/bootstrap-rtl.min.css" id="bootstrap-style" rel="stylesheet" type="text/css"/>
    <!-- Icons Css -->
    <link href="<?=ASSETS_ROOT?>admin/css/icons-rtl.min.css" rel="stylesheet" type="text/css"/>
    <!-- App Css-->
    <link href="<?=ASSETS_ROOT?>admin/css/app-rtl.min.css" id="app-style" rel="stylesheet" type="text/css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@300&display=swap" rel="stylesheet">
    <style>
        *{
            font-family: 'IBM Plex Sans Arabic', sans-serif;
        }
    </style>
</head>

<body class="authentication-bg">
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
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
        <div class="row" style="height: 148px">
            <div class="col-lg-12">
                <div class="text-center">
                    <a href="index.php" class="mb-5 d-block auth-logo">
                        <img src="<?=ASSETS_ROOT?>admin/images/logo.png" style="height: 179px;width: 176px;" class="logo logo-dark">
                        <img src="<?=ASSETS_ROOT?>admin/images/logo.png" class="logo logo-light">
                    </a>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center" style="margin-top: 20px">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mt-2">
                            <h5 class="text-primary">إعادة تعيين كلمة المرور</h5>
                        </div>
                        <div class="p-2 mt-4">
                            <div class="alert alert-border-info text-center mb-4" role="alert">
                                 أدخل البريد الإلكتروني الخاص بك وستصلك رسالة تأكيد
                            </div>
                            <form action="<?=URLROOT?>admin/SendRecoveryMailController/enterAccount" method="post">
                                <div class="mb-3">
                                    <label class="form-label" for="useremail">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" name="email" id="useremail"
                                           placeholder="أدخل البريد الإلكتروني">
                                    <?php
                                    if (isset($errors) && !empty($errors)) {
                                        ?>
                                        <small id="passwordHelp" class="text-danger fs-6">
                                            <?= $errors->first('email') ?>
                                        </small>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <div class="mt-3 text-end">
                                    <button class="btn btn-primary w-sm waves-effect waves-light" type="submit">إرسال
                                    </button>
                                </div>
                                <div class="mt-4 text-center">
                                    <p class="mb-0">هل تذكرتها ؟
                                        <a href="<?=URLROOT?>admin/LoginController/index"
                                           class="fw-medium text-primary">انتقال إلى صفحة تسجيل الدخول
                                        </a>
                                    </p>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<!-- JAVASCRIPT -->
<script src="<?=ASSETS_ROOT?>admin/js/jquery.min.js"></script>
<script src="<?=ASSETS_ROOT?>admin/js/bootstrap.bundle.min.js"></script>
<script src="<?=ASSETS_ROOT?>admin/js/metisMenu.min.js"></script>


<!-- App js -->
<script src="<?=ASSETS_ROOT?>admin/js/app.js"></script>

</body>
</html>
