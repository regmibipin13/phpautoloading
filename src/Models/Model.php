<?php

namespace Models;

use Database\DatabaseConnection;

class Model extends DatabaseConnection
{
    public function db()
    {
        return $this->connection;
    }
}
