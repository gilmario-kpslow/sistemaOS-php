<?php

namespace App\Container;

use jaspion\Container\ModelContainer;
use App\Models\Equipamento;

/**
 *
 * @author gilmario
 */
class EquipamentoContainer extends ModelContainer {

    public function __construct() {
        parent::__construct(Equipamento::class);
    }

}
