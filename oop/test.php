<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 15.01.2018
 * Time: 12:23
 */
require_once 'tekst.php';
// loome reaalse objekti tekst class abil
$minuTekst = new tekst();
// teostame testvaade antud objektist
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti sone väärtus
$minuTekst->prindiTekst();