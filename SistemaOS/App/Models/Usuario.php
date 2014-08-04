<?php

namespace App\Models;

use jaspion\Models\Model;

;

/**
 * Description of Usuario
 *
 * @author gilmario
 */
class Usuario extends Model {

    /**
     * @formName=usuario
     * @columnDb=usuario
     */
    private $usuario;

    /**
     * @formName=nome
     * @columnDb=nome
     */
    private $nome;

    /**
     * @formName=usuario
     * @columnDb=usuario
     */
    private $senha;

    /**
     * @formName=senha
     * @columnDb=senha
     */
    private $ativo;

    /**
     * @formName=administrador
     * @columnDb=administrador
     */
    private $administrador;

}
