<?php

    define('HOST', 'localhost');
    define('USER', 'root');
    define('SENHA', '');
    define('DB', 'SiteNot');

    class Connect{
        protected $connection;

        function __construct() {
            $this->connectDatabase();
        }

        function connectDatabase() {
            try{
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DB, USER, SENHA);
            } catch (PDOException $e) {
                echo "Tivmos um erro " .$e->getMessage();
                die();
            }
        }

    }

    $testConnect = new Connect();

    ?>