<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 10:50
 */

$tab = array('euro' => 1,
    'USD' => 1.08878,
    'JPY'=>113.014,
    'CNY' =>7.35709,
    'CHF'=> 1.08329);

function conversionDevise($mon,$devD,$devA) {
    global $tab;
    if(!is_numeric($mon)) {
        echo "Pas de valeur numérique !".PHP_EOL;
        return false;
    }
    if(!array_key_exists($devD, $tab) || !array_key_exists($devA, $tab)) {
        echo "PUne ou plusieurs devises ne sont pas dans notre tableau ".PHP_EOL;
        return false;
    }
    $monE = $mon/$tab[$devD];
    $monC = $monE*$tab[$devA];
    echo $mon." ".$devD." font ".$monC." ".$devA.PHP_EOL;
}

conversionDevise(50,'USD','CHF');