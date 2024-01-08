<?php

namespace PHPMVC\controllers\admin;

use PHPMVC\lib\AbstractController;
use Rakit\Validation\RuleQuashException;

class AccountController extends AbstractController
{
    private $accountModel;

    public function __construct()
    {
        if (!isset($_SESSION['admin'])){
            header("location:".URLROOT."admin/LoginController/index");
            exit();
        }
        $this->accountModel = $this->Model("admin.AccountModel");
    }

    public function index()
    {
        $this->Route("admin.update-account");
    }

    /**
     * @throws RuleQuashException
     */
    public function updateAccount()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [];

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $data = [
                'username' => trim($_POST['username']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
            ];

            $PARAMS = [
                'username' => 'required|min:6',
                'email' => 'required|mail|unique:admins,email,'.$_SESSION['admin']->email,
                'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!])(.{8,})$/',
                'confirm_password' => 'required|same:password'
            ];

            $messages = [
                'required' => "هذا المدخل مطلوب",
                'unique' => "هذا البريد الالكتروني موجود بالفعل.",
                'mail' =>  "أدخل عنوان بريد إلكتروني صحيح",
                'regex' => "يجب أن تحتوي كلمة المرور على حرف واحد كبير على الأقل , وحروف صغيرة و أرقام ورموز خاصة",
                "same" => "كلمتا السر غير متطابقتان",
            ];
            $validation = $this->Validator($PARAMS,$messages);

            if ($validation->fails()){
                $this->Route("admin.update-account",[],$validation->errors());
                exit();
            }

            $updated = $this->accountModel->updateAccount($data);


            if ($updated){

                $this->updateSession($data);

                $_SESSION['success'] = "تم تحديث البيانات بنجاح !";

                header("Location:".URLROOT."admin/AccountController/index");

                exit();
            }else{
                $_SESSION['error'] = "حدث خطأ ما !";
                header("Location:".URLROOT."admin/AccountController/index");
                exit();
            }
        }
    }

    private function updateSession(array $data)
    {
        $_SESSION['admin']->username = $data['username'];
        $_SESSION['admin']->email = $data['email'];
    }

}