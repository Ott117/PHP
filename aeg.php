<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 8.01.2018
 * Time: 14:51
 */
date_default_timezone_set('Europe/Helsinki');
echo time().'<br />';
echo mktime(14, 56, 00, 1, 09, 2018).'<br />';
$tana = date("H:i");
echo $tana.'<br />';
/*
 * Koosta skript, mis väljastab vormi, mille kaudu
 * kasutajal on võimalik sisestada oma sünnikuupäev
 * Arvuta nuppu vajutamisega kasutajale antakse
 * teada, mitu kuud, päeva, tundi ja minutid on
 * jäänud antud tähtsa sündmuseni.
 *
 * Lahendus peab olema funktsionaalne - eraldi osad
 * realiseerida funtksioonidega,
 * võimalusel andmete salvestamiseks kasuta sobilik
 * andmetüüp - näiteks massiivid, sõned jne
 * */
function sisestaAndmed(){
    echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
    echo 'Päev: <input type="text" name="paev"><br />';
    echo 'Kuu: <input type="text" name="kuu"><br />';
    echo '<input type="submit" value="Arvuta!">';
    echo '</form>';
}
function aastaKontroll($paev, $kuu){
    $hetkeKuu = date('n');
    $hetkePaev = date('d');
    if($paev < $hetkePaev and $kuu == $hetkeKuu){
        $aasta = date('Y')+1;
    } else{
        $aasta = date('Y');
    }
    return $aasta;
}
function kauaOotan($paev, $kuu, $aasta){
    $aegHetkel = time();
    $synniAeg = mktime(0, 0, 0, $kuu, $paev, $aasta);
    $tulemus = array();
    $vaheSekundites = $synniAeg - $aegHetkel;
    $sekundid = $vaheSekundites % 60;
    $tulemus['sekundid'] = $sekundid;
    $vaheMinutites = $vaheSekundites / 60;
    $minutid = $vaheMinutites % 60;
    $tulemus['minutid'] = $minutid;
    $vaheTundides = $vaheMinutites / 60;
    $tunnid = $vaheTundides % 24;
    $tulemus['tunnid'] = $tunnid;
    $vahePaevades = $vaheTundides / 24;
    $paevad = $vahePaevades % 30.4;
    $tulemus['paevad'] = $paevad;
    $kuud = $vahePaevades / 30.4;
    settype($kuud, 'int');
    $tulemus['kuud'] = $kuud;
    return $tulemus;
}
function valjastaTulemus($andmed){
    echo 'Sünnipäevani on: <br />';
    foreach ($andmed as $element => $vaartus){
        if($vaartus != 0){
            echo $vaartus.' '.$element.'<br />';
        }
    }
}
sisestaAndmed();
$tulemus = kauaOotan($_POST['paev'], $_POST['kuu'], aastaKontroll($_POST['paev'], $_POST['kuu']));
valjastaTulemus($tulemus);