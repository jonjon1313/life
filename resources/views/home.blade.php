@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-md-3">
            <div class="card border-secundary mb-3" style="max-width: 18rem;">
                <div class="card-header">Pessoas</div>
                    <div class="card-body text-secondary">
                        <a class="nav-link" href="{{ route('pessoas.index') }}">{{ __('Pessoas') }}</a>
                        <a class="nav-link" href="{{ route('pessoas.create') }}">{{ __('Adicionar Pessoa') }}</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secundary mb-3" style="max-width: 18rem;">
                <div class="card-header">Produtos</div>
                    <div class="card-body text-secondary">
                        <a class="nav-link" href="{{ route('produtos.index') }}">{{ __('Produtos') }}</a>
                        <a class="nav-link" href="{{ route('produtos.create') }}">{{ __('Adicionar Produtos') }}</a>
                    </div>
            </div>
        </div> 
        <div class="col-md-3">
            <div class="card border-secundary mb-3" style="max-width: 18rem;">
                <div class="card-header">Funcionalidades</div>
                    <div class="card-body text-secondary">
                        <a class="nav-link" href="{{ route('funcionalidades.index') }}">{{ __('Funcionalidades') }}</a>
                        <a class="nav-link" href="{{ route('funcionalidades.create') }}">{{ __('Adicionar Funcionalidades') }}</a>
                    </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-secundary mb-3" style="max-width: 18rem;">
                <div class="card-header">Perfis</div>
                    <div class="card-body text-secondary">
                        <a class="nav-link" href="{{ route('perfis.index') }}">{{ __('Perfis') }}</a>
                        <a class="nav-link" href="{{ route('perfis.create') }}">{{ __('Adicionar Perfis') }}</a>
                    </div>
            </div>
        </div>
    </div>

</div>
@endsection
