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
            Abrir mesa
        @endslot
        @slot('metodo')
            POST
        @endslot
        @slot('url')
            {{route('mesas.store')}}
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label for="exampleFormControlSelect1">Selecionar mesa</label>
                    <select class="form-control" name="mesa_id">
                        @foreach($mesasLivres as $mesa)
                            <option value="{{$mesa->id}}">{{$mesa->numero}}</option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label>Atendente</label>
                <input required value="{{old('atendente')}}" name="atendente" type="text" class="form-control" placeholder="Insira o seu nome">
            </div>

            <input name="mesa_fechada" value="0" type="hidden">

            @slot('botao')
                Abrir mesa
            @endslot
        @endslot
    @endcomponent
@stop
