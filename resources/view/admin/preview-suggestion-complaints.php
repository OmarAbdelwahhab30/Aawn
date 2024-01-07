<?php
$pageTitle = 'عرض الشكوى و الاقتراح';
include INCLUDES_ADMIN_PATH . "header.php";
?>
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">تفاصيل الشكوى | الاقتراح</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="product-detail">
                                        <div class="row">


                                            <div class="col-9">
                                                <div class="tab-content position-relative" id="v-pills-tabContent">

                                                    <div class="tab-pane fade show active" id="product-1"
                                                         role="tabpanel" aria-labelledby="#product-1-tab">
                                                        <div class="product-img">
                                                            <img src="<?= ASSETS_ROOT ?>admin/images/complaint_suggestion/<?= $data['com_sug']->attachment?>"
                                                                 alt=""
                                                                 class="img-fluid mx-auto d-block"
                                                                 data-zoom="assets/images/product/img-1.png">
                                                        </div>
                                                    </div>


                                                </div>



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



                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="mt-4 mt-xl-3 ps-xl-4">
                                        <h4 class="font-size-20 mb-3"><?=$data['com_sug']->username?></h4>

                                        <div class="text-muted">
                                            <?=$data['com_sug']->date?>
                                        </div>
                                        <div class="text-muted">
                                            <?=$data['com_sug']->location?>
                                        </div>
                                        <p class="mt-4 text-muted fs-3">
                                            <?=$data['com_sug']->description?>
                                        </p>
                                        <div class="mb-3">
                                            <h3 class="form-label">الرد على الشكوى | الاقتراح</h3>
                                            <form action="<?=URLROOT?>admin/ComplaintsSuggestionsController/reply" method="post">
                                                <div>
                                                    <input type="hidden" name="com_sug_id" value="<?=$data['com_sug']->id?>">
                                                    <textarea style="resize: none; height: 300px;font-size: 27px"
                                                              class="form-control" rows="5" name="reply"></textarea>
                                                </div>
                                                <div class="mt-3">
                                                    <button type="submit"
                                                            class="btn btn-outline-success waves-effect waves-light me-1 float-end m-2">
                                                        إرسال
                                                    </button>
                                                    <button type="reset" class="btn btn-outline-danger waves-effect float-end m-2">
                                                        إلغاء
                                                    </button>
                                                    <?php
                                                    if (isset($errors) && !empty($errors)) {
                                                        ?>
                                                        <small id="passwordHelp" class="text-danger fs-4 m-2">
                                                            <?= $errors->first('reply') ?>
                                                        </small>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div> <!-- container-fluid -->
    </div>
    <!-- End Page-content -->


<?php

include INCLUDES_ADMIN_PATH . "footer.php";
?>