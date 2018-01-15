<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 15.01.2018
 * Time: 8:51
 */
class tekst
{
    // klassi omadus(ed)
    // klassi muutuja(d)
    var $sone = '';
    // klassi tegevused
    // klassi meetodid
    // klassi konstruktor
    /**
     * tekst constructor.
     */
    public function __construct($s = '')
    {
        $this->maaraTekst($s);
    }
    // teksti määramine
    function maaraTekst($s){
        $this->sone = $s;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />';
    }
}