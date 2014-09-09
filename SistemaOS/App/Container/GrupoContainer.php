<?php

namespace App\Container;

use jaspion\Container\ModelContainer;
use App\Models\Grupo;

/**
 * Description of GrupoContainer
 *
 * @author gilmario
 */
class GrupoContainer extends ModelContainer {

    public function __construct() {
        parent::__construct(Grupo::class);
    }

}
