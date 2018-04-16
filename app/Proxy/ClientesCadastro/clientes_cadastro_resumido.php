<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClienteCadastro;

/**
 * Description of clientes_cadastro_resumido
 *
 * @author Aloisio
 */

/**
 * Cadastro reduzido de produtos
 *
 * @pw_element integer $codigo_cliente Código<BR>Interno, gerado automaticamente na inclusão do cliente.<BR>Deve ser informado apenas para alteração/consulta.<BR>Na inclusão utilize a tag "codigo_cliente_integracao".
 * @pw_element string $codigo_cliente_integracao Código de Integração<BR>Utilizado no sistema legado.<BR>Informe na inclusão do cliente o código que você já utiliza no seu sistema.
 * @pw_element string $razao_social Razão Social<BR>Preenchimento Obrigatório.
 * @pw_element string $nome_fantasia Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_complex clientes_cadastro_resumido
 */

class clientes_cadastro_resumido
{
    /**
	 * Código<BR>Interno, gerado automaticamente na inclusão do cliente.<BR>Deve ser informado apenas para alteração/consulta.<BR>Na inclusão utilize a tag "codigo_cliente_integracao".
	 *
	 * @var integer
	 */
	public $codigo_cliente;
	/**
	 * Código de Integração<BR>Utilizado no sistema legado.<BR>Informe na inclusão do cliente o código que você já utiliza no seu sistema.
	 *
	 * @var string
	 */
	public $codigo_cliente_integracao;
	/**
	 * Razão Social<BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public $razao_social;
	/**
	 * Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public $nome_fantasia;
	/**
	 * CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public $cnpj_cpf;
}
