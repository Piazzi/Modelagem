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
            Adicionar Usuário
        @endslot
        @slot('metodo')
            POST
        @endslot
        @slot('rota')
            {{route('usuarios.store')}}
        @endslot
        @slot('formulario')
            <div class="form-group">
                <label>Nome</label>
                <input required value="{{old('name')}}" name="name" type="text" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input required value="{{old('password')}}" name="password" type="password" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input required value="{{old('email')}}" name="email" type="email" class="form-control" placeholder=" ...">
            </div>
            <div class="form-group">
                <label>Categoria de Usuário</label>
                <select required value="{{old('categoria')}}" name="categoria" class="form-control">
                    <option value="funcionario">Funcionário</option>
                    <option value="gerente">Gerente</option>
                    <option value="administrador">Administrador</option>
                </select>
            </div>
            @slot('botao')
                Adicionar
            @endslot
        @endslot
    @endcomponent
@stop
