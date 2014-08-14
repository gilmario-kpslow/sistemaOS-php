<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of GrupoEquipamento
 *
 * @author gilmario
 */
class GrupoEquipamento extends Model {

    /**
     * @formName=id
     * @columnDb=id
     */
    private $id;

    /**
     * @formName=nome
     * @columnDb=nome
     */
    private $nome;

    /**
     * @formName=abreviacao
     * @columnDb=abreviacao
     */
    private $abreviacao;

    /**
     * @formName=descricao
     * @columnDb=descricao
     */
    private $descricao;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getAbreviacao() {
        return $this->abreviacao;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setAbreviacao($abreviacao) {
        $this->abreviacao = $abreviacao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

}
