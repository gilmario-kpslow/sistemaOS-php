<?php

namespace App\DAO;

use jaspion\DAO\DAO;
use App\Container\MarcaContainer;

/**
 * Description of MarcaDAO
 *
 * @author gilmario
 */
class MarcaDAO extends DAO {

    public function __construct() {
        parent::__construct("Mysql", new MarcaContainer(), "marca");
    }

}
