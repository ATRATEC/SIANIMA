<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClienteCadastro;

/**
 * Description of clientesPorCodigo
 *
 * @author Aloisio
 */

/**
 * Lista de Códigos para filtro de clientes
 *
 * @pw_element integer $codigo_cliente_omie Código<BR>Interno, gerado automaticamente na inclusão do cliente.<BR>Deve ser informado apenas para alteração/consulta.<BR>Na inclusão utilize a tag "codigo_cliente_integracao".
 * @pw_element string $codigo_cliente_integracao Código de Integração<BR>Utilizado no sistema legado.<BR>Informe na inclusão do cliente o código que você já utiliza no seu sistema.
 * @pw_complex clientesPorCodigo
 */
class clientesPorCodigo
{

    /**
     * Código<BR>Interno, gerado automaticamente na inclusão do cliente.<BR>Deve ser informado apenas para alteração/consulta.<BR>Na inclusão utilize a tag "codigo_cliente_integracao".
     *
     * @var integer
     */
    public $codigo_cliente_omie;

    /**
     * Código de Integração<BR>Utilizado no sistema legado.<BR>Informe na inclusão do cliente o código que você já utiliza no seu sistema.
     *
     * @var string
     */
    public $codigo_cliente_integracao;

}
