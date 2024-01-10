<?php
dd($data);
$pageTitle = 'عرض البلاغ';
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
                    <div class="alert alert-danger alert-dismissible fade show mt-4 px-4 mb-0 text-center" role="alert">
                        <i class="uil uil-exclamation-octagon d-block display-4 mt-2 mb-3 text-danger"></i>
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
                            <h4 class="mb-0">تفاصيل البلاغ</h4>
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
                                                                <img src="<?=ASSETS_ROOT?>admin/images/reports/<?=$data['report']->attachment?>" alt=""
                                                                     class="img-fluid mx-auto d-block"
                                                                     data-zoom="assets/images/product/img-1.png">
                                                            </div>
                                                        </div>


                                                    </div>
                                                    <div class="row text-center mt-2">
                                                        <div class="col-sm-4 w-50">
                                                            <div class="d-grid">
                                                                <button type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#closemodal"
                                                                        class="btn btn-danger waves-effect waves-light mt-2 me-1">
                                                                    <i class="uil uil-shopping-cart-alt me-2"></i>إغلاق
                                                                    البلاغ
                                                                </button>
                                                            </div>
                                                            <div class="modal fade" id="closemodal" tabindex="-1"
                                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title"
                                                                                id="exampleModalLabel">إغلاق البلاغ
                                                                                ! </h5>
                                                                            <button type="button" class="btn-close"
                                                                                    data-bs-dismiss="modal"
                                                                                    aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            هل أنت متأكد من إغلاق البلاغ ؟
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button"
                                                                                    class="btn btn-outline-dark"
                                                                                    data-bs-dismiss="modal">تراجع
                                                                            </button>
                                                                            <a  href="<?=URLROOT?>admin/ReportsController/updateReportStatus/<?=$data['report']->id?>/مغلق"
                                                                                    class="btn btn-outline-danger">إغلاق
                                                                                البلاغ
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 w-50">
                                                            <div class="d-grid">
                                                                <button type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#acceptmodal"
                                                                        class="btn btn-success waves-effect  mt-2 waves-light">
                                                                    <i class="uil uil-shopping-basket me-2"></i>اعتماد
                                                                    البلاغ
                                                                </button>
                                                                <div class="modal fade" id="acceptmodal" tabindex="-1"
                                                                     aria-labelledby="exampleModalLabel"
                                                                     aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="exampleModalLabel">اعتماد البلاغ
                                                                                    ! </h5>
                                                                                <button type="button" class="btn-close"
                                                                                        data-bs-dismiss="modal"
                                                                                        aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                هل أنت متأكد من اعتماد البلاغ ؟
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button"
                                                                                        class="btn btn-outline-dark"
                                                                                        data-bs-dismiss="modal">تراجع
                                                                                </button>
                                                                                <a  href="<?=URLROOT?>admin/ReportsController/updateReportStatus/<?=$data['report']->id?>/معتمد""
                                                                                        class="btn btn-outline-success">
                                                                                    اعتماد البلاغ
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4 w-100">
                                                            <div class="d-grid">
                                                                <button type="button" data-bs-toggle="modal"
                                                                        data-bs-target="#waitModal"
                                                                   class="btn btn-outline-primary waves-effect  mt-2 waves-light">
                                                                    <i class="uil uil-shopping-basket me-2"></i>تعديل
                                                                    إلى حالة الانتظار
                                                                </button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal fade" id="waitModal" tabindex="-1"
                                                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="exampleModalLabel">تعديل إلى حالة الانتظار ! </h5>
                                                                    <button type="button" class="btn-close"
                                                                            data-bs-dismiss="modal"
                                                                            aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    هل أنت متأكد من تعديل البلاغ إلى حالة الانتظار ؟
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button"
                                                                            class="btn btn-outline-dark"
                                                                            data-bs-dismiss="modal">تراجع
                                                                    </button>
                                                                    <a  href="<?=URLROOT?>admin/ReportsController/updateReportStatus/<?=$data['report']->id?>/في انتظار الاعتماد"
                                                                        class="btn btn-outline-primary">
                                                                        تعديل
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7">
                                        <div class="mt-4 mt-xl-3 ps-xl-4">
                                            <h5 class="font-size-14">
                                                <a href="#" class="text-muted">التخصص | <?=$_SESSION['admin']->specialization?></a>
                                            </h5>
                                            <h4 class="font-size-20 mb-3"> اسم صاحب البلاغ | <?=$data['report']->username?></h4>

                                            <div class="text-muted">
                                                <?=$data['report']->date_reported?>
                                            </div>
                                            <div class="text-muted">
                                                <?=$data['report']->location?>
                                            </div>
                                            <p class="mt-4 text-muted fs-3">
                                                <?=$data['report']->description?>
                                            </p>
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



    <!-- end main content-->
<?php
include INCLUDES_ADMIN_PATH."footer.php";
?>