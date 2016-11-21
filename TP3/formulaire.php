<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 21/11/16
 * Time: 11:07
 */
?>

<form action="ex4.php" method="post">
        Nom : <input type='text' name ='nom' placeholder='nom de la personne'> </br>
        prénom : <input type='text' name ='prénom' placeholder='prénom de la personne'> </br>
        profession : <input type='text' name ='profession' placeholder='profession de la personne'> </br>
        Age : <input type='number' name ='age' min="12" max="99"> </br>
        Email : <input type='email' name ='Email'> </br>
       <input type="submit" value="Valide" />
</form>