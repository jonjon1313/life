@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cadastrar Pessoas</h1>
&nbsp
    <div class="col-md-12">
        <form action="{{ route('pessoas.store') }}" class="form-horizontal" method="POST">
            @csrf
            <div class="row">
                <label >Nome :</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="row">
                <label >Cpf :</label>
                <input type="text" class="form-control" name="cpf">
            </div>
            <div class="row">
                <label >Rg :</label>
                <input type="text" class="form-control" name="rg">
            </div>
            <div class="row">
                <label >Email :</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="row">
                <label >CEP :</label>
                <input type="text" class="form-control" name="cep">
            </div>
            <div class="row">
                <label >Logradouro :</label>
                <input type="text" class="form-control" name="logradouro">
            </div>
            <div class="row">
                <label >Número :</label>
                <input type="text" class="form-control" name="numero">
            </div>
            <div class="row">
                <label >Complemento :</label>
                <input type="text" class="form-control" name="complemento">
            </div>
            <div class="row">
                <label >UF :</label>
                <select name="uf" class="form-control">
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>
            <div class="row">
                <label >Municipio :</label>
                <input type="text" class="form-control" name="municipio">
            </div>
            <hr>
            <div class="row">
                <button type="submit" class="btn btn-secondary">Cadastrar</button>
            </div>
        </form>
    </div>
</div>
@endsection
