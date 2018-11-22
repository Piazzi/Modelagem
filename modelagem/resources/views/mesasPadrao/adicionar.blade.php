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
            Adicionar mesa no restaurante
        @endslot
        @slot('metodo')
            POST
        @endslot
        @slot('url')
            {{route('mesaPadrao.store')}}
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Número</label>
                <input name="ocupada" value="0" hidden="true">
                <input required value="{{old('numero')}}" name="numero" type="text" class="form-control" placeholder="Insira o número da mesa">
            </div>
            @slot('botao')
                Adicionar
            @endslot
        @endslot
    @endcomponent
@stop
