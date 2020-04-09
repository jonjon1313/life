@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <strong>Nome: </strong>{{ $perfil->nome }}<br>
        <strong>Situação: </strong>{{ $perfil->status }}<br>
        <strong>Funcionalidade: </strong>{{ $perfil->funcionalidade }}<br>
    </div>
</div>
@endsection
