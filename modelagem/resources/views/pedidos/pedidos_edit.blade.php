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
            Alterar Pedido
        @endslot
        @slot('metodo')
            PUT
        @endslot
        @slot('rota')
            {{route('pedidos.update', $pedido->id)}}
        @endslot
        @slot('formulario')
        <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Itens do Pedido</label>
                    <textarea required value="{{$pedido->itens}}" class="form-control" placeholder="O que o cliente pediu?" name="itens" id="" cols="3" rows="5">{{$pedido->itens}}</textarea>
                </div>
           </div>
           <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">Mesa</label>
                    <input required value="{{$pedido->mesa}}" class="form-control" type="number" name="mesa" id="">
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Status</label>
                      <select value="{{$pedido->status}}" class="form-control" name="status" id="">
                        <option value="em_andamento">Em Andamento</option>
                        <option value="fechado">Fechado</option>
                        <option value="atrasado">Atrasado</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Valor</label>
                    <input required class="form-control" value="{{$pedido->valor}}" type="number" name="valor" id="">
                </div>
           </div>
           <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Atendente</label>
                    <input required type="text" name="atendente" class="form-control" value="{{$pedido->atendente}}">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Cliente</label>
                    <input required type="text" name="cliente" class="form-control" value="{{$pedido->cliente}}">
                </div>
           </div>
            @slot('botao')
                Alterar
            @endslot
        @endslot
    @endcomponent
@stop
