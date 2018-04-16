<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of recomendacoes_fiscais
 *
 * @author RODRIGO
 */
/**
 * Recomendações Fiscais
 *
 * @pw_element string $origem_mercadoria Origem da Mercadoria.<BR>Preenchimento Opcional.<BR><BR>
 * @pw_element integer $id_preco_tabelado Preço tabelado (Pauta).<BR>Preenchimento Opcional.
 * @pw_element string $id_cest ID do CEST (Código Especificador da Substituíção Tributária).<BR>Preenchimento Opcional.
 * @pw_element string $cupom_fiscal Este produto é vendido através de Cupom Fiscal ECF, SAT ou NFC-e (no PDV) ?<BR>Preenchimento opcional.<BR><BR>Preencher com 'S' ou 'N'.
 * @pw_complex recomendacoes_fiscais
 */
class recomendacoes_fiscais {
    //put your code here
    /**
	 * Origem da Mercadoria.<BR>Preenchimento Opcional.<BR><BR>
	 *
	 * @var string
	 */
	public $origem_mercadoria;
	/**
	 * Preço tabelado (Pauta).<BR>Preenchimento Opcional.
	 *
	 * @var integer
	 */
	public $id_preco_tabelado;
	/**
	 * ID do CEST (Código Especificador da Substituíção Tributária).<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public $id_cest;
	/**
	 * Este produto é vendido através de Cupom Fiscal ECF, SAT ou NFC-e (no PDV) ?<BR>Preenchimento opcional.<BR><BR>Preencher com 'S' ou 'N'.
	 *
	 * @var string
	 */
	public $cupom_fiscal;
}
