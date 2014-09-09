<?php

namespace App\DAO;

use jaspion\DAO\DAO;
use App\Container\GrupoContainer;

/**
 * Description of GrupoDAO
 *
 * @author gilmario
 */
class GrupoDAO extends DAO {

    public function __construct() {
        parent::__construct("Mysql", new GrupoContainer(), "grupo");
    }

}
