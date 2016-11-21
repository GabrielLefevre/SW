<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 21/11/16
 * Time: 10:43
 */

require "vendor/autoload.php";
new \TP3Web\Config();
echo \TP3Web\Welcome::welcome('exemple');