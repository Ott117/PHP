<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 22/01/2018
 * Time: 21:39
 */



require_once 'tabel.php';
class htmlTabel extends tabel
{
    var $taustaVarv = '';
    public function __construct(array $pealkirjad, $taustaVarv)
    {
        parent::__construct($pealkirjad);
        $this->setTaustaVarv($taustaVarv);
    }
    /**
     * @param string $taustaVarv
     */
    public function setTaustaVarv($taustaVarv)
    {
        $this->taustaVarv = $taustaVarv;
    }
    function prindiTabel()
    {
        echo '<table border="1">';
        echo '<tr>';
        foreach ($this->pealkirjad as $pealkiri){
            echo '<th bgcolor="'.$this->taustaVarv.'">'.$pealkiri.'</th>';
        }
        echo '</tr>';
        foreach ($this->tabeliSisu as $reaNumber=>$reaAndmed){
            echo '<tr>';
            foreach ($reaAndmed as $reaElement){
                echo '<td bgcolor="'.$this->taustaVarv.'">'.$reaElement.'</td>';
            }
            echo '</tr>';
        }
        echo '</table>';
    }
}