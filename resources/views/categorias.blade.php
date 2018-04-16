@extends('layouts.app')

@section('content')
@if (count($registros) > 0)
<table>
    <tr>
        <th>Código</th>
        <th>Descrição</th>
    </tr>
    @foreach ($registros as $registro)
        <tr>
            <td>{{$registro->codigo}}</td>
            <td>{{$registro->descricao}}</td>
        </tr>            
    @endforeach
</table>

@endif

@endsection
