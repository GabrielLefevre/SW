<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 21/11/16
 * Time: 11:07
 */
?>
<h3>Formulaire exercice4 :</h3>
<form action="ex4.php" method="post">
        Nom : </br><input type='text' name ='nom' placeholder='nom de la personne'> </br>
        prenom : </br><input type='text' name ='prenom' placeholder='prénom de la personne'> </br>
        profession : </br><input type='text' name ='profession' placeholder='profession de la personne'> </br>
        Age : </br><input type='number' name ='age' min="12" max="99"> </br>
        email : </br><input type='email' name ='email'> </br>
       <input type="submit" value="Valide" />
</form>

<h3>Formulaire exercice6 - Injections de données :</h3>
<form action="ex6.php" method="post">
    Nom : </br><input type='text' name ='nom' placeholder='nom de la personne'> </br>
    mot de passe : </br><input type='password' name ='prenom' placeholder='mot de passe de la personne'> </br>
    <input type="submit" value="Valide" />
</form>



<style>
    input {
        width: 40%;
        padding: 12px 15px;
        margin: 8px 0;
        box-sizing: border-box;
    }
    input:focus {
        background-color: lightblue;
    }

</style>