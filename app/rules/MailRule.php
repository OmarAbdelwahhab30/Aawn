<?php

namespace PHPMVC\rules;

use Rakit\Validation\Rule;

class MailRule extends Rule
{

    protected $message = "أدخل بريد إلكتروني صحيح";


    public function check($value): bool
    {
        return preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",$value);
    }
}