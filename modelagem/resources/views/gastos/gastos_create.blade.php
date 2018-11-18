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
            Adicionar despesa
        @endslot
        @slot('metodo')
            POST
        @endslot
        @slot('rota')
            {{route('gastos.store')}}
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Nome</label>
                <input required value="{{old('nome')}}" name="nome" type="text" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Valor</label>
                <input required value="{{old('valor')}}" name="valor" type="number" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Data</label>
                <input required value="{{old('data')}}" name="data" type="date" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input required value="{{old('descricao')}}" name="descricao" type="textarea" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Pago</label>
                <select class="form-control" name="pago" id="">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>

            @slot('botao')
                Adicionar
            @endslot
        @endslot
    @endcomponent
@stop
