<?php

namespace App\Proxy\ClienteCadastro;

class ClienteCadastroProxy
{

    /**
     * The WSDL URI
     *
     * @var string
     */
    public static $_WsdlUri = 'http://app.omie.com.br/api/v1/geral/clientes/?WSDL';

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
    public static $_EndPoint = 'http://app.omie.com.br/api/v1/geral/clientes/';

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
     * Inclui o cliente no Omie
     *
     * @param clientes_cadastro $clientes_cadastro Lista de clientes para cadastro.
     * @return clientes_status Status de retorno do cadastro de clientes.
     */
    public function IncluirCliente($clientes_cadastro)
    {
        return self::_Call('IncluirCliente', Array(
                    $clientes_cadastro
        ));
    }

    /**
     * Altera os dados do cliente
     *
     * @param clientes_cadastro $clientes_cadastro Lista de clientes para cadastro.
     * @return clientes_status Status de retorno do cadastro de clientes.
     */
    public function AlterarCliente($clientes_cadastro)
    {
        return self::_Call('AlterarCliente', Array(
                    $clientes_cadastro
        ));
    }

    /**
     * Exclui um cliente da base de dados.
     *
     * @param clientes_cadastro_chave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
     * @return clientes_status Status de retorno do cadastro de clientes.
     */
    public function ExcluirCliente($clientes_cadastro_chave)
    {
        return self::_Call('ExcluirCliente', Array(
                    $clientes_cadastro_chave
        ));
    }

    /**
     * Consulta os dados de um cliente
     *
     * @param clientes_cadastro_chave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
     * @return clientes_cadastro Lista de clientes para cadastro.
     */
    public function ConsultarCliente($clientes_cadastro_chave)
    {
        return self::_Call('ConsultarCliente', Array(
                    $clientes_cadastro_chave
        ));
    }

    /**
     * Lista os clientes cadastrados
     *
     * @param clientes_list_request $clientes_list_request Lista os clientes cadastrados
     * @return clientes_listfull_response Lista de clientes cadastrados no omie.
     */
    public function ListarClientes($clientes_list_request)
    {
        return self::_Call('ListarClientes', Array(
                    $clientes_list_request
        ));
    }

    /**
     * Realiza pesquisa dos clientes
     *
     * @param clientes_list_request $clientes_list_request Lista os clientes cadastrados
     * @return clientes_list_response Lista de clientes cadastrados no omie.
     */
    public function ListarClientesResumido($clientes_list_request)
    {
        return self::_Call('ListarClientesResumido', Array(
                    $clientes_list_request
        ));
    }

    /**
     * Rotina para inclusÃ£o por lote de clientes.
     *
     * @param clientes_lote_request $clientes_lote_request Lote de cadastros de clientes para inclusÃ£o, limitado a 50 ocorrÃªncias por requisiÃ§Ã£o.
     * @return clientes_lote_response Resposta do processamento do lote de clientes cadastrados.
     */
    public function IncluirClientesPorLote($clientes_lote_request)
    {
        return self::_Call('IncluirClientesPorLote', Array(
                    $clientes_lote_request
        ));
    }

    /**
     * Realiza o UPSERT da tabela de clientes (INCLUSÃƒO/ALTERAÃ‡ÃƒO).
     *
     * @param clientes_cadastro $clientes_cadastro Lista de clientes para cadastro.
     * @return clientes_status Status de retorno do cadastro de clientes.
     */
    public function UpsertCliente($clientes_cadastro)
    {
        return self::_Call('UpsertCliente', Array(
                    $clientes_cadastro
        ));
    }

    /**
     * Inclui/Altera clientes por lote.
     *
     * @param clientes_lote_request $clientes_lote_request Lote de cadastros de clientes para inclusÃ£o, limitado a 50 ocorrÃªncias por requisiÃ§Ã£o.
     * @return clientes_lote_response Resposta do processamento do lote de clientes cadastrados.
     */
    public function UpsertClientesPorLote($clientes_lote_request)
    {
        return self::_Call('UpsertClientesPorLote', Array(
                    $clientes_lote_request
        ));
    }

    /**
     * Associa um cÃ³digo de integraÃ§Ã£o a um cliente cadastrado no Omie.
     *
     * @param clientes_cadastro_chave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
     * @return clientes_status Status de retorno do cadastro de clientes.
     */
    public function AssociarCodIntCliente($clientes_cadastro_chave)
    {
        return self::_Call('AssociarCodIntCliente', Array(
                    $clientes_cadastro_chave
        ));
    }

}
