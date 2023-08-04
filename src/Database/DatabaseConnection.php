<?php

namespace Database;

use mysqli;

class DatabaseConnection
{
    private $host;
    private $username;
    private $password;
    private $dbName;

    public $connection;


    public function __construct($h, $u, $p, $d)
    {
        $this->host = $h;
        $this->username = $u;
        $this->password = $p;
        $this->dbName = $d;
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }
}
