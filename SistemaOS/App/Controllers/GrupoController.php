<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\DAO\GrupoDAO;
use App\Container\GrupoContainer;

/**
 * Description of GrupoController
 *
 * @author gilmario
 */
class GrupoController extends BaseController {

    public function __construct() {
        $dao = new GrupoDAO();
        $container = new GrupoContainer();
        parent::__construct($dao, $container);
    }

    public function cadastro() {
        $this->view->objeto = $this->getDao()->carregar(" id = {$_POST['id_objeto']}");
    }

    public function salvar() {
        $grupo = $this->getContainer()->popularForm($_POST);
        if ($grupo->getId() != '') {
            $this->getDao()->atualizar($grupo, " id={$grupo->getId()}");
        } else {
            $this->getDao()->salvar($grupo);
        }
    }

    public function excluir() {
        $id = $_POST['id_objeto'];
        $this->getDao()->deletar(" id={$id} ;");
    }

}
