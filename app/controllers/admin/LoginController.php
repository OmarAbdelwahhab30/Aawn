<?php

namespace PHPMVC\controllers\admin;

use Doctrine\ORM\Exception\NotSupported;
use PHPMVC\lib\AbstractController;
use Rakit\Validation\RuleQuashException;


class LoginController extends AbstractController
{


    private mixed $loginModel;

    public function __construct()
    {
        if (isset($_SESSION['admin'])){
            header("location:".URLROOT."admin/HomeController/index");
            exit();
        }
        $this->loginModel = $this->Model("admin.LoginModel");
    }

    public function index()
    {
        $this->Route("admin.login");
    }

    /**
     * @throws NotSupported|RuleQuashException
     */
    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [];

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

            $PARAMS = [
                'email' => 'required|mail',
                'password' => 'required',
            ];

            $messages = [
                'required' => "هذا المدخل مطلوب",
                'mail' =>  "أدخل عنوان بريد إلكتروني صحيح",
            ];
            $validation = $this->Validator($PARAMS,$messages);

            if ($validation->fails()){
                $this->Route("admin.login",[],$validation->errors());
                exit();
            }
            $data = $this->loginModel->login($_POST['email'],hash("sha256",$_POST['password']));

            if ($data != false && !empty($data))
            {
                unset($data->password);
                $this->add('admin',$data); // add data to session
                header("Location:".URLROOT."admin/HomeController/index");
                exit();
            }else{
                $this->Route("admin.login",[],[],['error' => "يوجد خطا في المدخلات , حاول مرة أخرى"]);
                exit();
            }
        }
    }
}