<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\CategoriasCadastro;

/**
 * Description of categoria_listfull_response
 *
 * @author Aloisio
 */

/**
 * Retorna a lista de categorias existentes no Omie.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $total_de_paginas Número total de páginas
 * @pw_element integer $registros Número de registros retornados na página.
 * @pw_element integer $total_de_registros total de registros encontrados
 * @pw_element categoria_cadastroArray $categoria_cadastro Cadastro de Categorias
 * @pw_complex categoria_listfull_response
 */
class categoria_listfull_response
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
     * Cadastro de Categorias
     *
     * @var categoria_cadastroArray
     */
    public $categoria_cadastro;

}
