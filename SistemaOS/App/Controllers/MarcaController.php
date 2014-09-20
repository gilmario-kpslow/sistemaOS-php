<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;
use App\DAO\MarcaDAO;
use \App\Models\Marca;
use App\Container\MarcaContainer;

/**
 * Description of MarcaController
 *
 * @author gilmario
 */
class MarcaController extends Controller {

    private $dao;
    private $container;

    public function __construct() {
        parent::__construct();
        $this->dao = new MarcaDAO();
        $this->container = new MarcaContainer();
    }

    public function inicioAction() {
        $this->consultarAction();
    }

    public function cadastroAction($id = null) {
        $this->addScript("marca");
        if ($id) {
            editar($id);
        }
        $this->render("index");
    }

    public function salvarAction() {
        if (!empty($_POST)) {
            $marca = $this->container->popularForm($_POST);
            $this->dao->salvar($marca);
            $this->mensagem("Registro salvo com sucesso!");
            $this->consultarAction();
        } else {
            $this->cadastroAction();
        }
    }

    public function consultarAction() {
        $this->view->marcas = $this->dao->listar();
        $this->render("consulta");
    }

}
