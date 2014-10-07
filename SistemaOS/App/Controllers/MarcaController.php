<?php

namespace App\Controllers;

use App\DAO\MarcaDAO;
use App\Container\MarcaContainer;
use App\Controllers\BaseController;

/**
 * Description of MarcaController
 *
 * @author gilmario
 */
class MarcaController extends BaseController {

    public function __construct() {
        $dao = new MarcaDAO();
        $container = new MarcaContainer();
        parent::__construct($dao, $container);
    }

    public function cadastro() {
        $this->view->objeto = $this->getDao()->carregar(" id = {$_POST['id_objeto']}");
    }

    public function salvar() {
        $marca = $this->getContainer()->popularForm($_POST);
        if ($marca->getId() != '') {
            $this->getDao()->atualizar($marca, " id={$marca->getId()}");
        } else {
            $this->getDao()->salvar($marca);
        }
    }

    public function excluir() {
        $id = $_POST['id_objeto'];
        $this->getDao()->deletar(" id={$id} ;");
    }

}
