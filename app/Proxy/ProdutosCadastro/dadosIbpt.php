<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of dadosIbpt
 *
 * @author RODRIGO
 */
/**
 * Dados do IBPT
 *
 * @pw_element decimal $aliqFederal Carga tributária federal para os produtos nacionais
 * @pw_element decimal $aliqEstadual Carga tributária estadual
 * @pw_element decimal $aliqMunicipal Carga tributária municipal
 * @pw_element string $fonte Fonte
 * @pw_element string $chave Número da versão do arquivo
 * @pw_element string $versao Versão da Tabela IBPT.
 * @pw_element string $valido_de Tabela válilda a partir da data.
 * @pw_element string $valido_ate Tabela IBPT valida até a data.
 * @pw_complex dadosIbpt
 */
class dadosIbpt {
    //put your code here
    	/**
	 * Carga tributária federal para os produtos nacionais
	 *
	 * @var decimal
	 */
	public $aliqFederal;
	/**
	 * Carga tributária estadual
	 *
	 * @var decimal
	 */
	public $aliqEstadual;
	/**
	 * Carga tributária municipal
	 *
	 * @var decimal
	 */
	public $aliqMunicipal;
	/**
	 * Fonte
	 *
	 * @var string
	 */
	public $fonte;
	/**
	 * Número da versão do arquivo
	 *
	 * @var string
	 */
	public $chave;
	/**
	 * Versão da Tabela IBPT.
	 *
	 * @var string
	 */
	public $versao;
	/**
	 * Tabela válilda a partir da data.
	 *
	 * @var string
	 */
	public $valido_de;
	/**
	 * Tabela IBPT valida até a data.
	 *
	 * @var string
	 */
	public $valido_ate;
}
