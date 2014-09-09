<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;
use App\Controllers\InicioController;

/**
 * Description of UtilController
 *
 * @author gilmario
 */
class UtilController extends Controller {

    public function criarTabelasAction($tabela = null) {
        $tabelas = array();
        $tabelas['marca'] = "CREATE TABLE marca(id integer AUTO_INCREMENT PRIMARY KEY ,nome varchar(25) not null UNIQUE);";
        $tabelas['grupo'] = "CREATE TABLE grupo(id integer AUTO_INCREMENT PRIMARY KEY ,nome varchar( 25 ) NOT NULL UNIQUE ,descricao text);";
        $tabelas['usuario'] = "CREATE TABLE usuario(usuario integer AUTO_INCREMENT PRIMARY KEY ,nome varchar( 25 ) NOT NULL UNIQUE, senha varchar( 25 ), ativo boolean not null default false, administrador boolean not null default false);";
        $tabelas['equipamento'] = "CREATE TABLE equipamento(id integer AUTO_INCREMENT PRIMARY KEY , numero_serie varchar(40),descricao varchar(255) , modelo varchar(40), observacao text, marca integer not null, grupo integer not null, foreign key(marca) references marca(id), foreign key(grupo) references grupo(id));";

        $dao = new \App\DAO\MarcaDAO();
        if ($tabela) {
            $dao->executa($tabela[$tabela]);
        } else {
            foreach ($tabelas as $key => $value) {
                $dao->executa($value);
            }
        }
        $this->inicioAction("Tabelas Criadas");
    }

    public function inicioAction($mensagem = "") {
        $index = new InicioController();
        $index->mensagem($mensagem);
        $index->render("index");
    }

    public function limparTabelasAction() {
        $tabelas = array();
        $tabelas['marca'] = 'truncate marca;';
        $tabelas['grupo'] = 'truncate grupo;';
        $tabelas['usuario'] = 'truncate usuario;';
        $tabelas['equipamento'] = 'truncate equipamento;';
        foreach ($tabelas as $key => $value) {
            $dao = new \App\DAO\MarcaDAO();
            $dao->executa($value);
        }

        $this->inicioAction("Tabelas Limpas");
    }

    public function excluirTabelasAction() {
        $tabelas = array();
        $tabelas['equipamento'] = 'drop table equipamento;';
        $tabelas['usuario'] = 'drop table usuario;';
        $tabelas['marca'] = 'drop table marca;';
        $tabelas['grupo'] = 'drop table grupo;';
        foreach ($tabelas as $key => $value) {
            $dao = new \App\DAO\MarcaDAO();
            $dao->executa($value);
        }
        $this->inicioAction("Tabelas Excluidas");
    }

}
