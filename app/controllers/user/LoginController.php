<?php

namespace PHPMVC\controllers\user;

use PHPMVC\lib\AbstractController;
use Rakit\Validation\RuleQuashException;

class LoginController extends AbstractController
{


    private mixed $loginModel;

    public function __construct()
    {
        $this->loginModel = $this->Model("user.LoginModel");
    }

    public function index()
    {
        $this->Route("user.login");
    }

    /**
     * @throws RuleQuashException
     */
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [];

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $PARAMS = [
                'phone' => 'required|exists:users,phone_number',
                'password' => 'required',
            ];

            $messages = [
                'required' => "هذا المدخل مطلوب",
            ];
            $validation = $this->Validator($PARAMS, $messages);

            if ($validation->fails()) {
                $this->Route("user.login", [], $validation->errors());
                exit();
            }
            $data = [
                'phone' => trim($_POST['phone']),
                'password' => trim(hash("sha256", $_POST['password'])),
            ];
            $data = $this->loginModel->login($data);

            if ($data != false && !empty($data)) {
                unset($data->password);
                $this->add($data); // add data to session
                header("Location:" . URLROOT . "user/IndexController/index");
                exit();
            } else {
                $_SESSION['msg'] = " يوجد خطأ ما في المدخلات";
                header("Location:" . URLROOT . "user/LoginController/index");
                exit();
            }
        }
        header("Location:" . URLROOT . "user/LoginController/index");
        exit();
    }
}