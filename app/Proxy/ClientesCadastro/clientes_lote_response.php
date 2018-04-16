<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClienteCadastro;

/**
 * Description of clientes_lote_response
 *
 * @author Aloisio
 */

/**
 * Resposta do processamento do lote de clientes cadastrados.
 *
 * @pw_element integer $lote Número do lote
 * @pw_element string $codigo_status Codigo do Status
 * @pw_element string $descricao_status Descrição do Status
 * @pw_complex clientes_lote_response
 */
class clientes_lote_response
{

    /**
     * Número do lote
     *
     * @var integer
     */
    public $lote;

    /**
     * Codigo do Status
     *
     * @var string
     */
    public $codigo_status;

    /**
     * Descrição do Status
     *
     * @var string
     */
    public $descricao_status;

}
