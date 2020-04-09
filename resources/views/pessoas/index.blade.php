@extends('layouts.app')

@section('content')
<h1 >Pessoas Cadastradas</h1>
&nbsp
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">RG</th>
        <th scope="col">E-mail</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($pessoa as $pess)
        <tr>
            <th scope="row">{{$pess->id}}</th>
            <td>{{$pess->nome}}</td>
            <td>{{$pess->cpf}}</td>
            <td>{{$pess->rg}}</td>
            <td>{{$pess->email}}</td>
            <td>
                <a href="{{ route('pessoas.show', ['pessoa' => $pess->id]) }}">Visualisar</a>
                <a href="{{ route('pessoas.edit', ['pessoa' => $pess->id]) }}">Editar</a>
                <a href="{{ route('pessoas.destroy', ['pessoa' => $pess->id]) }}">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
{{-- <div class="class">
    @foreach ($pessoa as $pess)
        <h1>Nome: {{$pess->nome}}</h1>
        <h1>Cpf: {{$pess->cpf}}</h1>
        <h1>Rg: {{$pess->rg}}</h1>
        <h1>E-mail: {{$pess->email}}</h1>
        <h1>Cep: {{$pess->cep}}</h1>
        <h1>Logradouro: {{$pess->logradouro}}</h1>
        <h1>Numero: {{$pess->numero}}</h1>
        <h1>Complemento: {{$pess->complemento}}</h1>
        <h1>Uf: {{$pess->uf}}</h1>
        <h1>Municipio {{$pess->municipio}}</h1>
    @endforeach
</div> --}}


@endsection
