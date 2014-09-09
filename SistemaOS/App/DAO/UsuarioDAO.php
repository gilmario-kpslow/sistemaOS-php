<?php

namespace App\DAO;

use jaspion\DAO\DAO;
use App\Container\UsuarioContainer;

/**
 * Description of UsuarioDAO
 *
 * @author gilmario
 */
class UsuarioDAO extends DAO {

    public function __construct() {
        parent::__construct("Mysql", new UsuarioContainer(), "usuario");
    }

}
