<?php

namespace App\Container;

use jaspion\Container\ModelContainer;
use App\Models\Marca;

/**
 *
 *
 * @author gilmario
 */
class MarcaContainer extends ModelContainer {

    public function __construct() {
        parent::__construct(Marca::class);
    }

    public function getTable() {
        return "marca";
    }

}
