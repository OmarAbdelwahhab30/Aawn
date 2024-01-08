<?php

namespace PHPMVC\controllers\admin;

use PHPMVC\lib\AbstractController;
use PHPMVC\lib\Paginator;

class ComplaintsSuggestionsController extends AbstractController
{

    private $PaginatorInstance;

    const TABLE_NAME = "complaints_suggestions";

    private $PagesNum;

    private $ComplaintSuggestionModel;


    public function __construct()
    {

        if (!isset($_SESSION['admin'])){
            header("location:".URLROOT."admin/LoginController/index");
            exit();
        }
        $this->ComplaintSuggestionModel = $this->Model("admin.ComplaintSuggestionModel");
    }


    public function PaginationHandler($page)
    {
        $JoinInfo = [
            "Join" => true,
            "TablesNum" => 1,
            "table1" => self::TABLE_NAME,
            "table2" => "users",
            "table3" => "",
            "cond1" => " complaints_suggestions.user_id = users.id",
            "cond2" => "",
            "ColsName" => " complaints_suggestions.date,users.username,attachment,complaints_suggestions.id",
            "where" => 1,
        ];
        $this->PaginatorInstance = new Paginator(self::TABLE_NAME, "id", $JoinInfo['where'], $page, $JoinInfo);
        $this->PagesNum = $this->PaginatorInstance->GetPagesNum();
    }

    public function index($page)
    {
        $this->PaginationHandler($page);
        $data['com_sug'] = $this->PaginatorInstance->Paginate();
        $data['PagesNum'] = $this->PagesNum;
        $this->Route("admin.suggestions_complaints", $data);
    }

    public function viewComplaintOrSuggestion($Id)
    {
        $data['com_sug'] = $this->ComplaintSuggestionModel->getComlaintOrSuggestionById($Id);
        $this->Route("admin.preview-suggestion-complaints", $data);
    }

    public function reply()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
        $reply = trim($_POST['reply']);
        $id = $_POST['com_sug_id'];
        $PARAMS = [
            'reply' => 'required|min:5',
        ];

        $messages = [
            'required' => "هذا المدخل مطلوب",
            'min' => "أقل عدد من الحروف يمكن إدخاله هو خمس حروف",
        ];
        $data['com_sug'] = $this->ComplaintSuggestionModel->getComlaintOrSuggestionById($id);
        $validation = $this->Validator($PARAMS, $messages);

        if ($validation->fails())
        {
            $this->Route("admin.preview-suggestion-complaints", $data, $validation->errors());

            exit();
        }

        $added = $this->ComplaintSuggestionModel->addReplyToDB($reply,$id);

        if ($added){
            $_SESSION['success'] = "تم إرسال ردك بنجاح.";

            header("location:".URLROOT."admin/ComplaintsSuggestionsController/viewComplaintOrSuggestion/".$id);

            exit();
        }
        $_SESSION['error'] = "حدث خطأ ما , حاول مجددًا.";

        header("location:".URLROOT."admin/ComplaintsSuggestionsController/viewComplaintOrSuggestion/".$id);

        exit();

    }


}