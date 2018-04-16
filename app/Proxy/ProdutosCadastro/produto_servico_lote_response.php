<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of produto_servico_lote_response
 *
 * @author RODRIGO
 */
/**
 * Resposta do processamento do lote de produto importados.
 *
 * @pw_element integer $lote Número do lote
 * @pw_element string $codigo_status Código do status do processamento
 * @pw_element string $descricao_status Descrição do status do lote de processamento
 * @pw_complex produto_servico_lote_response
 */
class produto_servico_lote_response {
    //put your code here
    /**
	 * Número do lote
	 *
	 * @var integer
	 */
	public $lote;
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
