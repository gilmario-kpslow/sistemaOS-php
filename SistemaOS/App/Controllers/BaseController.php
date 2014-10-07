<?php

namespace App\Controllers;

use jaspion\Controllers\Controller;
use jaspion\Container\ModelContainer;
use jaspion\DAO\DAO;

/**
 * Description of BaseController
 *
 * @author gilmario
 */
abstract class BaseController extends Controller {

    private $dao;
    private $container;

    public function __construct(DAO $dao, ModelContainer $container) {
        parent::__construct();
        $this->dao = $dao;
        $this->container = $container;
    }

    public function inicioAction() {
        $this->consultarAction();
    }

    public function salvarAction() {
        if (!empty($_POST)) {
            try {
                $this->salvar();
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
        $this->addScript('base');
        $this->view->lista = $this->dao->listar();
        $this->render("consulta");
    }

    public function excluirAction() {
        if (!empty($_POST)) {
            try {
                $this->excluir();
                $this->mensagem("Registro excluído com sucesso!");
            } catch (\Exception $ex) {
                $this->mensagem($ex->getMessage(), 1);
                $this->consultarAction();
            }
        }
        $this->consultarAction();
    }

    function getDao() {
        return $this->dao;
    }

    function getContainer() {
        return $this->container;
    }

    function setDao($dao) {
        $this->dao = $dao;
    }

    function setContainer($container) {
        $this->container = $container;
    }

    public function cadastroAction() {
        if (!empty($_POST)) {
            $this->cadastro();
        }
        $this->render("index");
    }

    protected abstract function salvar();

    protected abstract function excluir();

    public abstract function cadastro();
}
