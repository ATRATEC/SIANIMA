<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of ProdutoCadastroProxy
 *
 * @author RODRIGO
 */
class ProdutoCadastroProxy {
    //put your code here
    /**
	 * The WSDL URI
	 *
	 * @var string
	 */
	public static $_WsdlUri='http://app.omie.com.br/api/v1/geral/produtos/?WSDL';
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;
	/**
	 * The endpoint URI
	 *
	 * @var string
	 */
	public static $_EndPoint='http://app.omie.com.br/api/v1/geral/produtos/';

	/**
	 * Send a SOAP request to the server
	 *
	 * @param string $method The method name
	 * @param array $param The parameters
	 * @return mixed The server response
	 */
	public static function _Call($method,$param){
		$call=Array(
			"call"=>$method,
			"param"=>$param,
			"app_key"=>OMIE_APP_KEY,
			"app_secret"=>OMIE_APP_SECRET
		);
		return json_decode(file_get_contents(self::$_EndPoint."?JSON=".urlencode(json_encode($call))));
	}

	/**
	 * Incluir um produto.
	 *
	 * @param produto_servico_cadastro $produto_servico_cadastro Lista de produtos a serem cadastrados.
	 * @return produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function IncluirProduto($produto_servico_cadastro){
		return self::_Call('IncluirProduto',Array(
			$produto_servico_cadastro
		));
	}

	/**
	 * Altera um produto já cadastrado.
	 *
	 * @param produto_servico_cadastro $produto_servico_cadastro Lista de produtos a serem cadastrados.
	 * @return produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function AlterarProduto($produto_servico_cadastro){
		return self::_Call('AlterarProduto',Array(
			$produto_servico_cadastro
		));
	}

	/**
	 * Exclui um produto
	 *
	 * @param produto_servico_cadastro_chave $produto_servico_cadastro_chave Pesquisa de produtos
	 * @return produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function ExcluirProduto($produto_servico_cadastro_chave){
		return self::_Call('ExcluirProduto',Array(
			$produto_servico_cadastro_chave
		));
	}

	/**
	 * Consulta um produto.
	 *
	 * @param produto_servico_cadastro_chave $produto_servico_cadastro_chave Pesquisa de produtos
	 * @return produto_servico_cadastro Lista de produtos a serem cadastrados.
	 */
	public function ConsultarProduto($produto_servico_cadastro_chave){
		return self::_Call('ConsultarProduto',Array(
			$produto_servico_cadastro_chave
		));
	}

	/**
	 * Incluir produtos por lote.
	 *
	 * @param produto_servico_lote_request $produto_servico_lote_request Importação em Lote de produtos
	 * @return produto_servico_lote_response Resposta do processamento do lote de produto importados.
	 */
	public function IncluirProdutosPorLote($produto_servico_lote_request){
		return self::_Call('IncluirProdutosPorLote',Array(
			$produto_servico_lote_request
		));
	}

	/**
	 * Lista completa do cadastro de produtos
	 *
	 * @param produto_servico_list_request $produto_servico_list_request Lista os produtos cadastrados
	 * @return produto_servico_listfull_response Lista completa de produtos encontrados no omie.
	 */
	public function ListarProdutos($produto_servico_list_request){
		return self::_Call('ListarProdutos',Array(
			$produto_servico_list_request
		));
	}

	/**
	 * Lista os produtos cadastrados
	 *
	 * @param produto_servico_list_request $produto_servico_list_request Lista os produtos cadastrados
	 * @return produto_servico_list_response Lista de produtos encontrados no omie.
	 */
	public function ListarProdutosResumido($produto_servico_list_request){
		return self::_Call('ListarProdutosResumido',Array(
			$produto_servico_list_request
		));
	}

	/**
	 * Realiza a inclusão/alteração de produtos.
	 *
	 * @param produto_servico_cadastro $produto_servico_cadastro Lista de produtos a serem cadastrados.
	 * @return produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function UpsertProduto($produto_servico_cadastro){
		return self::_Call('UpsertProduto',Array(
			$produto_servico_cadastro
		));
	}

	/**
	 * Inclui / Altera produtos por lote
	 *
	 * @param produto_servico_lote_request $produto_servico_lote_request Importação em Lote de produtos
	 * @return produto_servico_lote_response Resposta do processamento do lote de produto importados.
	 */
	public function UpsertProdutosPorLote($produto_servico_lote_request){
		return self::_Call('UpsertProdutosPorLote',Array(
			$produto_servico_lote_request
		));
	}
}
