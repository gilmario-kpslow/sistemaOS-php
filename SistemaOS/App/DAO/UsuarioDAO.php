<?php

namespace App\DAO;

use jaspion\DAO\DAO;
use App\Models\Usuario;

/**
 * Description of UsuarioDAO
 *
 * @author gilmario
 */
class UsuarioDAO extends DAO {

    public function __construct() {
        parent::__construct("Mysql", new Usuario(), "usuario");
    }

}
