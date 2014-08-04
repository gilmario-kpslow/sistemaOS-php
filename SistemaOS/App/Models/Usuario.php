<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of Usuario
 *
 * @author gilmario
 */
class Usuario extends Model {

    /**
     * @formName=usuario
     * @columnDb=usuario
     */
    private $usuario;

    /**
     * @formName=nome
     * @columnDb=nome
     */
    private $nome;

    /**
     * @formName=senha
     * @columnDb=senha
     */
    private $senha;

    /**
     * @formName=ativo
     * @columnDb=ativo
     */
    private $ativo;

    /**
     * @formName=administrador
     * @columnDb=administrador
     */
    private $administrador;

    public function getUsuario() {
        return $this->usuario;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function getAtivo() {
        return $this->ativo;
    }

    public function getAdministrador() {
        return $this->administrador;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }

    public function setAtivo($ativo) {
        $this->ativo = $ativo;
    }

    public function setAdministrador($administrador) {
        $this->administrador = $administrador;
    }

}
