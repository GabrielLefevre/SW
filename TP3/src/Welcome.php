<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 21/11/16
 * Time: 10:42
 */

namespace TP3Web;


class Welcome {
    public static function welcome($file) {
        $file = file_get_contents(__DIR__.'/..'.ASSETS.'md/'.$file.'.md');
        $parsedown = new \ParsedownExtra();
        $html = $parsedown->text($file);
        if ($file) {
            return $html;
        } else {
            return __DIR__."<br>";
        }
    }
}