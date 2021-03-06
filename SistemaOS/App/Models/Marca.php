<?php

namespace App\Models;

/**
 * Description of Marca
 *
 * @author gilmario
 */
class Marca {

    /**
     * @formName=id_objeto
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
