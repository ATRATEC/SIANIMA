@extends('layouts.modal')

@section('content')
<div class="container">
    <div class="col-md-12" style="width:99%; margin-left:-15px">
        <div class="box box-default">
            <div class="box-header with-border">
                <div class="pull-left justify-content-start" style="text-align: left">
                    <a class="btn btn-primary" href="{{ route('home') }}"><i class="fa fa-arrow-circle-left fa-lg"></i></a>
                </div>

                <div class="pull-right justify-content-end" style="text-align:right; margin-right:32px">
                    <a class="btn btn-primary" href="{{ route('servico.create') }}"><i class="fa fa-truck"></i><span> Novo Serviço</span></a>
                </div>

                <h3 class="box-title" style="margin-left:3px; margin-top:7px"><b>EXIBIR SERVIÇO</b></h3>
              

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                </button>
              </div>
                <div class="box-body">

               	
                	<br>
				        <div class="info-box" style="width:100%">
				            <span class="info-box-icon bg-aqua"><i class="fa fa-truck"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text"><b>Código:</b> {{$servico->id}}</span>
				              <span class="info-box-text"><b>Descrição:</b> {{$servico->descricao}}</span>
				            </div>
				            <!-- /.info-box-content -->
				        </div>
				          <!-- /.info-box -->
			    </div>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('footer')
@endsection