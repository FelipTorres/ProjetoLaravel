@extends('layout.app', ["current"=>"produtos"]);

@section('body')

    <div class="card border">
        <div class="card-body">
            <form action="/produtos" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto">

                    <label for="nomeProduto">Quantidade de Estoque</label>
                    <input type="text" class="form-control" name="qntEstoque" id="qntEstoque" placeholder="Estoque">

                    <label for="nomeProduto">Preço do Produto</label>
                    <input type="text" class="form-control" name="preco" id="preco" placeholder="Preço">

                    <label for="nomeProduto">Selecione a categoria do produto</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="selected_cat">
                        <option selected>Categoria do Produto</option>
                        @foreach($cat as $c)
                            <option value={{$c->id}}>{{$c->nome}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn-primary btn-sm">Salvar</button>
                <button type="cancel" class="btn-danger btn-sm">Cancel</button>
            </form>
        </div>
    </div>

@endsection
