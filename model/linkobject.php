<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 23/01/2018
 * Time: 18:01
 */

class linkobject extends http
{
var $baseLink = false; // põhilink
var $protocol = 'http://';
var $eq = '=';
var $delim = '&amp;';

public function __construct()
    {
        parent::__construct();
        $this->baseLink = $this->protocol.HTTP_HOST.SCRIPT_NAME;
        echo $this->baseLink;
    }

function addToLink(&$link, $name, $value){
        if($link != ''){
            $link = $link.$this->delim;
        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($value);
        echo $link.'<br />';
    }
}