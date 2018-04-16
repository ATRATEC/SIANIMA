<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClientesTags;

/**
 * Description of cTagIncluirResponse
 *
 * @author Aloisio
 */

/**
 * Resposta da solicitação de inclusão de tags de um cliente.
 *
 * @pw_element integer $nCodCliente Código do cliente.<BR>(Código interno utilizado apenas na API, não aparece na tela).<BR>
 * @pw_element string $cCodIntCliente Código de integração do cliente.<BR>(Utilizado para integração via API, não aparece na tela)
 * @pw_element string $cCodStatus Código do Status.
 * @pw_element string $cDesStatus Descrição do Status.
 * @pw_element tagsListaArray $tagsLista Tags do Cliente ou Fornecedor.
 * @pw_complex cTagIncluirResponse
 */
class cTagIncluirResponse
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

    /**
     * Tags do Cliente ou Fornecedor.
     *
     * @var tagsListaArray
     */
    public $tagsLista;

}
