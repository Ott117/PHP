<?php
$date1 = new DateTime('2018-01-08 15:23:51');
$date2 = $date1->diff(new DateTime('2018-12-20 00:00:00'));
echo $date2->days.' päeva veel sinu synnipaevani, ehk  '."\n";
echo $date2->y.' aastat'."\n";
echo $date2->m.' kuud'."\n";
echo $date2->d.' päeva'."\n";
echo $date2->h.' tundi'."\n";
echo $date2->i.' minutit'."\n";
echo $date2->s.' sekundit!'."\n";
?>