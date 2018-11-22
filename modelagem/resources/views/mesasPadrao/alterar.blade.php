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
            Alterar mesa
        @endslot
        @slot('metodo')
            PUT
        @endslot
        @slot('url')
            {{route('mesaPadrao.update', ['id' => $mesa->id])}}
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Número</label>
                <input required value="{{old('$mesa->numero')}}" name="numero" type="text" class="form-control" placeholder="{{$mesa->numero}}">
            </div>
            @slot('botao')
                Alterar
            @endslot
        @endslot
    @endcomponent
@stop
