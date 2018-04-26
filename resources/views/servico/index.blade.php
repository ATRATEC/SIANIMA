@extends('layouts.modal')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row justify-content-start">
                <div class="col-md-1 margin-tb justify-content-start">
                    <div class="pull-left justify-content-start" style="text-align: left">
                        <a class="btn btn-primary" href="{{ route('home') }}" data-toggle="tooltip" data-placement="bottom" title="Voltar"><i class="fas fa-arrow-circle-left fa-lg"></i></a>
                    </div>
                </div>
                <div class="col-md-4 margin-tb justify-content-start">
                    <div class="pull-left justify-content-start" style="text-align: left">
                        <h2>Serviços</h2>
                    </div>            
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-6 margin-tb justify-content-end">
                    <div class="pull-right justify-content-end" style="text-align: right">
                        <a class="btn btn-primary" href="{{ route('servico.create') }}"><i class="fas fa-truck"></i><span> Novo Serviço</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center" style="">
                <div class="col-md-12" style="overflow-x: auto; overflow-y: auto">
                    <table class="table table-sm">
                        <thead class="thead-dark">
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th class="col_srv_id">Código</th>
                                <th class="col_srv_descricao">Descricão</th>                                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servicos as $servico)
                            <tr>
                                <td class="col_grid_show"><a class="btn btn-primary" href="{{ route('servico.show',$servico->id) }}" data-toggle="tooltip" data-placement="bottom" title="Exibir" ><i class="far fa-file-alt fa-lg"></i></a></td>
                                <td class="col_grid_edit"><a class="btn btn-info" href="{{ route('servico.edit',$servico->id) }}" data-toggle="tooltip" data-placement="bottom" title="Editar"><i class="far fa-edit fa-lg"></i></a></td>
                                <td class="col_grid_delete">
                                    <!--                                    <form action="{{action('ServicoController@destroy', $servico->id)}}" method="post">
                                                                            {{csrf_field()}}
                                                                            <input name="_method" type="hidden" value="DELETE">
                                                                            <button class="btn btn-danger" type="submit" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="far fa-trash-alt fa-lg"></i></button>
                                                                        </form>-->
                                    <button class="btn btn-danger" onclick='exibeMsg({{ $servico->id }})' name="button" id="button" type="button" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="far fa-trash-alt fa-lg"></i></button>

<!--<a class="btn" href="{{ route('home') }}" data-toggle="tooltip" data-placement="bottom" title="Excluir"><i class="far fa-trash-alt fa-lg"></i></a>-->
                                </td>
                                <td class="col_srv_id">{{ $servico->id }}</td>
                                <td class="col_srv_descricao">{{ $servico->descricao }}</td>                                                
                            </tr>                    
                            @endforeach                   
                        </tbody>
                    </table>
                </div>      
            </div>            
        </div>        
        <div class="card-footer">
            <div class="row justify-content-end">
                <nav aria-label="Page navigation example">
                    {{ $servicos->links('vendor.pagination.bootstrap-4') }}            
                </nav>        
            </div>
        </div>        
    </div>

</div>
<div class="container">

</div>
@endsection

@section('footer')
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