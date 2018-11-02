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
            Visualizar Cargo
        @endslot
        @slot('metodo')
            GET
        @endslot
        @slot('rota')
            /cargos
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Nome</label>
                <label class="form-control">{{$cargo->nome}}</label>
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <label class="form-control">{{$cargo->descricao}}</label>
            </div>
        @endslot
    @endcomponent
@stop
