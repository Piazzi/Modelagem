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
            Adicionar Item ao Estoque
        @endslot
        @slot('metodo')
            POST
        @endslot
        @slot('rota')
            {{route('estoque.store')}}
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Name</label>
                <input required value="{{old('nome')}}" name="nome" type="text" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Quantidade</label>
                <input required value="{{old('quantidade')}}" name="quantidade" type="number" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Quantidade Minima</label>
                <input required value="{{old('quantidade_minima')}}" name="quantidade_minima" type="number" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Valor Compra</label>
                <input required value="{{old('valor_compra')}}" name="valor_compra" type="number" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Valor Venda</label>
                <input required value="{{old('valor_venda')}}" name="valor_venda" type="number" class="form-control" placeholder=" ...">
            </div>

            @slot('botao')
                Adicionar
            @endslot
        @endslot
    @endcomponent
@stop
