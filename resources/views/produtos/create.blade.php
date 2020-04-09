@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Produtos</h1>
&nbsp
    <div class="col-md-12">
        <form action="{{ route('produtos.store') }}" class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <label >Nome :</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="row">
                <label >Descrição :</label>
                <input type="text" class="form-control" name="descricao">
            </div>
            <div class="row">
                <label >Quantidade :</label>
                <input type="text" class="form-control" name="quantidade">
            </div>
            <div class="row">
                <label >Valor :</label>
                <input type="text" class="form-control" name="valor">
            </div>
            <hr>
            <div class="row">
                <button type="submit" class="btn btn-secondary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
