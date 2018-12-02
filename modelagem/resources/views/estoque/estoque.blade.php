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
            {{route('estoque.create')}}
        @endslot
        @slot('titulo')
            Estoque
        @endslot
        @slot('thead')
        <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Quantidade Minima</th>
                <th>Valor de Compra</th>
                <th>Valor de Venda</th>
                <th>Ações</th>
        </tr>
        @endslot
        @slot('foreach')

              @foreach ($estoque as $e)
              <tr>
                <td> {{$e->id}} </td>
                <td> {{$e->nome}} </td>
                <td> {{$e->quantidade}} </td>
                <td> {{$e->quantidade_minima}} </td>
                <td> {{$e->valor_compra}} </td>
                <td> {{$e->valor_venda}} </td>

                <td>
                <a href="{{route('estoque.show', $e->id)}}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a>
                <a href="{{route('estoque.edit', $e->id)}}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a>
                <form method="POST" action="{{route('estoque.destroy', $e->id)}}">
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
