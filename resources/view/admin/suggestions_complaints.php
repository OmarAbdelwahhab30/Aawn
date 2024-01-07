<?php
$pageTitle = 'الشكاوى و المقترحات';
include INCLUDES_ADMIN_PATH . "header.php";
?>


    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0">الشكاوي و المقترحات</h4>
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
                                    if (isset($data['com_sug']) && !empty($data['com_sug'])) {
                                        foreach ($data['com_sug'] as $com_sugg) {
                                            ?>
                                            <div class="col-xl-4 col-sm-6">
                                                <div class="product-box" style="height: 420px">
                                                    <div class="product-img pt-4 px-4">
                                                        <img style="width: 200px;height: 200px"
                                                             src="<?= ASSETS_ROOT ?>admin/images/complaint_suggestion/<?= $com_sugg->attachment ?>"
                                                             alt=""
                                                             class="img-fluid mx-auto d-block">
                                                    </div>
                                                    <div class="text-center product-content p-4">
                                                        <h5 class="mb-1">
                                                            <a href="#" class="text-dark"><?= $com_sugg->username ?></a>
                                                        </h5>
                                                        <p class="text-muted font-size-13"> <?= $com_sugg->date ?> </p>
                                                        <a href="<?= URLROOT ?>admin/ComplaintsSuggestionsController/viewComplaintOrSuggestion/<?= $com_sugg->id ?>"
                                                           class="btn btn-outline-dark mt-4 w-50">
                                                            عرض
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
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
                                </div>
                                <!-- end row -->

                                <div class="row mt-4">
                                    <div class="col-sm-6">
                                        <div class="float-sm-end">
                                            <ul class="pagination pagination-rounded mb-sm-0">
                                                <?php
                                                if ($data['PagesNum'] > 1) {
                                                    ?>
                                                    <li class="page-item disabled">
                                                        <a href="#" class="page-link"><i
                                                                    class="mdi mdi-chevron-left"></i></a>
                                                    </li>
                                                    <?php
                                                    for ($page = 1; $page <= $data['PagesNum']; $page++) {
                                                        ?>
                                                        <li class="page-item">
                                                            <a href="<?= URLROOT ?>admin/ComplaintsSuggestionsController/index/<?= $page ?>"
                                                               class="page-link text-bg-dark"><?= $page ?></a>
                                                        </li>
                                                        <?php
                                                    } ?>
                                                    <li class="page-item">
                                                        <a href="#" class="page-link"><i
                                                                    class="mdi mdi-chevron-right"></i></a>
                                                    </li>
                                                    <?php
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

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