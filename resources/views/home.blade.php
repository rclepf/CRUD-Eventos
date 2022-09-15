@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Eventos</div>

                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Usuario</th>
                            <th scope="col">Titulo</th>
                            <th scope="col">Codigo</th>
                            <th scope="col">Data Início</th>
                            <th scope="col">Valor Previsto</th>
                            <th scope="col">Ver</th>
                            <th scope="col">Editar</th>
                            <th scope="col">Excluir</th>
                          </tr>
                        </thead>
                        <tbody>
                          @forelse ($events as $item)
                          <tr>
                            <td>{{ $item['user_name'] }}</td>
                            <td>{{ $item['titulo'] }}</td>
                            <td>{{ $item['codigo_projeto'] }}</td>
                            <td>{{ $item['data'] }}</td>
                            <td>{{ $item['valor'] }}</td>
                            <td><a href="{{ route('events.show', ['event'=>$item['id']]) }}" class="btn btn-info">Ver</a></td>
                            <td><a href="{{ route('events.edit', ['event'=>$item['id']]) }}" class="btn btn-secondary">Editar</a></td>
                            <td>
                              <form method="POST" action="{{ route('events.destroy', ['event'=>$item['id']]) }}">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger">Excluir</button>
                              </form>
                            </td>
                          </tr>    
                          @empty
                          <tr>
                            <td colspan="4">
                                Nenhum registro encontrado
                            </td>
                          </tr>                              
                          @endforelse
                        </tbody>
                      </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('events.create') }}" class="btn btn-primary">Cadastrar Evento</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
