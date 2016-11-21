<?php
/**
 * Created by PhpStorm.
 * User: gabriel.lefevre
 * Date: 14/11/16
 * Time: 10:41
 */

namespace TP3Web;


use Monolog\Logger;
use Monolog\Handler\FirePHPHandler;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Processor\IntrospectionProcessor;


class Config {
    public static $logger;
    /**
     * Config constructor.
     */
    public function __construct() {
        date_default_timezone_set('Europe/Paris');
        Define("DIR", "/");
        $dateFormat = "[D j/m/y H:i:s]";
        $output = "%datetime% %channel%.%level_name%: %message% %context% %extra%\n";
        $formatter = new LineFormatter($output, $dateFormat);
// Create the logger
        self::$logger = new Logger('trace');
// Now add some handlers
        $stream =new StreamHandler(__DIR__.'/../'.'/td_tp3.log', Logger::DEBUG);
        $stream->setFormatter($formatter);
        self::$logger->pushHandler($stream);
        self::$logger->pushHandler(new FirePHPHandler());
        self::$logger->pushProcessor(new IntrospectionProcessor());
//configuration pour la base de données
        define('DB_TYPE', 'mysql');
        define('DB_HOST', 'ipabdd.iut-lens.univ-artois.fr');
        define('DB_NAME', 'gabriellefevre');
        define('DB_USER', 'gabriel.lefevre');
        define('DB_PASS', 'JRQW0Dpt');
        define ('ASSETS', DIR.'public/');
    }
    public static function getLogger() {
        return self::$logger;
    }
}