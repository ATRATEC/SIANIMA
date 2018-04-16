@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cadastro de Clientes</div>
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('clientes') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="razao_social" class="col-lg-4 col-form-label text-lg-right">Razao Social</label>

                            <div class="col-lg-6">
                                <input
                                        id="razao_social"
                                        type="text"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="razao_social"
                                        value="{{ old('email') }}"
                                        required
                                        autofocus
                                >

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-lg-4 col-form-label text-lg-right">E-Mail Address</label>

                            <div class="col-lg-6">
                                <input
                                        id="email"
                                        type="email"
                                        class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        autofocus
                                >

                                @if ($errors->has('email'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-lg-4 col-form-label text-lg-right">Password</label>

                            <div class="col-lg-6">
                                <input
                                        id="password"
                                        type="password"
                                        class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        name="password"
                                        required
                                >

                                @if ($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center mt-5">
        <div class="col-md-12">
            @if (count($cadastros) > 0)
            <table class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th>Código</th>
                        <th>Razão Social</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($cadastros as $cadastro)
                <tr>
                    <td>{{$cadastro->codigo_cliente_omie}}</td>
                    <td>{{$cadastro->razao_social}}</td>
                </tr>            
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
    </div>
</div>
@endsection
