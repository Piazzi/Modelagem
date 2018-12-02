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
            Adicionar Pedido
        @endslot
        @slot('metodo')
            POST
        @endslot
        @slot('rota')
            {{route('pedidos.store')}}
        @endslot
        @slot('formulario')
           <div class="row">
                <div class="col-md-12 form-group">
                    <label for="">Itens do Pedido</label>
                    <textarea required value="{{old('itens')}}" class="form-control" placeholder="O que o cliente pediu?" name="itens" id="" cols="3" rows="5"></textarea>
                </div>
           </div>
           <div class="row">
                <div class="col-md-4 form-group">
                    <label for="">Mesa</label>
                    <input required value="{{old('mesa')}}" class="form-control" type="number" name="mesa" id="">
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="">Status</label>
                     <select class="form-control" name="status" value="{{ old('status') }}">
                        <option value="em_andamento">Em Andamento</option>
                        <option value="fechado">Fechado</option>
                        <option value="atrasado">Atrasado</option>
                      </select>
                    </div>
                </div>
                <div class="col-md-4 form-group">
                    <label for="">Valor</label>
                    <input required class="form-control" value="{{old('valor')}}" type="number" name="valor" id="">
                </div>
           </div>
           <div class="row">
                <div class="col-md-6 form-group">
                    <label for="">Atendente</label>
                    <input required type="text" name="atendente" class="form-control" value="{{Auth::user()->name }}">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Cliente</label>
                    <input required type="text" name="cliente" class="form-control" value="{{old('cliente')}}">
                </div>
           </div>

            @slot('botao')
                Adicionar
            @endslot
        @endslot
    @endcomponent
@stop
