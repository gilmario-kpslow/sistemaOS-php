<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;
use App\DAO\MarcaDAO;
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
        $this->addScript('marca/marca');
        $this->consultarAction();
    }

    public function cadastroAction() {
        if (!empty($_POST)) {
            $this->view->marca = $this->dao->carregar(" id = {$_POST['id_marca']}");
        }
        $this->render("index");
    }

    public function salvarAction() {
        if (!empty($_POST)) {
            try {
                $marca = $this->container->popularForm($_POST);
                if ($marca->getId() != '') {
                    $this->dao->atualizar($marca, " id={$marca->getId()}");
                } else {
                    $this->dao->salvar($marca);
                }
                $this->mensagem("Registro salvo com sucesso!");
                $this->consultarAction();
            } catch (\Exception $ex) {
                $this->mensagem($ex->getMessage(), 1);
                $this->cadastroAction();
            }
        } else {
            $this->cadastroAction();
        }
    }

    public function consultarAction() {
        $this->addScript('marca/marca');
        $this->view->marcas = $this->dao->listar();
        $this->render("consulta");
    }

    public function excluirAction() {
        if (!empty($_POST)) {
            try {
                $id = $_POST['id_marca'];
                $this->dao->deletar(" id={$id} ;");
                $this->mensagem("Registro excluído com sucesso!");
            } catch (Exception $ex) {
                $this->mensagem($ex->getMessage(), 1);
                $this->consultarAction();
            }
        }
        $this->consultarAction();
    }

}
