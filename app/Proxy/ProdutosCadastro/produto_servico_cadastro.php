<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ProdutoCadastro;

/**
 * Description of produto_servico_cadastro
 *
 * @author RODRIGO
 */
/**
 * Lista de produtos a serem cadastrados.
 *
 * @pw_element integer $codigo_produto Código do produto.<BR>(Código interno utilizado apenas na API).<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse código para identificar um produto via API, para obter uma melhor performance. <BR>Opcionalmente você pode informar o código de integração para localizar um produto através do campo "codigo_produto_integracao".
 * @pw_element string $codigo_produto_integracao Código de integração do produto.<BR>(Utilizado para integração via API)<BR>Esse código não aparece na tela do Omie.<BR>Utilize esse campo quando incluir um produto e desejar associar o código do produto do seu aplicativo com o código de produto gerado pelo Omie.<BR>O preenchimento desse campo é obrigatório na inclusão e opcional para os demais métodos.<BR>
 * @pw_element string $codigo ID do CEST (Código Especificador da Substituíção Tributária).<BR>Preenchimento Opcional.
 * @pw_element string $descricao Descrição para o Produto / Serviço
 * @pw_element string $ean GTIN (Global Trade Item Number)
 * @pw_element string $ncm Código da Nomenclatura Comum do Mercosul
 * @pw_element string $csosn_icms Código da Situação Tributária para Simples Nacional
 * @pw_element string $unidade Código da Unidade
 * @pw_element decimal $valor_unitario Valor unitário de Venda
 * @pw_element string $cst_icms CST do ICMS
 * @pw_element decimal $aliquota_icms Alíquota de ICMS&nbsp;
 * @pw_element decimal $red_base_icms Percentual de redução de base do ICMS
 * @pw_element decimal $aliquota_ibpt Mantido apenas para compatibilidade - Sempre retorna ZERO.
 * @pw_element string $tipoItem Código do Tipo do Item para o SPED
 * @pw_element string $cst_pis Código da Situação Tributária do PIS
 * @pw_element decimal $aliquota_pis Alíquota de PIS
 * @pw_element string $cst_cofins Código da Situação Tributária do PIS
 * @pw_element decimal $aliquota_cofins Alíquota de COFINS&nbsp;
 * @pw_element string $bloqueado Cadastro Bloqueado pela API
 * @pw_element string $importado_api Gerado pela API
 * @pw_element integer $codigo_familia Código da Familia
 * @pw_element string $codInt_familia Código de Integração da Familia
 * @pw_element string $descricao_familia Descrição da Familia&nbsp;
 * @pw_element string $inativo Indica se o cadstro de produto está inativo [S/N]
 * @pw_element dadosIbpt $dadosIbpt Dados do IBPT
 * @pw_element string $cest Código do CEST.
 * @pw_element string $cfop CFOP do Produto.
 * @pw_element decimal $peso_liq Peso Líquido (Kg)
 * @pw_element decimal $peso_bruto Peso Bruto (Kg)
 * @pw_element decimal $estoque_minimo Quantidade do Estoque Mínimo
 * @pw_element string $descr_detalhada Descrição Detalhada para o Produto
 * @pw_element string $obs_internas Observações Internas
 * @pw_element decimal $quantidade_estoque DEPRECATED
 * @pw_element recomendacoes_fiscais $recomendacoes_fiscais Recomendações Fiscais&nbsp;
 * @pw_complex produto_servico_cadastro
 */
class produto_servico_cadastro {
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
	 * ID do CEST (Código Especificador da Substituíção Tributária).<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public $codigo;
	/**
	 * Descrição para o Produto / Serviço
	 *
	 * @var string
	 */
	public $descricao;
	/**
	 * GTIN (Global Trade Item Number)
	 *
	 * @var string
	 */
	public $ean;
	/**
	 * Código da Nomenclatura Comum do Mercosul
	 *
	 * @var string
	 */
	public $ncm;
	/**
	 * Código da Situação Tributária para Simples Nacional
	 *
	 * @var string
	 */
	public $csosn_icms;
	/**
	 * Código da Unidade
	 *
	 * @var string
	 */
	public $unidade;
	/**
	 * Valor unitário de Venda
	 *
	 * @var decimal
	 */
	public $valor_unitario;
	/**
	 * CST do ICMS
	 *
	 * @var string
	 */
	public $cst_icms;
	/**
	 * Alíquota de ICMS&nbsp;
	 *
	 * @var decimal
	 */
	public $aliquota_icms;
	/**
	 * Percentual de redução de base do ICMS
	 *
	 * @var decimal
	 */
	public $red_base_icms;
	/**
	 * Mantido apenas para compatibilidade - Sempre retorna ZERO.
	 *
	 * @var decimal
	 */
	public $aliquota_ibpt;
	/**
	 * Código do Tipo do Item para o SPED
	 *
	 * @var string
	 */
	public $tipoItem;
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public $cst_pis;
	/**
	 * Alíquota de PIS
	 *
	 * @var decimal
	 */
	public $aliquota_pis;
	/**
	 * Código da Situação Tributária do PIS
	 *
	 * @var string
	 */
	public $cst_cofins;
	/**
	 * Alíquota de COFINS&nbsp;
	 *
	 * @var decimal
	 */
	public $aliquota_cofins;
	/**
	 * Cadastro Bloqueado pela API
	 *
	 * @var string
	 */
	public $bloqueado;
	/**
	 * Gerado pela API
	 *
	 * @var string
	 */
	public $importado_api;
	/**
	 * Código da Familia
	 *
	 * @var integer
	 */
	public $codigo_familia;
	/**
	 * Código de Integração da Familia
	 *
	 * @var string
	 */
	public $codInt_familia;
	/**
	 * Descrição da Familia&nbsp;
	 *
	 * @var string
	 */
	public $descricao_familia;
	/**
	 * Indica se o cadstro de produto está inativo [S/N]
	 *
	 * @var string
	 */
	public $inativo;
	/**
	 * Dados do IBPT
	 *
	 * @var dadosIbpt
	 */
	public $dadosIbpt;
	/**
	 * Código do CEST.
	 *
	 * @var string
	 */
	public $cest;
	/**
	 * CFOP do Produto.
	 *
	 * @var string
	 */
	public $cfop;
	/**
	 * Peso Líquido (Kg)
	 *
	 * @var decimal
	 */
	public $peso_liq;
	/**
	 * Peso Bruto (Kg)
	 *
	 * @var decimal
	 */
	public $peso_bruto;
	/**
	 * Quantidade do Estoque Mínimo
	 *
	 * @var decimal
	 */
	public $estoque_minimo;
	/**
	 * Descrição Detalhada para o Produto
	 *
	 * @var string
	 */
	public $descr_detalhada;
	/**
	 * Observações Internas
	 *
	 * @var string
	 */
	public $obs_internas;
	/**
	 * DEPRECATED
	 *
	 * @var decimal
	 */
	public $quantidade_estoque;
	/**
	 * Recomendações Fiscais&nbsp;
	 *
	 * @var recomendacoes_fiscais
	 */
	public $recomendacoes_fiscais;
}
