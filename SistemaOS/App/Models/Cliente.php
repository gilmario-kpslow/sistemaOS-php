<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of Cliente
 *
 * @author gilmario
 */
class Cliente {

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
     * @formName=endereco
     * @columnDb=endereco
     */
    private $endereco;

    /**
     * @formName=numero
     * @columnDb=numero
     */
    private $numero;

    /**
     * @formName=cep
     * @columnDb=cep
     */
    private $cep;

    /**
     * @formName=email
     * @columnDb=email
     */
    private $email;

    /**
     * @formName=telefone
     * @columnDb=telefone
     */
    private $telefone;

    /**
     * @formName=observacao
     * @columnDb=observacao
     */
    private $observacao;

    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getCep() {
        return $this->cep;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getObservacao() {
        return $this->observacao;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setCep($cep) {
        $this->cep = $cep;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

}
