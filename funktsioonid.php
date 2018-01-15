<?php
/**
 * Created by PhpStorm.
 * User: 96hro
<?php
/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 15.12.2017
 * Time: 8:48
 */
// koostada f-on nimega looTabel, mis
// väljastab tabeli
// funktsiooni parameetriteks on tabeli ridade ja
// veergude arv
// tabeli sisuks on juhuslikud arvud vahemikus
// 10 - 99
// loo funktisoon nimega genereeriVarv,
// mis genereerib juhusliku värvi #XXXXXX kujul
// ja tagastab antud väärtus põhiskriptile
// vihje - vaata, mis moodi toimus värvi genereerimine
// värvilise teksti loomisel
// täineda looTabel funktsioon nii, et tabeli pesa
// taustavärv oleks juhuslikult genereeritud
// lisada lehe automaatne taaskäivitamine
header('Refresh: 0.2');
function genereeriVarv(){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0, 15);
        $juhuhex = dechex($juhuarv);
        $varv = $varv.$juhuhex;
    }
    return $varv;
}
function looTabel($ridadeArv, $veergudeArv){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= $ridadeArv; $reaNumber++){
        echo '<tr>';
        for($veeruNumber = 1; $veeruNumber <= $veergudeArv; $veeruNumber++){
            echo '<td style="background-color: '.genereeriVarv().';">';
            echo rand(10, 99);
            echo '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
looTabel(5, 7);
// Ülesanne
// Loo funktsioon nimega tabelTekst, mis võtab parameetrina
// 4 sõna ja väljastab 4-realise tabeli, mille
// pesades on parameetritega edastatud sõnad
// NB! Tabeli loomisel tuleb hakkama saada tsüklidega ;)
// ja muutujate dünaamilise defineerimisega
function tabelTekst($sona1, $sona2, $sona3, $sona4){
    echo '<table border="1">';
    for($reaNumber = 1; $reaNumber <= 4; $reaNumber++){
        echo '<tr>';
        echo '<td>';
        echo ${'sona'.$reaNumber};
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
tabelTekst('See', 'on', 'üks', 'tabel');