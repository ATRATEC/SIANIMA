@extends('layouts.app')

@section('content')
@if (count($tags) > 0)
<table>
    <tr>
        <th>Código</th>
        <th>Tag</th>
    </tr>
    @foreach ($tags as $tag)
        <tr>
            <td>{{$tag->nCodTag}}</td>
            <td>{{$tag->tag}}</td>
        </tr>            
    @endforeach
</table>

@endif

@endsection
