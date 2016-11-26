<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 26/11/16
 * Time: 11:05
 */

try
{
    $bdd = new PDO('mysql:host=ipabdd.iut-lens.univ-artois.fr; dbname=gabriellefevre' , 'gabriel.lefevre' , 'JRQW0Dpt'); // acces a la BDD
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}