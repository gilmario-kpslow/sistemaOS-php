<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of Marca
 *
 * @author gilmario
 */
class Marca extends Model {

    /**
     * @formName=id
     * @columnDb=id
     */
    protected $id;

    /**
     * @formName=nome
     * @columnDb=nome
     */
    protected $nome;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

}
