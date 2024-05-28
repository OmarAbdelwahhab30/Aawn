<?php

namespace PHPMVC\lib;

use PHPMVC\controllers\Notfound;

class FrontController
{

    protected $_controller = "IndexController";
    protected $_action = "default";

    protected $_prefix = "user";
    protected $_params = array();


    public function __construct()
    {
        $this->_parseUrl();
        $this->dispatch();
    }

    private function _parseUrl()
    {
        $url = explode(
            "/", trim(
            parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH), "/"), 4);


        $this->_prefix = $url[0];

        if (isset($url[1]) && $url[1] != "") {
            $this->_controller = $url[1];
        }
        if (isset($url[2]) && $url[2] != "") {
            $this->_action = $url[2];
        }
        if (isset($url[3]) && $url[3] != "") {
            $this->_params = explode("/", $url[3]);
        }
    }


    public function dispatch()
    {
        if (file_exists(APP_PATH . DS . "controllers" . DS . $this->_prefix . DS . ucwords($this->_controller) . ".php")) {
            require_once APP_PATH . DS . "controllers" . DS . $this->_prefix . DS . ucwords($this->_controller) . ".php";
        } else {
            $this->_controller = "Notfound";
        }

        $controllerclassname = "PHPMVC\CONTROLLERS\\".$this->_prefix."\\" . ucwords($this->_controller);
        $obj = new $controllerclassname;
        $actionname = $this->_action;
        if (!method_exists($obj, $this->_action)) {
            $this->_action = $actionname = "notfound";
            $obj = new Notfound();
        }

        call_user_func_array(array($obj, $actionname), $this->_params);
    }
}