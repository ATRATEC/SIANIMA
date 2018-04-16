<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Resposta da solicitação de exclusão de todas as  tags de um cliente.
 *
 * @pw_element integer $nCodCliente Código do cliente.<BR>(Código interno utilizado apenas na API, não aparece na tela).<BR>
 * @pw_element string $cCodIntCliente Código de integração do cliente.<BR>(Utilizado para integração via API, não aparece na tela)
 * @pw_element string $cCodStatus Código do Status.
 * @pw_element string $cDesStatus Descrição do Status.
 * @pw_complex cTagExcluirTodasResponse
 */

namespace App\Proxy\ClientesTags;

/**
 * Description of cTagExcluirTodasResponse
 *
 * @author Aloisio
 */
class cTagExcluirTodasResponse
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

    /**
     * Código do Status.
     *
     * @var string
     */
    public $cCodStatus;

    /**
     * Descrição do Status.
     *
     * @var string
     */
    public $cDesStatus;

}
