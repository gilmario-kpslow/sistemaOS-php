<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;
use App\DAO\GrupoDAO;
use App\Container\GrupoContainer;

/**
 * Description of GrupoController
 *
 * @author gilmario
 */
class GrupoController extends Controller {

    private $dao;
    private $container;

    public function __construct() {
        parent::__construct();
        $this->dao = new GrupoDAO();
        $this->container = new GrupoContainer();
    }

    public function inicioAction() {
        $this->consultarAction();
    }

    public function cadastroAction() {
        $this->render("index");
    }

    public function salvarAction() {
        $grupo = $this->container->popularBanco($_POST);
        $this->dao->salvar($grupo);
        $this->mensagem("Registro salvo com sucesso!");
        $this->consultarAction();
    }

    public function consultarAction() {
        $this->view->grupos = $this->dao->listar();
        $this->render("consulta");
    }

}
