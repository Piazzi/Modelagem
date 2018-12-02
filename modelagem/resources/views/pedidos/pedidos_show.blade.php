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
            Visualizar Pedido
        @endslot
        @slot('metodo')
            GET
        @endslot
        @slot('rota')
            /pedidos
        @endslot
        @slot('formulario')
        <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Itens do Pedido</label>
                    <textarea disabled value="{{$pedido->itens}}" class="form-control" placeholder="O que o cliente pediu?"  id="" cols="3" rows="5">{{$pedido->itens}}</textarea>
                </div>
           </div>
           <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">Mesa</label>
                    <input disabled value="{{$pedido->mesa}}" class="form-control" type="number" " id="">
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Status</label>
                      <input disabled class="form-control" value="{{$pedido->status}}" for=""></input>
                    </div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Valor</label>
                    <input disabled class="form-control" value="{{$pedido->valor}}" type="number" name="valor" id="">
                </div>
           </div>
           <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Atendente</label>
                    <input disabled type="text" name="atendente" class="form-control" value="{{$pedido->atendente}}">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Cliente</label>
                    <input disabled type="text" name="cliente" class="form-control" value="{{$pedido->cliente}}">
                </div>
           </div>

            @slot('botao')
                Voltar
            @endslot
        @endslot
    @endcomponent
@stop
