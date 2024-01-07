<?php
$pageTitle = 'تحديث الحساب';
include INCLUDES_ADMIN_PATH."header.php";
?>



        <div class="page-content">
            <div class="container-fluid">
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
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">تحديث الملف الشخصي</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->


                <!-- end row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <div class="mt-4">
                                            <form method="post" action="<?=URLROOT?>admin/AccountController/updateAccount">
                                                <div class="mb-3">
                                                    <h4 class="form-label" for="formrow-Fullname-input">تحديث الاسم</h4>
                                                    <input  type="text" name="username"  class="form-control" style="text-align: right" id="formrow-Fullname-input"
                                                            placeholder="<?=$_SESSION['data']->username?>">
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

                                                <div class="mb-3">
                                                    <h4 class="form-label" for="formrow-email-input"> البريد
                                                         الإلكتروني الجديد</h4>
                                                    <input type="email" name="email" style="text-align: right" class="form-control" id="formrow-email-input"
                                                           placeholder="<?=$_SESSION['data']->email?>">
                                                    <?php
                                                    if (isset($errors) && !empty($errors)) {
                                                        ?>
                                                        <small id="passwordHelp" class="text-danger">
                                                            <?= $errors->first('email') ?>
                                                        </small>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="mb-3">
                                                    <h4 class="form-label"
                                                        for="formrow-password-input">كلمة المرور الجديدة</h4>
                                                    <input type="password" name="password" style="text-align: right" class="form-control"
                                                           id="formrow-password-input"
                                                           placeholder=" أدخل كلمة المرور الجديدة">
                                                    <?php
                                                    if (isset($errors) && !empty($errors)) {
                                                        ?>
                                                        <small id="passwordHelp" class="text-danger">
                                                            <?= $errors->first('password') ?>
                                                        </small>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>

                                                <div class="mb-3">
                                                    <h4 class="form-label"
                                                        for="formrow-password-input"> تأكيد كلمة المرور الجديدة</h4>
                                                    <input type="password" name="confirm_password" style="text-align: right" class="form-control"
                                                           placeholder=" أعد إدخال كلمة المرور الجديدة">
                                                    <?php
                                                    if (isset($errors) && !empty($errors)) {
                                                        ?>
                                                        <small id="passwordHelp" class="text-danger">
                                                            <?= $errors->first('confirm_password') ?>
                                                        </small>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                                <div class="d-flex flex-wrap gap-3 mt-3">
                                                    <button type="submit"
                                                            class="btn btn-outline-success waves-effect waves-light w-md">تحديث
                                                    </button>
                                                    <button type="reset"
                                                            class="btn btn-outline-danger waves-effect waves-light w-md">
                                                        إلغاء
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 ms-lg-auto">
                                        <div class="mt-5 mt-lg-4 align-items-center justify-content-center">
                                            <img class="mb-4 img-fluid mx-auto d-block" src="<?=ASSETS_ROOT?>admin/images/logo.png">
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Form Layout -->

                <!-- Start Form Sizing -->

                <!-- End Form Sizing -->


                <!-- end row -->


                <!-- end row -->

            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->


<?php
include INCLUDES_ADMIN_PATH."footer.php";
?>