@extends('layouts.app')

@section('content')
<h1 >Funcionalidades Cadastradas</h1>
&nbsp
<table class="table table-striped">
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col">Nome</th>
        <th scope="col">Status</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($funcionalidade as $func)
        <tr>
            <th scope="row">{{$func->id}}</th>
            <td>{{$func->nome}}</td>
            <td>{{$func->status}}</td>
            <td>
                <a href="{{ route('funcionalidades.show', ['funcionalidades' => $func->id]) }}">Visualisar</a>
                <a href="{{ route('funcionalidades.edit', ['funcionalidades' => $func->id]) }}">Editar</a>
                <a href="{{ route('funcionalidades.destroy', ['funcionalidades' => $func->id]) }}">Excluir</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
