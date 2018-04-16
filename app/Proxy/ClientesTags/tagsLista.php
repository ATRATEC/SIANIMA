<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClientesTags;

/**
 * Description of tagsLista
 *
 * @author Aloisio
 */

/**
 * Tags do Cliente ou Fornecedor.
 *
 * @pw_element string $tag Tag do Cliente ou Fornecedor
 * @pw_element integer $nCodTag Código da Tag.<BR><BR>Criada pelo Omie no momento da inclusão.
 * @pw_complex tagsLista
 */
class tagsLista
{

    /**
     * Tag do Cliente ou Fornecedor
     *
     * @var string
     */
    public $tag;

    /**
     * Código da Tag.<BR><BR>Criada pelo Omie no momento da inclusão.
     *
     * @var integer
     */
    public $nCodTag;

}
