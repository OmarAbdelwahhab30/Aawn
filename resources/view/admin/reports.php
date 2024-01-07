<?php
$pageTitle = 'البلاغات';
include INCLUDES_ADMIN_PATH . "header.php";
?>

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0">البلاغات</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">


                    <div class="col-xl-12 col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <div class="row">
                                        <?php
                                        if (isset($data['reports']) && !empty($data['reports'])) {
                                            foreach ($data['reports'] as $report) {
                                                ?>
                                                <div class="col-xl-4 col-sm-6">
                                                    <div class="product-box">
                                                        <div class="product-img pt-4 px-4">
                                                            <img src="<?= ASSETS_ROOT ?>admin/images/reports/<?= $report->attachment ?>"
                                                                 alt="" class="img-fluid mx-auto d-block">
                                                        </div>
                                                        <div class="text-center product-content p-4">
                                                            <h5 class="mb-1"><a href="#" class="text-dark">الحالة
                                                                    | <?= $report->status ?></a>
                                                            </h5>
                                                            <p class="text-muted font-size-13">  <?= $report->date_reported ?>   </p>
                                                            <h5 class="mt-3 mb-0">
                                                                <?= $report->username ?>
                                                            </h5>
                                                            <a href="<?=URLROOT?>admin/ReportsController/viewReport/<?=$report->id?>"
                                                               class="btn btn-outline-dark mt-4 w-50">
                                                                عرض
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php
                                            } ?>

                                            <div class="row mt-4">
                                                <div class="col-sm-6">
                                                    <div class="float-sm-end">
                                                        <ul class="pagination pagination-rounded mb-sm-0">
                                                            <?php
                                            if ($data['PagesNum']  > 1){
                                                ?>
                                                <li class="page-item disabled">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-left"></i></a>
                                                </li>
                                                    <?php
                                                for($page = 1; $page <= $data['PagesNum']; $page++) {
                                                            ?>
                                                            <li class="page-item">
                                                                <a href="<?=URLROOT?>admin/ReportsController/index/<?=$page?>" class="page-link text-bg-dark"><?=$page?></a>
                                                            </li>
                                                    <?php
                                                }?>
                                                <li class="page-item">
                                                    <a href="#" class="page-link"><i class="mdi mdi-chevron-right"></i></a>
                                                </li>
                                                <?php
                                            }
                                                    ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                                <?php
                                        } else {
                                            ?>
                                            <div class="alert alert-border alert-border-info alert-dismissible fade show mb-0 text-lg-center fs-3"
                                                 role="alert">
                                                <i class="uil uil-question-circle font-size-16 text-info me-2"></i>
                                                عفوا , لا يوجد بلاغات متوفرة
                                            </div>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                    <!-- end row -->
                                </div>
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