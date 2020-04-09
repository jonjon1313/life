@extends('layouts.app')

@section('content')
<h1 >Perfis Cadastradas</h1>
&nbsp
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Status</th>
        <th scope="col">Funcionalidade</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($perfil as $perf)
        <tr>
            <th scope="row">{{$perf->id}}</th>
            <td>{{$perf->nome}}</td>
            <td>{{$perf->status}}</td>
            <td>{{$perf->funcionalidade}}</td>
            <td>
                <a href="{{ route('perfis.show', ['perfis' => $perf->id]) }}">Visualisar</a>
                <a href="{{ route('perfis.edit', ['perfis' => $perf->id]) }}">Editar</a>
                <a href="{{ route('perfis.destroy', ['perfis' => $perf->id]) }}">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
