<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Proxy\ClientesTags;

/**
 * Description of ClientesTagsProxy
 *
 * @author Aloisio
 */
class ClientesTagsProxy
{

    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri = 'http://app.omie.com.br/api/v1/geral/clientetag/?WSDL';

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
    public static $_EndPoint = 'http://app.omie.com.br/api/v1/geral/clientetag/';

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
     * Associa tags a um cliente.
     *
     * @param cTagIncluirRequest $cTagIncluirRequest Solicitação de inclusão de tags de um cliente.
     * @return cTagIncluirResponse Resposta da solicitação de inclusão de tags de um cliente.
     */
    public function IncluirTags($cTagIncluirRequest)
    {
        return self::_Call('IncluirTags', Array(
                    $cTagIncluirRequest
        ));
    }

    /**
     * Remove tags associadas a um cliente.
     *
     * @param cTagExcluirRequest $cTagExcluirRequest Solicitação de exclusão de tags de um cliente.
     * @return cTagExcluirResponse Resposta da solicitação de exclusão de tags de um cliente.
     */
    public function ExcluirTags($cTagExcluirRequest)
    {
        return self::_Call('ExcluirTags', Array(
                    $cTagExcluirRequest
        ));
    }

    /**
     * Remove todas as tags associadas a um cliente.
     *
     * @param cTagExcluirTodasRequest $cTagExcluirTodasRequest Solicitação de exclusão de todas as tags de um cliente.
     * @return cTagExcluirTodasResponse Resposta da solicitação de exclusão de todas as  tags de um cliente.
     */
    public function ExcluirTodas($cTagExcluirTodasRequest)
    {
        return self::_Call('ExcluirTodas', Array(
                    $cTagExcluirTodasRequest
        ));
    }

    /**
     * Lista as tags de um determinado cliente.
     *
     * @param cTagListarRequest $cTagListarRequest Solicitação da listagem de tags de um cliente.
     * @return cTagListarResponse Resposta da solicitação da listagem de tags de um cliente.
     */
    public function ListarTags($cTagListarRequest)
    {
        return self::_Call('ListarTags', Array(
                    $cTagListarRequest
        ));
    }

}
