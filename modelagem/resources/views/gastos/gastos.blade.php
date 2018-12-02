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
            {{route('gastos.create')}}
        @endslot
        @slot('titulo')
            Despesas
        @endslot
        @slot('thead')
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Data</th>
                <th>Descrição</th>
                <th>Pago</th>
                <th>Visualizar</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        @endslot
        @slot('foreach')

              @foreach ($gastos as $gasto)
              <tr>
                <td> {{$gasto->id}} </td>
                <td> {{$gasto->nome}} </td>
                <td> {{$gasto->valor}} </td>
                <td> {{$gasto->data}} </td>
                <td> {{$gasto->descricao}} </td>
                <td> {{$gasto->pago}} </td>

                <td><a href="{{route('gastos.show', $gasto->id)}}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a></td>
                <td><a href="{{route('gastos.edit', $gasto->id)}}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a></td>
                <td><form method="POST" action="{{route('gastos.destroy', $gasto->id)}}">
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
