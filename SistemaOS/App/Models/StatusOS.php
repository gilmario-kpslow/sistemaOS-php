<?php

namespace App\Models;

/**
 * Description of StatusOS
 *
 * @author gilmario
 */
class StatusOS {

    private $value = array(1 => 'Pendente', 2 => 'Atendimento', 3 => 'Concluida', 4 => 'Cancelada');

    public function getString($num) {
        return $this->value[$num];
    }

    public function getNumero($valor) {
        $this->value[$valor];
    }

}
