<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 21/11/16
 * Time: 11:10
 */
$expected = array( 'nom', 'prenom', 'profession' );
foreach( $expected AS $key ) {
    if ( !empty( $_POST[ $key ] ) ) {
        ${$key} = $_POST[ $key ];
    }
    else {
        ${$key} = NULL;
    }
}
?>