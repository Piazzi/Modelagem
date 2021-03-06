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
            Visualizar mesa
        @endslot
        @slot('url')
            {{route('mesaPadrao.index')}}
        @endslot
        @slot('metodo')
            GET
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Número</label>
                <label class="form-control">{{$mesa->numero}}</label>
            </div>
            @slot('botao')
                Voltar
            @endslot
        @endslot
    @endcomponent
@stop
