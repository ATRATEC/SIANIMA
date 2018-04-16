<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClienteCadastro;

/**
 * Description of clientes_list_response
 *
 * @author Aloisio
 */

/**
 * Lista de clientes cadastrados no omie.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element clientes_cadastro_resumidoArray $clientes_cadastro_resumido Cadastro reduzido de produtos
 * @pw_complex clientes_list_response
 */
class clientes_list_response
{

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
     * Cadastro reduzido de produtos
     *
     * @var clientes_cadastro_resumidoArray
     */
    public $clientes_cadastro_resumido;

}
