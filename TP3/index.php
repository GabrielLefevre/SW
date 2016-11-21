<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 10:33
 */

require "vendor/autoload.php";

use \TP3Web\Config;
use \TP3Web\Hello;

new Config();
echo Hello::bonjour();