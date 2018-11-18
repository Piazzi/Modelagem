@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@if ($errors->any())
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-ban"></i> Alert!</h4>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
@stop

@section('content')

    @component('pagina-formulario')
        @slot('titulo')
            Visualizar Usuário
        @endslot
        @slot('metodo')
            GET
        @endslot
        @slot('rota')
            /usuarios
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Nome</label>
                <label class="form-control">{{$usuario->name}}</label>
            </div>
            <div class="form-group">
                <label>Email</label>
                <label class="form-control">{{$usuario->email}}</label>
            </div>
            <div class="form-group">
                <label>Categoria do Usuário</label>
                <label class="form-control">{{$usuario->categoria}}</label>
            </div>
            @slot('botao')
                Voltar
            @endslot
        @endslot
    @endcomponent
@stop
