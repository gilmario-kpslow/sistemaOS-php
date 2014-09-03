<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;

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

        $dao = new \App\DAO\MarcaDAO();
        if ($tabela) {
            $dao->executa($tabela[$tabela]);
        } else {
            foreach ($tabelas as $key => $value) {
                $dao->executa($value);
            }
        }

        $this->index("Tabelas Criadas");
    }

    private function index($mensagem) {
        $index = new IndexController();
        $index->mensagem($mensagem);
        $index->render("index");
    }

    public function limparTabelasAction() {
        $tabelas = array();
        $tabelas['marca'] = 'truncate marca;';
        $tabelas['marca'] = 'truncate grupo;';
        foreach ($tabelas as $key => $value) {
            $dao = new \App\DAO\MarcaDAO();
            $dao->executa($value);
        }

        $this->index("Tabelas Limpas");
    }

    public function excluirTabelasAction() {
        $tabelas = array();
        $tabelas['marca'] = 'drop table marca;';
        $tabelas['marca'] = 'drop table grupo;';
        foreach ($tabelas as $key => $value) {
            $dao = new \App\DAO\MarcaDAO();
            $dao->executa($value);
        }

        $this->index("Tabelas Excluidas");
    }

}
