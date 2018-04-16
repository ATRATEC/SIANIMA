<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClienteCadastro;

/**
 * Description of clientes_lote_request
 *
 * @author Aloisio
 */

/**
 * Lote de cadastros de clientes para inclusão, limitado a 50 ocorrências por requisição.
 *
 * @pw_element integer $lote Número do lote
 * @pw_element clientes_cadastroArray $clientes_cadastro Lista de clientes para cadastro.
 * @pw_complex clientes_lote_request
 */
class clientes_lote_request
{

    /**
     * Número do lote
     *
     * @var integer
     */
    public $lote;

    /**
     * Lista de clientes para cadastro.
     *
     * @var clientes_cadastroArray
     */
    public $clientes_cadastro;

}
