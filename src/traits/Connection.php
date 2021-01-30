<?php
namespace src\traits;

use src\database\Connection as Connect;

trait Connection {

    private $con;

    public function __construct()
    {
       $this->con = Connect::conect();
    }

}