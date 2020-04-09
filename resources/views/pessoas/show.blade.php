@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <strong>Nome: </strong>{{ $pessoa->nome }}<br>
        <strong>Cpf: </strong>{{ $pessoa->cpf }}<br>
        <strong>Cep: </strong>{{ $pessoa->rg }}<br>
        <strong>Email: </strong>{{ $pessoa->email }}<br>
        <strong>Cep: </strong>{{ $pessoa->cep }}<br>
        <strong>Logradouro: </strong>{{ $pessoa->logradouro }}<br>
        <strong>Numero: </strong>{{ $pessoa->numero }}<br>
        <strong>Complemento: </strong>{{ $pessoa->complemento }}<br>
        <strong>Uf: </strong>{{ $pessoa->uf }}<br>
        <strong>Municipio: </strong>{{ $pessoa->municipio }}<br>
    </div>
</div>
@endsection
