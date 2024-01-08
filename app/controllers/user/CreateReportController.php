<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;
use PHPMVC\lib\FileUploader;

class CreateReportController extends AbstractController
{


    private mixed $createReportModel;

    public function __construct()
    {
        $this->createReportModel = $this->Model("user.CreateReportModel");
    }

    public function preIndex()
    {
        $specializations = $this->createReportModel->getReportsSpecialization();
        $this->Route("user.all-reports", $specializations);
    }

    public function index($id, $data = [])
    {
        $spec = $this->createReportModel->getSpecializationByID($id);
        $this->Route("user.create-report", $spec, $data);
    }

    public function createReport()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [];

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $PARAMS = [
                'location' => 'required|min:6',
                'info' => 'required|min:6',
                'file' => 'uploaded_file:0,10000K,pdf,png,jpeg',
            ];

            $messages = [
                'required' => "هذا المدخل مطلوب",
                "min" => "أقل عدد من الحروف يمكن إدخاله هو ست حروف",
                "uploaded_file" => " , أقصى حجم هو 10000 كيلو بايت
                   ,الملف يجب أن يكون من صيغة  pdf,png,jpeg "
            ];
            $validation = $this->Validator($PARAMS, $messages);

            if ($validation->fails()) {
                $this->index($_POST['spec_id'], $validation->errors());
                exit();
            }

            $data = [
                'location' => trim($_POST['location']),
                'info' => trim($_POST['info']),
                'spec_id' => trim($_POST['spec_id']),
            ];
            if ($_FILES['file']['name'] != "") {
                $ImageInstance = new FileUploader($_FILES['file'], REPORTS_FILES_PATH);
                $data['file'] = trim($_FILES['file']['name']);
                $ImageInstance->Move_File();
            } else {
                $data['file'] = "report.png";
            }
            if ($this->createReportModel->addReportToDB($data)) {

                $_SESSION['success'] = "تمت إضافة البلاغ بنجاح";
                $this->index($_POST['spec_id'], []);
            }
            $_SESSION['error'] = "حدث خطأ ما";
            $this->index($_POST['spec_id'], []);
            exit();
        }
        header("location:" . URLROOT . "user/IndexController/index");
    }
}