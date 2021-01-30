<?php
namespace src\database\models;

use src\traits\Read;
use src\traits\Create;
use src\traits\Delete;
use src\traits\Update;
use src\traits\Connection;

abstract class Base extends Model {

    use Create, Read, Update, Delete, Connection;

}