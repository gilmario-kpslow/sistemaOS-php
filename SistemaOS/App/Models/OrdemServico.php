<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of OrdemServico
 *
 * @author gilmario
 */
class OrdemServico extends Model {

    /**
     * @formName=id
     * @columnDb=id
     */
    private $id;

    /**
     * @formName=numeroOS
     * @columnDb=numeroOS
     */
    private $numeroOS;

    /**
     * @formName=dataEmissao
     * @columnDb=dataEmissao
     */
    private $dataEmissao;

    /**
     * @formName=dataInicio
     * @columnDb=dataInicio
     */
    private $dataInicio;

    /**
     * @formName=dataTermino
     * @columnDb=dataTermino
     */
    private $dataTermino;

    /**
     * @formName=valor
     * @columnDb=valor
     */
    private $valor;

    /**
     * @formName=descricaoDefeito
     * @columnDb=descricaoDefeito
     */
    private $descricaoDefeito;

    /**
     * @formName=observacoes
     * @columnDb=observacoes
     */
    private $observacoes;

    /**
     * @entidade=Cliente
     * @formName=cliente
     * @columnDb=cliente
     */
    private $cliente;

    /**
     * @entidade=Equipamento
     * @formName=equipamento
     * @columnDb=equipamento
     */
    private $equipamento;

    /**
     * @entidade=Usuario
     * @formName=usuario
     * @columnDb=usuario
     */
    private $emissor;

    /**
     * @enum=StatusOS
     * @formName=status
     * @columnDb=status
     *
     */
    private $status;

    public function getId() {
        return $this->id;
    }

    public function getNumeroOS() {
        return $this->numeroOS;
    }

    public function getDataEmissao() {
        return $this->dataEmissao;
    }

    public function getDataInicio() {
        return $this->dataInicio;
    }

    public function getDataTermino() {
        return $this->dataTermino;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getDescricaoDefeito() {
        return $this->descricaoDefeito;
    }

    public function getObservacoes() {
        return $this->observacoes;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function getEquipamento() {
        return $this->equipamento;
    }

    public function getEmissor() {
        return $this->emissor;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNumeroOS($numeroOS) {
        $this->numeroOS = $numeroOS;
    }

    public function setDataEmissao($dataEmissao) {
        $this->dataEmissao = $dataEmissao;
    }

    public function setDataInicio($dataInicio) {
        $this->dataInicio = $dataInicio;
    }

    public function setDataTermino($dataTermino) {
        $this->dataTermino = $dataTermino;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setDescricaoDefeito($descricaoDefeito) {
        $this->descricaoDefeito = $descricaoDefeito;
    }

    public function setObservacoes($observacoes) {
        $this->observacoes = $observacoes;
    }

    public function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    public function setEquipamento($equipamento) {
        $this->equipamento = $equipamento;
    }

    public function setEmissor($emissor) {
        $this->emissor = $emissor;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
