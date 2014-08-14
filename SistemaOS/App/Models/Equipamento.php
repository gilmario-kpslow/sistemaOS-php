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
     * @columnDb=numeroSerie
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
     * @entidade=GrupoEquipamento
     * @formName=grupoEquipamento
     * @columnDb=grupoEquipamento
     */
    private $grupoEquipamento;

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

    public function getGrupoEquipamento() {
        return $this->grupoEquipamento;
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

    public function setGrupoEquipamento($grupoEquipamento) {
        $this->grupoEquipamento = $grupoEquipamento;
    }

}
