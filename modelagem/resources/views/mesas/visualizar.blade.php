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
    <div class="panel panel-default">
        <div class="panel panel-head">
            <h2>Mesa {{$mesa->mesa_id}} </h2>
            <a href="{{ route('mesas.edit', ['id' => $mesa->id] ) }}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a>
            
        </div>
        <div class="panel panel-body">
            <h3>Infos</h3>
        </div>
        
    </div>

    <div class="panel panel-default">
        <div class="panel panel-head">
            <h2>Pedidos</h2>
            <!-- Editar essa rota para pedido.create -->
            <a href="{{ route('mesas.edit', $mesa ) }}"> <button type="button" class="btn btn-success"><i class="fa fa-fw fa-shopping-cart"></i></button></a>
            
        </div>
        <div class="panel panel-body">
            <h3>Pedidos</h3>
            <h4>Listagem de pedidos<h4>
        </div>
        
    </div>

    <!-- Editar essa rota para pedido.destroy -->
    <a href="{{ route('mesas.edit', $mesa ) }}"> <button type="button" class="btn btn-success"><i class="fa fa-3x fa-money"> Fechar mesa</i></button></a>
    
@stop
