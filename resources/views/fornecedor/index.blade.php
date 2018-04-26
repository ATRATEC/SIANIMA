@extends('layouts.modal')

@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-md-1 margin-tb justify-content-start">
            <div class="pull-left justify-content-start" style="text-align: left">
                <a class="btn btn-success" href="{{ route('home') }}"><i class="fas fa-arrow-circle-left fa-lg"></i></a>
            </div>
        </div>
        <div class="col-md-4 margin-tb justify-content-start">
            <div class="pull-left justify-content-start" style="text-align: left">
                <h2>Fornecedores</h2>
            </div>            
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-6 margin-tb justify-content-end">
            <div class="pull-right justify-content-end" style="text-align: right">
                <a class="btn btn-success" href="{{ route('fornecedor.create') }}"><i class="fas fa-truck"></i><span> Novo Fornecedor</span></a>
            </div>
        </div>
    </div>
    <div class="row justify-content-center" style="">
        <div class="col-md-12" style="overflow-x: auto; overflow-y: auto">
            <table class="table table-sm">
                <thead class="thead-dark">
                    <tr>
                        <th class="col_for_cnpj_cpf">CNPJ/CPF</th>
                        <th class="col_for_razao_social">Razão Social / Nome Completo</th>                       
                        <th class="col_for_telefone">Telefone</th>
                        <th class="col_for_contato">Contato</th>
                        <th class="col_for_email">E-mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($fornecedores as $fornecedor)
                    <tr>
                        <td class="col_for_cnpj_cpf">{{ $fornecedor->cnpj_cpf }}</td>
                        <td class="col_for_razao_social">{{ $fornecedor->razao_social }}</td>                        
                        <td class="col_for_telefone">({{ $fornecedor->telefone1_ddd }})&nbsp;{{ $fornecedor->telefone1_numero}}</td>
                        <td class="col_for_contato">{{ $fornecedor->contato }}</td>
                        <td class="col_for_email">{{ $fornecedor->email }}</td>
                    </tr>                    
                    @endforeach                   
                </tbody>
            </table>
        </div>      
    </div>        
</div>
<div class="container">
    <div class="row justify-content-end">
        <nav aria-label="Page navigation example">
            {{ $fornecedores->links('vendor.pagination.bootstrap-4') }}            
        </nav>        
    </div>
</div>
@endsection



