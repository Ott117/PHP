<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 8.01.2018
 * Time: 12:55
 */
require_once 'fnk.php';
/*raamatuVorm();
$raamat = array(
    'title' => 'Peppa goes to london',
    'author' => 'Ladybird',
    'print' => 'Penguin',
    'status' => 'Valjas'
);*/
$raamat = loeVormist();
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');