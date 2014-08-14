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

    public function indexAction() {
        $this->addScript("marca");
        $this->render("index");
    }

    public function salvar() {
        $marca = new Marca();
        $marca->popularForm($_POST);
        $this->dao->salvar($marca);
        $this->render("index");
    }

}
