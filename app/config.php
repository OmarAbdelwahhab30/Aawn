<?php

namespace PHPMVC\APP;

use Dotenv\Dotenv;

define ('DB_HOST_NAME',$_ENV['DB_HOST']);

define ('DB_USER_NAME', $_ENV['DB_USERNAME']);

define ('DB_PASSWORD', $_ENV['DB_PASSWORD']);

define ('DB_NAME', $_ENV['DB_NAME']);

define ('DB_PORT_NUMBER', $_ENV['DB_PORT_NUMBER']);

define ('DB_DRIVER', $_ENV['DB_DRIVER']);

define("URLROOT",$_ENV['URLROOT']);

define("MAIL_HOST",$_ENV['MAIL_HOST']);

define("MAIL_PORT",$_ENV['MAIL_PORT']);

define("MAIL_SMTPSECURE",$_ENV['SMTPSECURE']);

define("GOOGLE_USERNAME",$_ENV['GOOGLE_USERNAME']);

define("GOOGLE_APP_PASSWORD",$_ENV['GOOGLE_APP_PASSWORD']);

define("ASSETS_ROOT",str_replace("index/","assets/",$_ENV['URLROOT']));

define("SITENAME",$_ENV['SITENAME']) ;

define("DS", DIRECTORY_SEPARATOR);

define("APP_PATH",realpath(dirname(__FILE__)).DS);

define("ENTITIES_PATH",realpath(dirname(__FILE__)).DS."entities".DS);

define("VIEW_PATH" , realpath(dirname(__FILE__,2)).DS."resources".DS."view".DS);

define("LIB_PATH" , realpath(dirname(__FILE__).DS."lib").DS);

define("INCLUDES_USER_PATH" , VIEW_PATH."user".DS."includes".DS);

define("INCLUDES_ADMIN_PATH" , VIEW_PATH."admin".DS."includes".DS);

define("REPORTS_FILES_PATH",$_SERVER['DOCUMENT_ROOT']."/Aawn/Public/assets/admin/images/reports/");
