@extends('layout.app', ["current" => "categorias"])

@section('body')

    <div class="card border">
        <div class="card-body">
            <h5 class="card-title">Controle de Categorias</h5>

            @if(count($cats) > 0)
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nome de Categoria</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($cats as $cat)
                    <tr>
                        <td>{{$cat->id}}</td>
                        <td>{{$cat->nome}}</td>
                        <td>
                            <a href="/categorias/editar/{{$cat->id}}" class="btn btn-sm btn-primary">Editar</a>
                            <a href="/categorias/apagar/{{$cat->id}}" class="btn btn-sm btn-danger">Apagar</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            @endif
        </div>
        <div class="card-footer">
            <a href="/categorias/novo" class="btn btn-primary btn-sm" role="button">Nova Categoria</a>
        </div>
    </div>

@endsection
