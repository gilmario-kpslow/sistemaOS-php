<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controllers;

use App\DAO\UsuarioDAO;
use App\Models\Usuario;
use jaspion\Controllers\Controller;

/**
 * Description of UsuarioController
 *
 * @author gilmario
 */
class UsuarioController extends Controller {

    private $dao;

    public function __construct() {
        parent::__construct();
        $this->dao = new UsuarioDAO();
    }

    public function inicioAction() {
        $this->render("index");
    }

    public function salvarAction() {
        if (isset($_POST['acao'])) {
            
        }
    }

}
