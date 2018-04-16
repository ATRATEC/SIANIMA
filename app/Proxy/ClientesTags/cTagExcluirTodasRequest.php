<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Solicitação de exclusão de todas as tags de um cliente.
 *
 * @pw_element integer $nCodCliente Código do cliente.<BR>(Código interno utilizado apenas na API, não aparece na tela).<BR>
 * @pw_element string $cCodIntCliente Código de integração do cliente.<BR>(Utilizado para integração via API, não aparece na tela)
 * @pw_complex cTagExcluirTodasRequest
 */

namespace App\Proxy\ClientesTags;

/**
 * Description of cTagExcluirTodasRequest
 *
 * @author Aloisio
 */
class cTagExcluirTodasRequest
{

    /**
     * Código do cliente.<BR>(Código interno utilizado apenas na API, não aparece na tela).<BR>
     *
     * @var integer
     */
    public $nCodCliente;

    /**
     * Código de integração do cliente.<BR>(Utilizado para integração via API, não aparece na tela)
     *
     * @var string
     */
    public $cCodIntCliente;

}
