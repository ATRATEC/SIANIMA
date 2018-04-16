<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClienteCadastro;

/**
 * Description of clientes_status
 *
 * @author Aloisio
 */

/**
 * Status de retorno do cadastro de clientes.
 *
 * @pw_element integer $codigo_cliente_omie Código<BR>Interno, gerado automaticamente na inclusão do cliente.<BR>Deve ser informado apenas para alteração/consulta.<BR>Na inclusão utilize a tag "codigo_cliente_integracao".
 * @pw_element string $codigo_cliente_integracao Código de Integração<BR>Utilizado no sistema legado.<BR>Informe na inclusão do cliente o código que você já utiliza no seu sistema.
 * @pw_element string $codigo_status Codigo do Status
 * @pw_element string $descricao_status Descrição do Status
 * @pw_complex clientes_status
 */
class clientes_status
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
