<?php

namespace PHPMVC\traits;

use PHPMVC\lib\Database;
use PHPMVC\rules\ExistsRule;
use PHPMVC\rules\MailRule;
use PHPMVC\rules\UniqueRule;
use Rakit\Validation\ErrorBag;
use Rakit\Validation\RuleQuashException;
use Rakit\Validation\Validator;

trait ValidationTrait
{


    /**
     * @throws RuleQuashException
     */
    public static function validator(array $params, array $messages = []): \Rakit\Validation\Validation
    {
        $validator = new Validator($messages);

        $db = new Database();

        $validator->addValidator('unique', new UniqueRule($db));

        $validator->addValidator('mail', new MailRule());

        $validator->addValidator('exists', new ExistsRule());

        $validation = $validator->make($_POST + $_FILES, $params);

        $validation->validate();

        return $validation;

    }

    public function addToMessage(array $params)
    {

        $messages = [
            'required' => 'هذا المدخل مطلوب',
            'email' => 'أدخل بريد إلكتروني صحيح',
            "min" => "أقل عدد من الحروف هو :value"
        ];
    }
}