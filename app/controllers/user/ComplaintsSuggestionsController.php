<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;
use PHPMVC\lib\FileUploader;

class ComplaintsSuggestionsController extends AbstractController
{

    private mixed $model;

    public function __construct()
    {
        $this->model = $this->Model("user.CreateSuggestionModel");
    }

    public function preIndex(){
        $this->Route("user.complaints");
    }

    public function getCreateComplaintSuggestionView($data = []){
        $this->Route("user.create-complaint-suggestion",$data);
    }

    public function getPreviousComplaintSuggestionsView(){
        $pre = $this->model->getPreviousComplaintSuggestions();
        $this->Route("user.previous-complaints-suggestions",$pre);
    }

    public function createSuggestionOrComplaint(){
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
                $this->getCreateComplaintSuggestionView($validation->errors());
                exit();
            }

            $data = [
                'location' => trim($_POST['location']),
                'info' => trim($_POST['info']),
            ];
            if ($_FILES['file']['name'] != "") {
                $ImageInstance = new FileUploader($_FILES['file'], COM_SUGG_FILES_PATH);
                $data['file'] = trim($_FILES['file']['name']);
                $ImageInstance->Move_File();
            } else {
                $data['file'] = "suggestion.png";
            }
            if ($this->model->addSuggestionToDB($data)) {

                $_SESSION['success'] = "تمت الإضافة بنجاح";
                $this->getCreateComplaintSuggestionView([]);
                exit();
            }
            $_SESSION['error'] = "حدث خطأ ما";
            $this->getCreateComplaintSuggestionView([]);
            exit();
        }
        header("location:" . URLROOT . "user/IndexController/index");
    }


    public function displaySpecificSuggestionByID($id)
    {
        $return = $this->model->getSpecificSuggestionByID($id);
        $this->Route("user.preview-complaint-suggestion",$return);
    }
}