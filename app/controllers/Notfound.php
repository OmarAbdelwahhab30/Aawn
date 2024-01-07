<?php

namespace PHPMVC\controllers;

use PHPMVC\lib\AbstractController;

class Notfound extends AbstractController
{

    public function Notfound(){
        $this->Route("notfound.notfound");
    }
}