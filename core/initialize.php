<?php
    defined('DS') ? null : define('DS', DIRECTORY_SEPERATOR);
    defined('SITE_ROOT') ? null : define('SITE_ROOT', DS . 'wamp64'.DS.'www'.DS.'php_rest_project');
    defined('INC_PATH') ? null : define('INC_PATH', SITE_ROOT.DS.'config');
    defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');
    

    //load the config file first
    require_once(INC_PATH.DS."Database.php");

    //core classes
    require_once(CORE_PATH.DS."Post.php");