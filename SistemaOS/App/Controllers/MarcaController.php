<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;
use App\DAO\MarcaDAO;
use \App\Models\Marca;

/**
 * Description of MarcaController
 *
 * @author gilmario
 */
class MarcaController extends Controller {

    private $dao;

    public function __construct() {
        parent::__construct();
        $this->dao = new MarcaDAO();
    }

    public function inicioAction() {
        $this->addScript("marca");
        $this->render("index");
    }

    public function salvarAction() {
        $marca = new Marca();
        $marca->popularForm($_POST);
        $this->dao->salvar($marca);
        $this->mensagem("Registro salvo com sucesso!");
        $this->render("index");
    }

    public function consultarAction() {
        $this->view->marcas = $this->dao->listar();
        $this->render("consulta");
    }

}
