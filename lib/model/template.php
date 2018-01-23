<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 23/01/2018
 * Time: 16:32
 */
class template
{
    // classi muutujad
    var $file = ''; // html faili nimi
    var $content = false; // html sisu
    var $vars = array(); // nimed ja v22rtused

    public function __construct($file)
    {
        $this->file = $file; // nimi
        $this->loadFile(); // nimi2
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
        // sisu puudub
        if($this->content === false){
            echo 'Ei suutnud lugeda '.$this->file.' sisu <br />';
            exit;
        }
    }
    function readFile($file){

        $this->content = file_get_contents($file);
    }

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