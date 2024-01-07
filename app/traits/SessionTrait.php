<?php

namespace PHPMVC\traits;


trait SessionTrait
{

    public static function add($data = []): void
    {
        $_SESSION['data'] = $data;
    }

    public function edit($key,$value)
    {
        $_SESSION[$key] = $value;
    }
    public function destroy(){
        session_unset();
        session_destroy();
    }

}