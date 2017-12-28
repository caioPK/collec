@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Lista
                    <a class="pull-right" href="{{'/clientes/novo'}}">Novo cliente</a>
                </div>

                <div class="panel-body">
                    <table class="table">
                       <th>Nome</th>
                        <th>Endereço</th>
                        <th>Número</th>
                        <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td>{{ $cliente->numero }}</td>
                                </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
