<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of produto_servico_listfull_response
 *
 * @author RODRIGO
 */
/**
 * Lista completa de produtos encontrados no omie.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element produto_servico_cadastroArray $produto_servico_cadastro Lista de produtos a serem cadastrados.
 * @pw_complex produto_servico_listfull_response
 */
class produto_servico_listfull_response {
    //put your code here
    /**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public $pagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public $total_de_paginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public $registros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public $total_de_registros;
	/**
	 * Lista de produtos a serem cadastrados.
	 *
	 * @var produto_servico_cadastroArray
	 */
	public $produto_servico_cadastro;
}
