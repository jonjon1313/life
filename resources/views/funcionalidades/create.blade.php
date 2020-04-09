@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <h1>Cadastrar Funcionalidades</h1>
    &nbsp
    <div class="col-md-12">
        <form action="{{route('funcionalidades.store') }}" class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <label >Nome :</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="row">
                <label >Status :</label>
                <select name="status" class="form-control">
                    <option value="A">Ativo</option>
                    <option value="I">Inativo</option>
                </select>
            </div>
            <hr>
            <div class="row">
                <button type="submit" class="btn btn-secondary">Cadastrar</button>
            </div>
        </form>
    </div>

</div>
@endsection
