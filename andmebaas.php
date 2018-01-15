<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 10.01.2018
 * Time: 13:32
 */
error_reporting(E_ALL);
$yhendus = mysqli_connect('localhost', 'ott_user', 'jfjHf5n45s', 'ott_test');
if(!$yhendus){
    echo 'Probleem andmebaasiserveri ühendamisega<br />';
    echo mysqli_connect_error($yhendus).'<br />';
    echo mysqli_connect_errno($yhendus).'<br />';
} else {
    echo 'On loodud ühendus andmebaasiga<br />';
    $eesnimi = 'Test';
    $sql = 'INSERT INTO kasutajad(eesnimi, perenimi, synnikuupaev) '.
        'VALUES(\''.$eesnimi.'\', \'Kasutaja\', \'1996-11-08\')';
    $tulemus = mysqli_query($yhendus, $sql);
    if(!$tulemus){
        echo 'Probleem päringuga <br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
    } else {
        echo 'Andmed on salvestatud<br />';
        $sql = 'SELECT * FROM kasutajad';
        $tulemus = mysqli_query($yhendus, $sql);
        if(!$tulemus){
            echo 'Probleem päringuga <br />';
            echo mysqli_error($yhendus).'<br />';
            echo mysqli_errno($yhendus).'<br />';
        } else{
            echo '<table border="1">';
            while($rida = mysqli_fetch_assoc($tulemus)){
                echo '<tr>';
                foreach ($rida as $element){
                    echo '<td>'.$element.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
    }
}