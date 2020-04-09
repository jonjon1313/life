@extends('layouts.app')

@section('content')
<h1 >Produtos Cadastradas</h1>
&nbsp
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Descrição</th>
        <th scope="col">Quantidade</th>
        <th scope="col">Valor</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produto as $prod)
        <tr>
            <th scope="row">{{$prod->id}}</th>
            <td>{{$prod->nome}}</td>
            <td>{{$prod->descricao}}</td>
            <td>{{$prod->quantidade}}</td>
            <td>{{$prod->valor}}</td>
            <td>
                <a href="{{ route('produtos.show', ['produto' => $prod->id]) }}">Visualisar</a>
                <a href="{{ route('produtos.edit', ['produto' => $prod->id]) }}">Editar</a>
                <a href="{{ route('produtos.destroy', ['produto' => $prod->id]) }}">Excluir</a>
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
