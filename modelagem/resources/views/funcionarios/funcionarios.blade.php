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
        {{route('funcionarios.create')}}
        @endslot
        @slot('titulo')
            Funcionários
        @endslot
        @slot('thead')
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>Email</th>
                <th>Cargo</th>
                <th>Visualizar</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
        @endslot
        @slot('foreach')

              @foreach ($funcionarios as $funcionario)
              <tr>
                <td> {{$funcionario->id}} </td>
                <td> {{$funcionario->nome}} </td>
                <td> {{$funcionario->telefone}} </td>
                <td> {{$funcionario->email}}</td>
                <td> {{$funcionario->cargo_id}}</td>
                <td><a href="{{route('funcionarios.show', $funcionario->id)}}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a></td>
                <td><a href="{{route('funcionarios.edit', $funcionario->id)}}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a></td>
                <td><form method="POST" action="{{route('funcionarios.destroy', $funcionario->id)}}">
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
