<?php

namespace App\Container;

use jaspion\Container\ModelContainer;
use App\Models\Usuario;

/**
 *
 * @author gilmario
 */
class UsuarioContainer extends ModelContainer {

    public function __construct() {
        parent::__construct(Usuario::class);
    }

}
