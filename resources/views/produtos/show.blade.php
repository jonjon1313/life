@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <strong>Nome: </strong>{{ $produto->nome }}<br>
        <strong>Descrição: </strong>{{ $produto->descricao }}<br>
        <strong>Quantidade: </strong>{{ $produto->quantidade }}<br>
        <strong>Valor: </strong>{{ $produto->valor }}<br>
    </div>
</div>
@endsection
