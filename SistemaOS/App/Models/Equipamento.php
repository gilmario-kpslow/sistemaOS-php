<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of Equipamento
 *
 * @author gilmario
 */
class Equipamento extends Model {

    /**
     * @formName=id
     * @columnDb=id
     */
    private $id;

    /**
     * @formName=numeroSerie
     * @columnDb=numero_serie
     */
    private $numeroSerie;

    /**
     * @formName=descricao
     * @columnDb=descricao
     */
    private $descricao;

    /**
     * @formName=modelo
     * @columnDb=modelo
     */
    private $modelo;

    /**
     * @formName=observacao
     * @columnDb=observacao
     */
    private $observacao;

    /**
     * @entidade=Marca
     * @formName=marca
     * @columnDb=marca
     */
    private $marca;

    /**
     * @entidade=Grupo
     * @formName=grupo
     * @columnDb=grupo
     */
    private $grupo;

    public function getId() {
        return $this->id;
    }

    public function getNumeroSerie() {
        return $this->numeroSerie;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getGrupo() {
        return $this->grupo;
    }

    public function setGrupo($grupo) {
        $this->grupo = $grupo;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNumeroSerie($numeroSerie) {
        $this->numeroSerie = $numeroSerie;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }

}
