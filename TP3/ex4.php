<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 21/11/16
 * Time: 11:11
 */
// Chaîne de caractères
if ( isset( $value ) && $value !== NULL ) {
// $value est une (vide éventuellement) string en PHP
}
// Entier
// 1
$age = $_POST['age'];
if ( !is_int( $age ) ) exit ( "$age n'est pas une valeur valide pour l'age!" );
// 2
if ( gettype( $age ) != 'integer' ) {
    exit ( "$age n'est pas une valeur valide pour l'age!" );
}
// 3
$age = intval( $_POST['age'] );
$age = ( int ) $_POST['age'];
if ( !settype ( $age, 'integer' ) ) {
    exit ( "$age n'est pas une valeur valide pour l'age!" );
}
// is_numeric($age) accepte zéro et les réels
is_numeric(3.14); // renvoie True
//La longueur
if ( strlen( $age ) > 3 ) exit ( "$age n'est pas une valeur valide pour l'age!" );