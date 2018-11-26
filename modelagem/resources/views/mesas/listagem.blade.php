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
            {{route('mesas.create')}}
        @endslot
        @slot('titulo')
            Mesas Ocupadas do salão
        @endslot
        @slot('thead')
            <tr>
                <th>Número da mesa</th>
                <th>Atendente</th>
                <th>Ações</th>
            </tr>
        @endslot
        @slot('foreach')

              @foreach ($mesas as $mesa)
              <tr>
                <td> {{$mesa->id}} </td>
                <td> {{$mesa->atendente}} </td>
                <td>
                    <a href="{{ route('mesas.show', $mesa ) }}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a>
                    <a href="{{ route('mesas.edit', $mesa ) }}"> <button type="button" class="btn btn-success"><i class="fa fa-fw fa-shopping-cart"></i></button></a>
                </td>
              </tr>
              @endforeach
        @endslot
        @slot('paginacao')

        @endslot

@endcomponent

@stop
