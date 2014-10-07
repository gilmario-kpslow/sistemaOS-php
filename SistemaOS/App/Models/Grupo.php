<?php

namespace App\Models;

/**
 * Description of GrupoEquipamento
 *
 * @author gilmario
 */
class Grupo {

    /**
     * @formName=id_objeto
     * @columnDb=id
     * @EInteiro
     */
    protected $id;

    /**
     * @formName=nome
     * @columnDb=nome
     */
    protected $nome;

    /**
     * @formName=descricao
     * @columnDb=descricao
     */
    protected $descricao;

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
