<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;
use App\DAO\GrupoDAO;
use App\Models\Grupo;

/**
 * Description of GrupoController
 *
 * @author gilmario
 */
class GrupoController extends Controller {

    private $dao;

    public function __construct() {
        parent::__construct();
        $this->dao = new GrupoDAO();
    }

    public function inicioAction() {
        $this->render("index");
    }

    public function salvarAction() {
        $grupo = new Grupo();
        $grupo->popularForm($_POST);
        $this->dao->salvar($grupo);
        $this->mensagem("Registro salvo com sucesso!");
        $this->render("index");
    }

    public function consultarAction() {
        $this->view->grupos = $this->dao->listar();
        $this->render("consulta");
    }

}
