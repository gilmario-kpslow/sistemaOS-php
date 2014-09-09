<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\DAO\EquipamentoDAO;
use App\DAO\GrupoDAO;
use App\DAO\MarcaDAO;
use App\Container\EquipamentoContainer;
use jaspion\Controllers\Controller;

/**
 *
 * @author gilmario
 */
class EquipamentoController extends Controller {

    private $dao;
    private $grupoDao;
    private $marcaDao;
    private $container;

    public function __construct() {
        parent::__construct();
        $this->dao = new EquipamentoDAO();
        $this->container = new EquipamentoContainer();
        $this->grupoDao = new GrupoDAO();
        $this->marcaDao = new MarcaDAO();
    }

    public function inicioAction() {
        $this->view->equipamentos = $this->dao->listar();
        $this->render("index");
    }

    public function cadastroAction() {
        $this->addScript("equipamento/acessorios");
        $this->view->grupos = $this->grupoDao->listar();
        $this->view->marcas = $this->marcaDao->listar();
        $this->render("cadastro");
    }

    public function salvarAction() {
        if (!empty($_POST)) {
            $equipamento = $this->container->popularForm($_POST);
            $this->dao->salvar($equipamento);
            $this->mensagem("Equipamento cadastrado");
            $this->inicioAction();
        } else {
            $this->cadastroAction();
        }
    }

}
