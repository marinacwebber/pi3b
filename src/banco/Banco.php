<?php

class Banco {

    protected $pdo;

    function __construct() {
        $dbpath = 'pgsql:host=localhost;port=5432;dbname=imdaz_db';
        $user = 'postgres';
        $password = '123456';

        $this->pdo = new PDO($dbpath, $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}

