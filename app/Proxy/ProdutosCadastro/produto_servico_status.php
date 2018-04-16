<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of produto_servico_status
 *
 * @author RODRIGO
 */
/**
 * Status de retorno do cadastro de produtos
 *
 * @pw_element integer $codigo_produto Código do produto.<BR>(Código interno utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar um produto via API, para obter uma melhor performance. <BR>Opcionalmente você pode informar o código de integração para localizar um produto através do campo "codigo_produto_integracao".
 * @pw_element string $codigo_produto_integracao Código de integração do produto.<BR>(Utilizado para integração via API)<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse campo quando incluir um produto e desejar associar o código do produto do seu aplicativo com o código de produto gerado pelo Omie.<BR>O preenchimento desse campo é obrigatório na inclusão e opcional para os demais métodos.<BR>
 * @pw_element string $codigo_status Código do status do processamento
 * @pw_element string $descricao_status Descrição do status do lote de processamento
 * @pw_complex produto_servico_status
 */
class produto_servico_status {
    //put your code here
    /**
	 * Código do produto.<BR>(Código interno utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar um produto via API, para obter uma melhor performance. <BR>Opcionalmente você pode informar o código de integração para localizar um produto através do campo "codigo_produto_integracao".
	 *
	 * @var integer
	 */
	public $codigo_produto;
	/**
	 * Código de integração do produto.<BR>(Utilizado para integração via API)<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse campo quando incluir um produto e desejar associar o código do produto do seu aplicativo com o código de produto gerado pelo Omie.<BR>O preenchimento desse campo é obrigatório na inclusão e opcional para os demais métodos.<BR>
	 *
	 * @var string
	 */
	public $codigo_produto_integracao;
	/**
	 * Código do status do processamento
	 *
	 * @var string
	 */
	public $codigo_status;
	/**
	 * Descrição do status do lote de processamento
	 *
	 * @var string
	 */
	public $descricao_status;
}
