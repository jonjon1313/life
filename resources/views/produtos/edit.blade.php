@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <form action="{{ route('produtos.update', ['produto' => $produto->id]) }}" class="form-horizontal" method="POST">
            @csrf
            @method('put')
            <div class="row">
                <label >Nome :</label>
                <input type="text" class="form-control" name="nome" value="{{ old('produto', $produto->nome) }}">
            </div>
            <div class="row">
                <label >Descrição :</label>
                <input type="text" class="form-control" name="descricao" value="{{ old('produto', $produto->descricao) }}">
            </div>
            <div class="row">
                <label >Quantidade :</label>
                <input type="text" class="form-control" name="quantidade" value="{{ old('produto', $produto->quantidade) }}">
            </div>
            <div class="row">
                <label >Valor :</label>
                <input type="text" class="form-control" name="valor" value="{{ old('produto', $produto->valor) }}">
            </div>
           
            </div>
            <hr>
            <div class="row">
                <button type="submit" class="btn btn-secondary">Atualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
