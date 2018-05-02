@extends('layouts.modal')
@section('content')
<div class="container">
    <div class="col-md-12" style="width:98%; margin-left:-15px">
    <div class="box box-default">
    <div class="box">

        <div class="box-header with-border">

            <div class="pull-left justify-content-start" style="text-align: left">
                <a class="btn btn-primary" href="{{ route('servico.index') }}"><i class="fa fa-arrow-circle-left fa-lg"></i></a>
            </div>

            <h3 class="box-title" style="margin-left:3px; margin-top:7px"><b>SERVIÇOS</b></h3>

        </div>            
        <div class="box-body">
                    <form class="form-horizontal" method="POST" action="{{ route('servico.store') }}">
                        {{ csrf_field() }}

                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Sucesso!</strong> {{ session('success') }}
                        </div>
                        <!--                        <div class="alert alert-success">
                                                    {{ session('status') }}
                                                </div>-->
                        @endif

                        @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        
                        <div class="form-group row">
                            <label for="descricao" class="col-lg-1 col-form-label text-lg-right">Descrição</label>

                            <div class="col-lg-11">
                                <input id="descricao" type="text" class="form-control{{ $errors->has('descricao') ? ' is-invalid' : '' }}" name="descricao" required autofocus>

                                @if ($errors->has('descricao'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('descricao') }}</strong>
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-lg-8 offset-lg-4 text-lg-right">
                                <button type="submit" class="btn btn-primary">
                                    Salvar
                                </button>                               
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--    <div class="row justify-content-start">
            <div class="col-md-2 margin-tb justify-content-start">
                <div class="pull-right justify-content-end" style="text-align: right">
                    <a class="btn btn-success" href="{{ route('servico.index') }}"><i class="fas fa-arrow-circle-left fa-lg"></i></a>
                </div>
            </div>
            <div class="col-md-4 margin-tb justify-content-end">
                <div class="pull-left">
                    <h2>Cadastrar Serviço</h2>
                </div>            
            </div>
            <div class="col-md-6 margin-tb justify-content-end"></div>
        </div>
        <div class="row justify-content-center">
    
            <div class="content">
                <form action="{{ url('/servico/store') }}" method="post">
    
                </form>
            </div>
    
        </div>-->
</div>

@endsection 

@section('footer')
@endsection