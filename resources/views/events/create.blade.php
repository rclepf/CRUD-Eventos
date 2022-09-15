@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Cadastrando Eventos</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('events.store') }}">
                        @csrf 
                        <div class="form-group">
                          <label>Titulo do evento</label>
                          <input type="text" class="form-control" name="titulo">
                        </div>
                        <div class="form-group">
                            <label>Código</label>
                            <input type="text" class="form-control" name="codigo_projeto">
                        </div>
                        <div class="form-group">
                            <label>Data Início</label>
                            <input type="datetime-local" class="form-control" name="data_inicio">
                        </div>
                        <div class="form-group">
                            <label>Valor Previsto</label>
                            <input type="text" class="form-control" name="valor_previsto">
                        </div>
                                            
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    
                </div>
                <div class="card-footer">
                    <a href="{{ route('home') }}" class="btn btn-primary">Voltar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
