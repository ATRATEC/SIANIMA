@extends('layouts.modal')

@section('content')
<div class="container">
    
        <div class="col-md-12" style="width:99%; margin-left:-15px">
          <div class="box box-default">
            <div class="box-header with-border">
                
                

                <div class="pull-left justify-content-start" style="text-align: left">
                    <a class="btn btn-success" href="{{ route('home') }}"><i class="fa fa-arrow-circle-left fa-lg"></i></a>
                </div>

                <div class="pull-right justify-content-end" style="text-align:right; margin-right:32px">
                    <a class="btn btn-success" href="{{ route('fornecedor.create') }}"><i class="fa fa-truck"></i><span> Novo Fornecedor</span></a>
                </div>

                <h3 class="box-title" style="margin-left:3px; margin-top:7px"><b>FORNECEDORES</b></h3>
              

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <table class="table table-bordered table-striped table-hover">
                <thead style="background:#eee">
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
            
            <div class="container">
                <div class="row justify-content-end">
                    <nav aria-label="Page navigation example">
                        {{ $fornecedores->links('vendor.pagination.bootstrap-4') }}            
                    </nav>        
                </div>
            </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

                  
</div>

@endsection



