<?php

namespace App\DAO;

use jaspion\DAO\DAO;
use App\Container\EquipamentoContainer;

/**
 * Description of GrupoDAO
 *
 * @author gilmario
 */
class EquipamentoDAO extends DAO {

    public function __construct() {
        parent::__construct("Mysql", new EquipamentoContainer());
    }

}
