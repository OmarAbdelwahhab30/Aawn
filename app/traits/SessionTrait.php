<?php

namespace PHPMVC\traits;


trait SessionTrait
{

    public static function add($key,$data = []): void
    {
        $_SESSION[$key] = $data;
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