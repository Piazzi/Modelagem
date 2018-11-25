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
            Visualizar Funcionário
        @endslot
        @slot('metodo')
            GET
        @endslot
        @slot('rota')
            /funcionarios
        @endslot
        @slot('formulario')
        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                        <input disabled value="{{$funcionario->nome}}" name="nome" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nacionalidade</label>
                        <input disabled value="{{$funcionario->nacionalidade}}" name="nacionalidade" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                            <label>Cargo</label>
                    <input disabled class="form-control" value="{{$funcionario->cargo_id}}">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>Telefone</label>
                        <input disabled value="{{$funcionario->telefone}}" name="telefone" type="text" class="form-control" placeholder=" ...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input disabled value="{{$funcionario->email}}" name="email" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>RG</label>
                        <input disabled value="{{$funcionario->rg}}" name="rg" type="text" class="form-control" placeholder=" ...">
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input disabled value="{{$funcionario->cpf}}" name="cpf" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>Carteria de Trabalho</label>
                        <input disabled value="{{$funcionario->carteira_de_trabalho}}" name="carteira_de_trabalho" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>Salário Base</label>
                        <input disabled value="{{$funcionario->salario_base}}" name="salario_base" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <h4>Endereço</h4>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Cidade</label>
                    <input disabled type="text" name="cidade" class="form-control" value="{{$funcionario->cidade}}">
                </div>

                <div class="form-group col-md-2">
                    <label>Estado</label>
                <input type="text" disabled class="form-control" value="{{$funcionario->estado}}">
                </div>

                <div class="form-group col-md-4">
                    <label>CEP</label>
                    <input disabled type="text" class="form-control" name="cep" value="{{$funcionario->cep}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Bairro</label>
                    <input disabled type="text" name="bairro" class="form-control" value="{{$funcionario->bairro}}">
                </div>

                <div class="form-group col-md-4">
                    <label>Logradouro</label>
                    <input disabled type="text" name="logradouro" class="form-control" value="{{$funcionario->logradouro}}">
                </div>

                <div class="form-group col-md-2">
                    <label>Número</label>
                    <input disabled type="number" name="numero" class="form-control" value="{{$funcionario->numero}}">
                </div>
                <div class="form-group col-md-12">
                        <label>Complemento</label>
                <textarea disabled type="textarea" name="complemento" class="form-control" value="{{old('complemento')}}">{{$funcionario->complemento}}</textarea>
                </div>
            </div>
            @slot('botao')
                Voltar
            @endslot
        @endslot
    @endcomponent
@stop
