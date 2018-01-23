<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 23/01/2018
 * Time: 18:05
 */

class template
{
    // klassi muutuja
    var $file = ''; // faili nimi
    var $content = false; // htmli sisu
    var $vars = array(); // nim ja paarid
    /**
     * template constructor.
     * @param string $file
     */
    public function __construct($file)
    {
        $this->file = $file; // m22rab nime
        $this->loadFile(); // m22ratud nimega faili sisu
    }

    function loadFile(){
        if(!is_dir(VIEW_DIR)){
            echo 'Ei ole leitud '.VIEW_DIR.' kataloogi<br />';
            exit;
        }

        $file = $this->file; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        $file = VIEW_DIR.$this->file; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        $file = VIEW_DIR.$this->file.'.html'; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }

        $file = VIEW_DIR.str_replace('.', '/', $this->file).'.html'; // abiasendus
        if(file_exists($file) and is_file($file) and is_readable($file)){
            $this->readFile($file);
        }
        if($this->content === false){
            echo 'Ei suutnud lugeda '.$this->file.' sisu <br />';
            exit;
        }
    }
    function readFile($file){

        $this->content = file_get_contents($file);
    }

    function set($name, $value){
        $this->vars[$name] = $value;
    }

    function add($name, $value){
        if(!isset($this->vars[$name])){
            $this->set($name, $value);
        } else {
            $this->vars[$name] = $this->vars[$name].$value;
        }
    }

    function parse(){
        $str = $this->content; // sisu algv22rtus
        foreach ($this->vars as $name=>$value){
            $str = str_replace('{'.$name.'}', $value, $str);
        }
        return $str;
    }
}