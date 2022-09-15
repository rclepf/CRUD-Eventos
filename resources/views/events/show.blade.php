@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Evento: {{ $event->titulo }}</div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Cadastrado por: {{ $event->user_name }}</li>
                        <li class="list-group-item">Código: {{ $event->codigo_projeto }}</li>
                        <li class="list-group-item">Data: {{ $event->data }}</li>
                        <li class="list-group-item">Valor Previsto: {{ $event->valor }}</li>                       
                      </ul>
                </div>
                <div class="card-footer">
                    <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
