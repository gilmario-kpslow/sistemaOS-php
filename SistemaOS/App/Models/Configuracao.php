<?php

namespace App\Models;

use jaspion\Models\Model;

/**
 * Description of Configuracao
 *
 * @author gilmario
 */
class Configuracao extends Model {

    /**
     * @formName=id
     * @columnDb=id
     */
    private $id;

    /**
     * @formName=nomeEmpresa
     * @columnDb=nomeEmpresa
     */
    private $nomeEmpresa;

    /**
     * @formName=razaoSocial
     * @columnDb=razaoSocial
     */
    private $razaoSocial;

    /**
     * @formName=cnpj
     * @columnDb=cnpj
     */
    private $cnpj;

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
     * @formName=bairro
     * @columnDb=bairro
     */
    private $bairro;

    /**
     * @formName=cidade
     * @columnDb=cidade
     */
    private $cidade;

    /**
     * @formName=estado
     * @columnDb=estado
     */
    private $estado;

    /**
     * @formName=uf
     * @columnDb=uf
     */
    private $uf;

    /**
     * @formName=mensagem
     * @columnDb=mensagem
     */
    private $menssagem;

    /**
     * @formName=telefone
     * @columnDb=telefone
     */
    private $telefone;

    /**
     * @formName=email
     * @columnDb=email
     */
    private $email;

    /**
     * @formName=imagem
     * @columnDb=imagem
     */
    private $imagem;

    /**
     * @formName=enviarEmailOS
     * @columnDb=enviarEmailOS
     */
    private $enviarEmailOS;

    /**
     * @formName=emailRemetente
     * @columnDb=emailRemetente
     */
    private $emailRemetente;

    /**
     * @formName=serverSMTP
     * @columnDb=serverSMTP
     */
    private $serverSMTP;

    /**
     * @formName=portaSMTP
     * @columnDb=portaSMTP
     */
    private $portaSMTP;

    /**
     * @formName=senhaSMTP
     * @columnDb=senhaSMTP
     */
    private $senhaSMTP;

    public function getId() {
        return $this->id;
    }

    public function getNomeEmpresa() {
        return $this->nomeEmpresa;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function getCnpj() {
        return $this->cnpj;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getBairro() {
        return $this->bairro;
    }

    public function getCidade() {
        return $this->cidade;
    }

    public function getEstado() {
        return $this->estado;
    }

    public function getUf() {
        return $this->uf;
    }

    public function getMenssagem() {
        return $this->menssagem;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getEnviarEmailOS() {
        return $this->enviarEmailOS;
    }

    public function getEmailRemetente() {
        return $this->emailRemetente;
    }

    public function getServerSMTP() {
        return $this->serverSMTP;
    }

    public function getPortaSMTP() {
        return $this->portaSMTP;
    }

    public function getSenhaSMTP() {
        return $this->senhaSMTP;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNomeEmpresa($nomeEmpresa) {
        $this->nomeEmpresa = $nomeEmpresa;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function setUf($uf) {
        $this->uf = $uf;
    }

    public function setMenssagem($menssagem) {
        $this->menssagem = $menssagem;
    }

    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    public function setEnviarEmailOS($enviarEmailOS) {
        $this->enviarEmailOS = $enviarEmailOS;
    }

    public function setEmailRemetente($emailRemetente) {
        $this->emailRemetente = $emailRemetente;
    }

    public function setServerSMTP($serverSMTP) {
        $this->serverSMTP = $serverSMTP;
    }

    public function setPortaSMTP($portaSMTP) {
        $this->portaSMTP = $portaSMTP;
    }

    public function setSenhaSMTP($senhaSMTP) {
        $this->senhaSMTP = $senhaSMTP;
    }

}
