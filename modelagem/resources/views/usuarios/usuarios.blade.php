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
            {{route('usuarios.create')}}
        @endslot
        @slot('titulo')
            Cargos
        @endslot
        @slot('thead')
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Categoria</th>
                <th>Visualizar</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        @endslot
        @slot('foreach')

              @foreach ($usuarios as $usuario)
              <tr>
                <td> {{$usuario->id}} </td>
                <td> {{$usuario->name}} </td>
                <td> {{$usuario->email}} </td>
                <td> {{$usuario->categoria}}</td>
                <td>
                <a href="{{route('usuarios.show', $usuario->id)}}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a></td>
                <td><a href="{{route('usuarios.edit', $usuario->id)}}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a></td>
                </td><td><form method="POST" action="{{route('usuarios.destroy', $usuario->id)}}">
                @csrf
                    <input type="hidden" name="_method" value="DELETE">
                    <button type="submit" class="btn btn-danger "><i class="fa fa-fw fa-trash"></i></button>
                </form></td>
                </td>
              </tr>
              @endforeach
        @endslot
        @slot('paginacao')
            {{$usuarios->links()}}
        @endslot

@endcomponent

@stop
