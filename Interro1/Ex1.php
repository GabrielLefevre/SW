<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 10:44
 */

$tab = [1,2,3,4,5,6,7,8,9];
$sum=0;
for ($i=0; $i<count($tab);$i++) {
    $sum = ($sum + $tab[$i]);
}



echo "la somme des entiers : ".$sum.PHP_EOL;

$max = 0;

for ($i=0; $i<count($tab);$i++) {
    if($tab[$i]>$max) {
        $max = $tab[$i];
    }
}

echo "le plus grand entier : ".$max.PHP_EOL;