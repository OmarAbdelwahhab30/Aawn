<?php

namespace PHPMVC\controllers\admin;

use PHPMVC\lib\AbstractController;
use Rakit\Validation\RuleQuashException;

class ResetPasswordController extends AbstractController
{

    private mixed $modelHandler;

    public function __construct()
    {
        if (isset($_SESSION['data'])) {
            header("location:" . URLROOT . "admin/HomeController/index");
            exit();
        }

        if (!isset($_SESSION['token'])) {
            header("location:" . URLROOT . "admin/LoginController/index");
            exit();
        }
        $this->modelHandler = $this->Model("admin.ResetPasswordModel");
    }

    public function index()
    {
        $data['token'] = $_GET['token'];
        $this->Route("admin.reset-password", $data);
    }

    /**
     * @throws RuleQuashException
     */
    public function resetPassword()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $PARAMS = [
                'email' => 'required|exists:admins,email|mail',
                'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!])(.{8,})$/',
                'confirm_password' => 'required|same:password',
                'token' => 'required'
            ];

            $messages = [
                'required' => "هذا المدخل مطلوب",
                'exists' => "هذا المدخل غير موجود",
                'mail' => "أدخل عنوان بريد إلكتروني صحيح",
                "same" => "كلمتا السر غير متطابقتان",
                'regex' => "يجب أن تحتوي كلمة المرور على حرف واحد كبير على الأقل , وحروف صغيرة و أرقام ورموز خاصة",
            ];
            $validation = $this->Validator($PARAMS, $messages);

            if ($validation->fails()) {
                $this->Route("admin.reset-password", $_POST, $validation->errors());
                exit();
            }
            $data = [
                'password' => hash("sha256", trim($_POST['password'])),
                'email' => trim($_POST['email']),
            ];

            if ($this->modelHandler->resetPassword($data['password'],$data['email'])) {
                unset($_SESSION['token']);
                $_SESSION['success'] = "تم تحديث البيانات بنجاح !";
                header("Location:" . URLROOT . "admin/LoginController/index");
                exit();
            }

            $_SESSION['error'] = "حدث خطأ ما !";
            header("Location:" . URLROOT . "admin/AccountController/index");
            exit();

        }
    }
}