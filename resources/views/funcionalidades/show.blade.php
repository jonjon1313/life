@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <strong>Nome: </strong>{{ $funcionalidade->nome }}<br>
        <strong>Situação: </strong>{{ $funcionalidade->status }}<br>
    </div>
</div>
@endsection
