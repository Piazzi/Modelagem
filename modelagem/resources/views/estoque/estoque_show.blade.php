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
            Visualizar Item Do Estoque
        @endslot
        @slot('metodo')
            GET
        @endslot
        @slot('rota')
            /estoque
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Nome</label>
                <label class="form-control">{{$estoque->nome}}</label>
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <label class="form-control">{{$estoque->quantidade}}</label>
            </div>
            <div class="form-group">
                <label>Quantidade Minima</label>
                <label class="form-control">{{$estoque->quantidade_minima}}</label>
            </div>
            <div class="form-group">
                <label>Valor de Compra</label>
                <label class="form-control">{{$estoque->valor_compra}}</label>
            </div>
            <div class="form-group">
                <label>Valor de Venda</label>
                <label class="form-control">{{$estoque->valor_venda}}</label>
            </div>
            @slot('botao')
                Voltar
            @endslot
        @endslot
    @endcomponent
@stop
