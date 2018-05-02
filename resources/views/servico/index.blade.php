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
                    <a class="btn btn-success" href="{{ route('servico.create') }}"><i class="fa fa-truck"></i><span> Novo Serviço</span></a>
                </div>

                <h3 class="box-title" style="margin-left:3px; margin-top:7px"><b>SERVIÇOS</b></h3>
              

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
                                <th class="col-md-1"></th>
                                <th class="col-md-1"></th>
                                <th class="col-md-1"></th>
                                <th class="col_srv_id col-md-1">Código</th>
                                <th class="col_srv_descricao col-md-8">Descricão</th>                                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicos as $servico)
                            <tr>
                                <td class="col_grid_show"><center><a href="{{ route('servico.show',$servico->id) }}" data-placement="bottom" title="Exibir" ><button class="btn btn-primary" name="button" id="button" type="button" data-toggle="tooltip" data-placement="bottom" title="Exibir" style="width:18px; height:19px; margin-left:6px; padding-top:-2px"><i class="fa fa-file" style="position:absolute; margin-left:-5px; margin-top:-7px"></i></button></a></center></td>
                                <td class="col_grid_edit"><center><a href="{{ route('servico.edit',$servico->id) }}" data-placement="bottom" title="Editar"><button class="btn btn-primary" name="button" id="button" type="button" data-toggle="tooltip" data-placement="bottom" title="Editar" style="width:18px; height:19px; margin-left:6px; padding-top:-2px"><i class="fa fa-edit" style="position:absolute; margin-left:-5px; margin-top:-7px"></i></button></a></center></td>
                                <td class="col_grid_delete"><center><a onclick='exibeMsg({{ $servico->id }})' data-placement="bottom" title="Excluir"><button class="btn btn-danger" onclick='exibeMsg({{ $servico->id }})' name="button" id="button" type="button" data-toggle="tooltip" data-placement="bottom" title="Excluir" style="width:18px; height:19px; margin-left:6px; padding-top:-2px"><i class="fa fa-trash" style="position:absolute; margin-left:-5px; margin-top:-7px"></i></button></a></center></td>
                                <td class="col_srv_id">{{ $servico->id }}</td>
                                <td class="col_srv_descricao">{{ $servico->descricao }}</td>                                                
                            </tr>                    
                            @endforeach                   
                        </tbody>
                    </table>

                    <div class="container">
                        <div class="row justify-content-end">
                            <nav aria-label="Page navigation example">
                                {{ $servicos->links('vendor.pagination.bootstrap-4') }}            
                            </nav>        
                        </div>
                    </div>
            </div>        
       </div>
    </div>
</div>
@endsection
@section('script')
<script>
    function exibeMsg(id){
        swal({
            title: "Anima Mundi",
            text: "Deseja realmente excluir este registro?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {
                var _token = $('meta[name="csrf-token"]').attr('content');

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url     : "{{url('servico')}}"+"/"+id,
                    type    : 'delete',
                    dataType   : 'json',
                    data    :   {
                                    'id': id,
                                    '_token':_token
                                },
                    beforeSend : function() {

                    },
                    complete   : function() {
                    },
                    success    : function(resp) 
                    {
                        console.log(resp);
                        location.reload();
                    }
                });
            }                        
        });                              
    }
</script>
@endsection