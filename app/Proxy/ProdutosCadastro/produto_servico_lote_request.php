<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of produto_servico_lote_request
 *
 * @author RODRIGO
 */
/**
 * Importação em Lote de produtos
 *
 * @pw_element integer $lote Número do lote
 * @pw_element produto_servico_cadastroArray $produto_servico_cadastro Lista de produtos a serem cadastrados.
 * @pw_complex produto_servico_lote_request
 */
class produto_servico_lote_request {
    //put your code here
    /**
	 * Número do lote
	 *
	 * @var integer
	 */
	public $lote;
	/**
	 * Lista de produtos a serem cadastrados.
	 *
	 * @var produto_servico_cadastroArray
	 */
	public $produto_servico_cadastro;
}
