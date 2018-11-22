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
            Alterar Cargo
        @endslot
        @slot('metodo')
            PUT
        @endslot
        @slot('url')
            {{route('cargos.update')}}
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Name</label>
                <input required value="{{old('nome')}}" name="nome" type="text" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Descrição</label>
                <input required value="{{old('descricao')}}" name="descricao" type="text" class="form-control" placeholder=" ...">
            </div>
            @slot('botao')
                Alterar
            @endslot
        @endslot
    @endcomponent
@stop
