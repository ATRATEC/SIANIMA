<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\CategoriasCadastro;

/**
 * Description of categoria_list_request
 *
 * @author Aloisio
 */

/**
 * Lista as categorias cadastradas.
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por DEPRECATED
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_complex categoria_list_request
 */
class categoria_list_request
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
     * DEPRECATED
     *
     * @var string
     */
    public $apenas_importado_api;

    /**
     * DEPRECATED
     *
     * @var string
     */
    public $ordenar_por;

    /**
     * DEPRECATED
     *
     * @var string
     */
    public $ordem_descrescente;

}
