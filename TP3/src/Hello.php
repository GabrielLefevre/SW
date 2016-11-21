<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 10:31
 */

namespace TP3Web;


class Hello
{
    public static function bonjour() {
        Config::getLogger()->addInfo('Voici un exemple de message stocké dans le fichier log');
        $i = 18;
        Config::getLogger()->addInfo('Pourquoi ?', array('i' => $i));
        return "<h3>Bonjour Monde !!</h3>";
    }
}