@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

   @if (session()->has('Sucesso'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
            <strong>{{ session('Sucesso') }}</strong>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-close"></i> ERROR!</h4>
            <strong>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </strong>
        </div>
    @endif
@stop

@section('content')

@component('pagina-tabela')

        @slot('url')
            {{route('pedidos.create')}}
        @endslot
        @slot('titulo')
            Pedidos
        @endslot
        @slot('thead')
        <tr>
                <th>ID</th>
                <th>Itens</th>
                <th>Mesa</th>
                <th>Cliente</th>
                <th>Valor</th>
                <th>Atendente</th>
                <th>Status</th>
                <th>Ações</th>
        </tr>
        @endslot
        @slot('foreach')

              @foreach ($pedidos as $pedido)
              <tr>
                <td> {{$pedido->id}} </td>
                <td> {{$pedido->itens}} </td>
                <td> {{$pedido->mesa}} </td>
                <td> {{$pedido->cliente}} </td>
                <td> {{$pedido->valor}} </td>
                <td> {{$pedido->atendente}} </td>
                    @if($pedido->status == 'em_andamento')
                    <td><span class="label label-warning">{{$pedido->status}}</span></td>
                    @endif
                    @if($pedido->status == 'atrasado')
                    <td><span class="label label-danger">{{$pedido->status}}</span></td>
                    @endif
                    @if($pedido->status == 'fechado')
                    <td><span class="label label-success">{{$pedido->status}}</span></td>
                    @endif
                <td>
                <a href="{{route('pedidos.show', $pedido->id)}}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a>
                <a href="{{route('pedidos.edit', $pedido->id)}}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a>
                <form method="POST" action="{{route('pedidos.destroy', $pedido->id)}}">
                @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger "><i class="fa fa-fw fa-trash"></i></button>
                </form>
                </td>
              </tr>
              @endforeach
        @endslot
        @slot('paginacao')
        @endslot

@endcomponent

@stop
