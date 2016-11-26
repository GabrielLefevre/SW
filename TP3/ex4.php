<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 21/11/16
 * Time: 11:11
 */

//var_export($_POST);

$expected = array( 'nom', 'profession', 'age', 'email', 'prenom');
foreach( $expected AS $key ) {
    if (!empty($_POST[$key])) {
        ${$key} = $_POST[$key];
    } else {
        ${$key} = NULL;
    }
}


// Chaîne de caractères
if ( isset( $value ) && $value !== NULL ) {
// $value est une (vide éventuellement) string en PHP
}
// Entier
// 1
$age = $_POST['age'];
$age +=0;
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
if ($age < 18 ) exit ( "Il faut être majeur pour acceder à ce site!" );

//String
$nom = urlencode($_POST['nom']);
$prenom = urlencode($_POST['prenom']);
$profession = urlencode($_POST['profession']);
if(strlen($nom) <3 || strlen($profession) <3 || strlen($prenom) <3 || strlen($nom) >30 || strlen($prenom) >30 || strlen($profession) >30  ) {
    exit ( "Entrez des valeurs correctes ! " );
}

?>



<h3>Bravo !</h3>
<p>
    Vous avez correctement rempli le formulaire ! </br>
    <b>nom :</b>
    <?php
    //$nom = $_POST['nom'];
    echo $nom;
    ?> </br>
    <b>prénom :</b>
    <?php
    echo $prenom;
    ?> </br>
    <b> profession :</b>
    <?php
    echo $profession;
    ?>
</p>
