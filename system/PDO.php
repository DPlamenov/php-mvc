<?php
/**
 * Project: php-mvc.
 * File: PDO.php
 * Developer: dplamenov@icloud.com
 * Date: 22.1.2019 г.
 * Time: 10:39
 */

namespace Application;


class PDO
{
    private $pdo;
    private static $instance = null;
    protected function __construct($dsn, $user, $password)
    {
        $this->pdo = new PDO($dsn, $user, $password);
    }

    public static function init($dsn, $user, $password)
    {
        if (self::$instance == null) {
            self::$instance = new self($dsn, $user, $password);
        }
    }
}