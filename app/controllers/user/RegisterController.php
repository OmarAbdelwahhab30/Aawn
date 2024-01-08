<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;
use Rakit\Validation\RuleQuashException;

class RegisterController extends AbstractController
{


    private mixed $dbHandler;

    public function __construct()
    {
        $this->dbHandler = $this->Model("user.RegisterModel");
    }

    public function index()
    {
        $this->Route("user.register");
    }

    /**
     * @throws RuleQuashException
     */
    public function register()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [];

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $PARAMS = [
                'username' => 'required|unique:users,username|min:6',
                'phone' => 'required|unique:users,phone_number',
                'password' => 'required|regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@#$%^&+=!])(.{8,})$/',
                'confirm_password' => 'required|same:password',
            ];

            $messages = [
                'required' => "هذا المدخل مطلوب",
                'unique' => "هذا المدخل بالفعل.",
                'regex' => "يجب أن تحتوي كلمة المرور على حرف واحد كبير على الأقل , وحروف صغيرة و أرقام ورموز خاصة",
                "same" => "كلمتا السر غير متطابقتان",
            ];
            $validation = $this->Validator($PARAMS, $messages);

            if ($validation->fails()) {
                $this->Route("user.register", [], $validation->errors());
                exit();
            }
            $data = [
                'username' => trim($_POST['username']),

                'phone' => trim($_POST['phone']),

                'password' => hash("sha256", trim($_POST['password'])),
            ];

            if ($this->dbHandler->register($data)) {
                $user = $this->dbHandler->getUser($data['username']);
                unset($user->password);
                $this->add('user',$user);
                header("Location:" . URLROOT . "user/IndexController/index");
                exit();
            }
            $_SESSION['msg'] = "حدث خطأ ما" ;
            header("Location:" . URLROOT . "user/RegisterController/index");
            exit();
        }else{
            header("Location:" . URLROOT . "user/RegisterController/index");
            exit();
        }

    }
}