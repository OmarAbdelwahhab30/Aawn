<?php

namespace PHPMVC\controllers\admin;

use PHPMVC\lib\AbstractController;

class SendRecoveryMailController extends AbstractController
{

    private $Model;

    public function __construct()
    {
        if (isset($_SESSION['admin'])) {
            header("location:" . URLROOT . "admin/HomeController/index");
            exit();
        }
        $this->Model = $this->Model("admin.ForgetPasswordModel");
    }

    public function index()
    {
        $this->Route("admin.send-recovery-mail");
    }

    public function enterAccount()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $data = [];

            $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);


            $PARAMS = [
                'email' => 'required|mail',
            ];

            $messages = [
                'required' => "هذا المدخل مطلوب",
                'mail' => "أدخل عنوان بريد إلكتروني صحيح",
            ];
            $validation = $this->Validator($PARAMS, $messages);

            if ($validation->fails()) {
                $this->Route("admin.send-recovery-mail", [], $validation->errors());
                exit();
            }

            $data['email'] = trim($_POST['email']);
            $this->sendMail($data);
        }
    }

    /**
     * @throws \Exception
     */
    private function sendMail($data)
    {
        require_once LIB_PATH . "mail.php";
        $mail->setFrom('aawn2024@gmail.com', 'Aawn Website');
        $mail->addAddress($data['email']);
        $mail->isHTML(true);
        $mail->CharSet = "UTF-8";
        $mail->Subject = 'رسالة تأكيد كلمة المرور';
        $token = bin2hex(random_bytes(32));

        $image = ASSETS_ROOT."admin"."/logo.jpeg";

        $page = str_replace('<a class="responsive-button">',
            "<a  href='http://localhost/Aawn/public/index/admin/ResetPasswordController/index?token=$token' class='responsive-button'>",
            file_get_contents(VIEW_PATH . "admin" . DS . "mail-button.php"));

        $mail->Body = $page ;

        $_SESSION['token'] = $token;

        if ($mail->send()) {
            $_SESSION['success'] = "تم إرسال رسالة التأكيد لعنوان بريدك الإلكتروني";
            header("location:" . URLROOT . "admin/SendRecoveryMailController/index");
            exit();
        }
        $_SESSION['error'] = "حدث خطأ ما , من فضلك أعد المحاولة.";
        header("location:" . URLROOT . "admin/SendRecoveryMailController/index");
        exit();
    }
}