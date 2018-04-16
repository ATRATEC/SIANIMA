<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of produto_servico_list_request
 *
 * @author RODRIGO
 */
/**
 * Lista os produtos cadastrados
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $filtrar_por_data_de Filtrar os registros a partir de uma data.
 * @pw_element string $filtrar_por_hora_de Filtrar a partir da hora.
 * @pw_element string $filtrar_por_data_ate Filtrar os registros até uma data.
 * @pw_element string $filtrar_por_hora_ate Filtrar até a hora.
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas os registros incluídos.
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas os registros alterados.
 * @pw_element string $filtrar_apenas_omiepdv Filtrar apenas produtos OmiePDV.<BR>O preenchimento desse campo é obrigatório e o seu padrão é "S".<BR>
 * @pw_element string $filtrar_apenas_familia Filtrar por Familia de Produto
 * @pw_element string $filtrar_apenas_tipo Código do Tipo do Item para o SPED
 * @pw_element string $filtrar_apenas_descricao Filtro pela descrição do produto.<BR>Para filtrar utilize:<BR>"TEXTO" - Para pesquisa exata.<BR>"TEXTO%" - Para pesquisa começando com.<BR>"%TEXTO" - Para pesquisa terminando com.<BR>"%TEXTO%" - Para pesquisa contendo.
 * @pw_element string $ordem_descrescente Deprecated
 * @pw_complex produto_servico_list_request
 */
class produto_servico_list_request {
    //put your code here
    /**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public $registros_por_pagina;
	/**
	 * Exibir apenas os registros gerados pela API
	 *
	 * @var string
	 */
	public $apenas_importado_api;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public $ordenar_por;
	/**
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public $ordem_decrescente;
	/**
	 * Filtrar os registros a partir de uma data.
	 *
	 * @var string
	 */
	public $filtrar_por_data_de;
	/**
	 * Filtrar a partir da hora.
	 *
	 * @var string
	 */
	public $filtrar_por_hora_de;
	/**
	 * Filtrar os registros até uma data.
	 *
	 * @var string
	 */
	public $filtrar_por_data_ate;
	/**
	 * Filtrar até a hora.
	 *
	 * @var string
	 */
	public $filtrar_por_hora_ate;
	/**
	 * Filtrar apenas os registros incluídos.
	 *
	 * @var string
	 */
	public $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas os registros alterados.
	 *
	 * @var string
	 */
	public $filtrar_apenas_alteracao;
	/**
	 * Filtrar apenas produtos OmiePDV.<BR>O preenchimento desse campo é obrigatório e o seu padrão é "S".<BR>
	 *
	 * @var string
	 */
	public $filtrar_apenas_omiepdv;
	/**
	 * Filtrar por Familia de Produto
	 *
	 * @var string
	 */
	public $filtrar_apenas_familia;
	/**
	 * Código do Tipo do Item para o SPED
	 *
	 * @var string
	 */
	public $filtrar_apenas_tipo;
	/**
	 * Filtro pela descrição do produto.<BR>Para filtrar utilize:<BR>"TEXTO" - Para pesquisa exata.<BR>"TEXTO%" - Para pesquisa começando com.<BR>"%TEXTO" - Para pesquisa terminando com.<BR>"%TEXTO%" - Para pesquisa contendo.
	 *
	 * @var string
	 */
	public $filtrar_apenas_descricao;
	/**
	 * Deprecated
	 *
	 * @var string
	 */
	public $ordem_descrescente;
}
