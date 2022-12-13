<?php

    declare(strict_types=1);
    include_once ('./config/config.php');

    class DB {

        private $host;
        private $db;
        private $user;
        private $pass;
        public $connection;


        public function __construct(){
            $this->host = constant('DB_HOST');
            $this->db = constant('DB');
            $this->user = constant('DB_USER');
            $this->pass = constant('DB_PASS');
        }

        public function connect(): mysqli {
            $connection = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($connection->connect_errno) {
                die('Error de conexión: ' . $connection->connect_errno);
            }
            return $connection;
        }
    }
?>