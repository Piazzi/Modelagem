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
            /cargos_adicionar
        @endslot
        @slot('titulo')
            Cargos
        @endslot
        @slot('foreach')
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
              @foreach ($cargos as $cargo)
              <tr>
                <td> {{$cargo->id}} </td>
                <td> {{$cargo->nome}} </td>
                <td> {{$cargo->descricao}} </td>
                <td>
                    <a href="/cargos/cargos_visualizar/{{$cargo->id}}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a>
                    <a href="/cargos/cargos_alterar/{{$cargo->id}}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a>
                    <a href="/cargos/cargos_deletar/{{$cargo->id}}"> <button type="button" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></button></a>
                </td>
              </tr>
              @endforeach
        @endslot
        @slot('paginacao')
            {{$cargos->links()}}
        @endslot

@endcomponent

@stop
