<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 08/01/2018
 * Time: 12:37
 */
*Koosta funktsioon, mis väljastab vormi
*Vormi ül on sisestada andmed raamatu kohta:
*vormo väljade nimedeks kasuta:
*'title','autohor','print','status'
*Vormitöötlus hakkab töötama vormi välja kutsuvas failis
*/

function raamatVorm(){
    echo '
<form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Kasutaja: <input type="text" name="kasutaja"><br />
        Parool: <input type="password" name="parool"><br />
        <input type="submit" value="Saada"> 
    </form>