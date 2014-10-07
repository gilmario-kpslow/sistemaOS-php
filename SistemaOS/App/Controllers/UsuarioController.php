<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\Controllers\BaseController;
use App\DAO\UsuarioDAO;
use App\Container\UsuarioContainer;

/**
 * Description of UsuarioController
 *
 * @author gilmario
 */
class UsuarioController extends BaseController {

    public function __construct() {
        $dao = new UsuarioDAO();
        $container = new UsuarioContainer();
        parent::__construct($dao, $container);
    }

    public function cadastro() {
        $this->view->objeto = $this->getDao()->carregar(" usuario = {$_POST['id_objeto']}");
    }

    public function salvar() {
        $usuario = $this->getContainer()->popularForm($_POST);
        if ($usuario->getUsuario() != '') {
            $this->getDao()->atualizar($usuario, " usuario={$usuario->getUsuario()}");
        } else {
            $this->getDao()->salvar($usuario);
        }
    }

    protected function excluir() {
        $id = $_POST['id_objeto'];
        $this->getDao()->deletar(" usuario={$id} ;");
    }

}
