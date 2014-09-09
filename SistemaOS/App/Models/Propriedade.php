<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of Propriedade
 *
 * @author gilmario
 */
class Propriedade extends Model {

    /**
     * @formName=ordem
     * @columnDb=ordem
     */
    private $ordem;

    /**
     * @formName=equipamento
     * @columnDb=equipamento
     */
    private $equipamento;

    /**
     * @formName=nome
     * @columnDb=nome
     */
    private $nome;

    public function getOrdem() {
        return $this->ordem;
    }

    public function getEquipamento() {
        return $this->equipamento;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setOrdem($ordem) {
        $this->ordem = $ordem;
    }

    public function setEquipamento($equipamento) {
        $this->equipamento = $equipamento;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}
