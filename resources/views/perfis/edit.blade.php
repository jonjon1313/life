@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12">
        <form action="{{ route('perfis.update', ['perfis' => $perfil->id]) }}" class="form-horizontal" method="POST">
            @csrf
            @method('put')
         <div class="row">
                <label >Nome :</label>
                <input type="text" class="form-control" name="nome" value="{{ old('perfis', $perfil->nome) }}">
            </div>
            <div class="row">
                <label >Situação :</label>
                <select name="status" class="form-control">
                    <option value="A">Ativo</option>
                    <option value="I">Inativo</option>
                </select>
            </div>
            <div class="row">
                <label >Funcionalidade :</label>
                <input type="text" class="form-control" name="funcionalidade" value="{{ old('perfis', $perfil->funcionalidade) }}">
            </div>
            <hr>
            <div class="row">
                <button type="submit" class="btn btn-secondary">Atualizar</button>
            </div>
        </form>
    </div>
</div>
@endsection
