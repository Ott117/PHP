<?php
/**
 * Created by PhpStorm.
 * User: 96hro
 * Date: 15/01/2018
 * Time: 23:33
 */
// defineeri 8 muutujat, mille väärtusteks
// on täisarvud, reaalarvud, sõned ja
// boolean väärtused
$var1 = 5;
$var2 = 5.0;
$var3 = '5';
$var4 = 2;
$var5 = 2.0;
$var6 = '2';
$var7 = true;
$var8 = false;
// väljastame väärtused ja nende tüübid
// gettype(muutuja)
echo $var1.' - '.gettype($var1).'<br />';
echo $var2.' - '.gettype($var2).'<br />';
echo $var3.' - '.gettype($var3).'<br />';
echo $var4.' - '.gettype($var4).'<br />';
echo $var5.' - '.gettype($var5).'<br />';
echo $var6.' - '.gettype($var6).'<br />';
echo $var7.' - '.gettype($var7).'<br />';
echo $var8.' - '.gettype($var8).'<br />';
// võrdleme erinevad väärtused omavahel
// == - võrdne
$tulemus = $var1 == $var2;
echo 'kas $var1 == $var2? - '.$tulemus;
echo '<br />';
$tulemus = $var1 == $var3;
echo 'kas $var1 == $var3? - '.$tulemus;
echo '<br />';
// === - võrdne - väärtus ja tüüp
$tulemus = $var1 === $var3;
echo 'kas $var1 === $var3? - '.$tulemus;
echo '<br />';
// != - ei võrdu
$tulemus = $var1 != $var4;
echo 'kas $var1 != $var4? - '.$tulemus;
echo '<hr />';
// ++ --
$a = 2; $b = 5;
$c = $a++; // a = 2; b = 5; - ei ole nii
$d = $b--; // c = 3; d = 4; - ei ole nii
echo 'a = '.$a.
    '; b = '.$b.
    '; c = '.$c.
    '; d = '.$d.'<br />';
$a = 2; $b = 5;
$c = ++$a; // a = 3; b = 4;
$d = --$b; // c = 3; d = 4;
echo 'a = '.$a.
    '; b = '.$b.
    '; c = '.$c.
    '; d = '.$d.'<br />';
// katsetame sõne suurendamist
$s = '5';
$s++;
echo $s.'<br />';
// konstandite defineerimine ja kasutamine
define('NUMBER', 5); // defineerimine
echo NUMBER.'<br />';
//NUMBER++; - ei saa olla