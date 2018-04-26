@extends('layouts.modal')
@section('content')
<div class="container">
    <div class="row justify-content-start">
        <div class="col-md-2 margin-tb justify-content-start">
            <div class="pull-right justify-content-end" style="text-align: right">
                <a class="btn btn-success" href="{{ route('fornecedor.index') }}"><i class="fas fa-arrow-circle-left fa-lg"></i></a>
            </div>
        </div>
        <div class="col-md-4 margin-tb justify-content-end">
            <div class="pull-left">
                <h2>Cadastrar Fornecedor</h2>
            </div>            
        </div>
        <div class="col-md-6 margin-tb justify-content-end"></div>
    </div>
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">Header</div>
            <div class="card-body">Content</div> 
            <div class="card-footer">Footer</div>
        </div>

        <div class="content">
            <form action="{{ url('/fornecedor/store') }}" method="post">

            </form>
        </div>

    </div>
</div>

@endsection 