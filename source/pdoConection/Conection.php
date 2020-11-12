<?php

namespace Source\pdoConection;
use PDO;
require_once __DIR__ . "../../DB_CONF.php";

class Conection
{
    public $conection;
    public $sql;

    public function __construct()
    {
        $this->getInstance();
    }

    public function getInstance()
    {
        $this->conection = new pdo("mysql:host=".BD['host'].";dbname=".BD['data_base']."",
            BD['user'], BD['password'],
            array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
                PDO::ATTR_CASE, PDO::CASE_NATURAL));

        if (!$this->conection) {
            print_r($this->conection->errorInfo());
        }
        return $this->conection;
    }

    public function prepare($sql)
    {
        return $select = self::getInstance()->prepare($sql);
    }



}
