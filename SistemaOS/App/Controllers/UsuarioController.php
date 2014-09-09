<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\DAO\UsuarioDAO;
use App\Container\UsuarioContainer;
use jaspion\Controllers\Controller;

/**
 * Description of UsuarioController
 *
 * @author gilmario
 */
class UsuarioController extends Controller {

    private $dao;
    private $container;

    public function __construct() {
        parent::__construct();
        $this->dao = new UsuarioDAO();
        $this->container = new UsuarioContainer();
    }

    public function inicioAction() {
        $this->view->usuarios = $this->dao->listar();
        $this->render("index");
    }

    public function cadastroAction() {
        $this->render("cadastro");
    }

    public function salvarAction() {
        if (!empty($_POST)) {
            $usuario = $this->container->popularForm($_POST);
            $this->dao->salvar($usuario);
            $this->mensagem("Usuario cadastrado");
            $this->inicioAction();
        } else {
            $this->cadastroAction();
        }
    }

}
