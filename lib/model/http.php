<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 23/01/2018
 * Time: 17:04
 */



class http
{
    // klassi muutujad
    var $vars = array();
    var $server = array();
    /**
     * http constructor.
     */
    public function __construct()
    {
        $this->init();
        $this->initConst();
    }

    function init(){
        $this->vars = array_merge($_GET, $_POST);
        $this->server = $_SERVER;
    }

    function initConst(){
        $constNames = array('HTTP_HOST', 'SCRIPT_NAME', 'REMOTE_ADDR');
        foreach ($constNames as $constName){
            if(!defined($constName) and isset($this->server[$constName])){
                define($constName, $this->server[$constName]);
            }
        }
    }
}