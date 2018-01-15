<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 15/01/2018
 * Time: 23:52
 */
class tabel
{
    // klassi muutujad
    var $tabeliSisu = array();
    var $pealkirjad = array();
    var $veergudeArv;
    // klassi meetodid
    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }
    function lisaRida($rida){
        if(count($rida) != $this->veergudeArv){
            return false;
        }
        array_push($this->tabeliSisu, $rida);
        return true;
    }
    /*
     * Koosta funktsioon nimega lisaReaKirjeldusega
     * $tabel->lisaReaKirjeldusega(array('a'=>2, 'c'=>5, 'b'=>0));*/
    function lisaReaKirjeldusega($ridaKirjeldusega){
        $rida = array();
        foreach ($this->pealkirjad as $pealkiri){
            $rida[] = $ridaKirjeldusega[$pealkiri];
        }
        array_push($this->tabeliSisu, $rida);
        return true;
    }
    function prindiTabel(){
        echo '<pre>';
        foreach ($this->pealkirjad as $pealkiri){
            echo '<b>'.$pealkiri.'</b>'.' ';
        }
        echo "\n";
        foreach ($this->tabeliSisu as $rida){
            foreach ($rida as $reaElement){
                echo $reaElement.' ';
            }
            echo "\n";
        }
        echo '</pre>';
    }
}