<?php
require_once __DIR__ . "/../config/database.php";


class User {
    private $pdo;

    public function __construct() {
       // connexio a la base de dades
    }

    public function register($username, $password) {
        //registrar usuari
    }

    public function login($username, $password) {
        //loguejar usuari
    }
}