<?php

namespace App\Proxy\ClienteCadastro;

/**
 * Description of clientes_list_request
 *
 * @author Aloisio
 */

/**
 * Lista os clientes cadastrados
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element string $filtrar_por_data_de Filtrar os registros a partir de uma data.
 * @pw_element string $filtrar_por_data_ate Filtrar os registros até uma data.
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas os registros incluídos.
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas os registros alterados.
 * @pw_element clientesFiltro $clientesFiltro Filtrar cadastro de clientes&nbsp;&nbsp;
 * @pw_element clientesPorCodigoArray $clientesPorCodigo Lista de Códigos para filtro de clientes
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_complex clientes_list_request
 */
class clientes_list_request
{

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
     * Filtrar os registros até uma data.
     *
     * @var string
     */
    public $filtrar_por_data_ate;

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
     * Filtrar cadastro de clientes&nbsp;&nbsp;
     *
     * @var clientesFiltro
     */
    public $clientesFiltro;

    /**
     * Lista de Códigos para filtro de clientes
     *
     * @var clientesPorCodigoArray
     */
    public $clientesPorCodigo;

    /**
     * DEPRECATED
     *
     * @var string
     */
    public $ordem_descrescente;

}
