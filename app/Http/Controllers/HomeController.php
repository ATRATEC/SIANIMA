<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Proxy\MovimentoEstoque\MovimentoEstoqueProxy;
use App\Proxy\MovimentoEstoque\epListarRequest;
use App\Proxy\MovimentoEstoque\epListarResponse;
use App\Proxy\MovimentoEstoque\cadastros;
use App\Proxy\MovimentoEstoque\movimentos;

use App\Proxy\ConsultaEstoque\ConsultaEstoqueProxy;
use App\Proxy\ConsultaEstoque\ListarEstPosRequest;
use App\Proxy\ConsultaEstoque\ListarEstPosResponse;
use App\Proxy\ConsultaEstoque\estoqueMovimentoRequest;
use App\Proxy\ConsultaEstoque\estoqueMovimentoResponse;
use App\Proxy\ConsultaEstoque\estoque_mov_consulta_cadastro;
use App\Proxy\ConsultaEstoque\estoque_mov_consulta_cadastro_resposta;
use App\Proxy\ConsultaEstoque\movPeriodo;
use App\Proxy\ConsultaEstoque\movProduto;
use App\Proxy\ConsultaEstoque\produtos;

use App\Proxy\ClienteCadastro\ClienteCadastroProxy;
use App\Proxy\ClienteCadastro\clientes_list_request;
use App\Proxy\ClienteCadastro\clientes_list_response;
use App\Proxy\ClienteCadastro\clientes_listfull_response;
use App\Proxy\ClienteCadastro\clientes_cadastro;

use App\Proxy\ClientesTags\ClientesTagsProxy;
use App\Proxy\ClientesTags\cTagListarRequest;
use App\Proxy\ClientesTags\cTagListarResponse;
use App\Proxy\ClientesTags\tags;
use App\Proxy\ClientesTags\tagsLista;

use App\Proxy\CategoriasCadastro\CategoriasCadastroProxy;
use App\Proxy\CategoriasCadastro\categoria_cadastro;
use App\Proxy\CategoriasCadastro\categoria_consultar;
use App\Proxy\CategoriasCadastro\categoria_list_request;
use App\Proxy\CategoriasCadastro\categoria_listfull_response;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function movimentos()
    {
        $movimentoestoque = new MovimentoEstoqueProxy();
        
        $req = new epListarRequest();
        $req->apenas_importado_api = 'N';
        $req->pagina = 1;
        $req->registros_por_pagina = 20;
        
        $resp = $movimentoestoque->ListarMovimentos($req);
        $cad = $resp->cadastros;
        
        return view('movimentos', ['cadastros' => $cad,]);
        
    }
    
    public function consultaestoque()
    {
        $consulta = new ConsultaEstoqueProxy();
        $req = new estoqueMovimentoRequest();
        $req->id_prod = 716272801;
        
        $resp = $consulta->MovimentoEstoque($req);
        
        return json_encode($resp);
    }
    
    public function listarclientes()
    {
        $proxy = new ClienteCadastroProxy();
        $req = new clientes_list_request();
        
        $req->apenas_importado_api = 'N';
        $req->pagina = 1;
        $req->registros_por_pagina = 50;
        
        $resp = $proxy->ListarClientes($req);
        $cad = $resp->clientes_cadastro;
        
        return view('clientes', ['cadastros' => $cad,]);
    }
    
    public function listarCategorias()
    {
        $proxy = new CategoriasCadastroProxy();
        $req = new categoria_list_request();
        
        $req->apenas_importado_api = 'N';
        $req->pagina = 1;
        $req->registros_por_pagina = 50;
        
        
        $resp = $proxy->ListarCategorias($req);
        $cad = $resp->categoria_cadastro;
        return view('categorias', ['registros' => $cad,]);
    }

        public function getTag()
    {
        $proxy = new ClientesTagsProxy();
        $req = new cTagListarRequest();
        $req->nCodCliente = 500793075;
        
        $resp = $proxy->ListarTags($req);
        $cad = $resp->tagsLista;
        return view('tags', ['tags' => $cad,]);
    }
}
