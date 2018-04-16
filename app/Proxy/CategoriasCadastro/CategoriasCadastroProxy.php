<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\CategoriasCadastro;

/**
 * Description of CategoriasCadastroProxy
 *
 * @author Aloisio
 */
class CategoriasCadastroProxy
{

    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri = 'http://app.omie.com.br/api/v1/geral/categorias/?WSDL';

    /**
     * The PHP SoapClient object
     *
     * @var object
     */
    public static $_Server = null;

    /**
     * The endpoint URI
     *
     * @var string
     */
    public static $_EndPoint = 'http://app.omie.com.br/api/v1/geral/categorias/';

    /**
     * Send a SOAP request to the server
     *
     * @param string $method The method name
     * @param array $param The parameters
     * @return mixed The server response
     */
    public static function _Call($method, $param)
    {
        $call = Array(
            "call" => $method,
            "param" => $param,
            "app_key" => env('OMIE_APP_KEY'),
            "app_secret" => env('OMIE_APP_SECRET')
        );
        return json_decode(file_get_contents(self::$_EndPoint . "?JSON=" . urlencode(json_encode($call))));
    }

    /**
     * Consulta uma categoria
     *
     * @param categoria_consultar $categoria_consultar Consulta um código de categoria
     * @return categoria_cadastro Cadastro de Categorias
     */
    public function ConsultarCategoria($categoria_consultar)
    {
        return self::_Call('ConsultarCategoria', Array(
                    $categoria_consultar
        ));
    }

    /**
     * Lista as categorias cadastradas
     *
     * @param categoria_list_request $categoria_list_request Lista as categorias cadastradas.
     * @return categoria_listfull_response Retorna a lista de categorias existentes no Omie.
     */
    public function ListarCategorias($categoria_list_request)
    {
        return self::_Call('ListarCategorias', Array(
                    $categoria_list_request
        ));
    }

}
