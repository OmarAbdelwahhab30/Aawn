<?php

namespace PHPMVC\lib;

use PHPMVC\traits\SessionTrait;
use PHPMVC\traits\ValidationTrait;

class AbstractController
{

    use ValidationTrait, SessionTrait;

    public function Model($modelname)
    {
        require_once APP_PATH . "MODELS" . DS . str_replace(".", "\\", $modelname) . ".php";
        $modelname = "PHPMVC\MODELS\\" . str_replace(".", "\\", $modelname);
        return new $modelname();
    }

    public function Route($view, $data = [], $errors = [], $all = [])
    {
        if (file_exists(VIEW_PATH . str_replace(".", DS, $view) . ".php")) {
            extract([$data, $errors,$all]);
            require_once VIEW_PATH . str_replace(".", DS, $view) . ".php";
        } else {
            require_once VIEW_PATH . "notfound" . DS . "notfound.php";
        }
    }

}
