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
            Adicionar Funcionario
        @endslot
        @slot('metodo')
            POST
        @endslot
        @slot('rota')
            {{route('funcionarios.store')}}
        @endslot
        @slot('formulario')
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                        <input required value="{{old('nome')}}" name="nome" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Nacionalidade</label>
                        <input required value="{{old('nacionalidade')}}" name="nacionalidade" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                            <label>Cargo</label>
                            <select required name="cargo_id" class="form-control" value="{{old('cargo_id')}}">
                                    @foreach($cargos as $cargo)
                                        <option value="{{ $cargo->id }}">
                                            {{ $cargo->nome }}
                                        </option>
                                    @endforeach
                            </select>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>Telefone</label>
                        <input required value="{{old('telefone')}}" name="telefone" type="text" class="form-control" placeholder=" ...">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input required value="{{old('email')}}" name="email" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>RG</label>
                        <input required value="{{old('rg')}}" name="rg" type="text" class="form-control" placeholder=" ...">
                    </div>
                    <div class="form-group">
                        <label>CPF</label>
                        <input required value="{{old('cpf')}}" name="cpf" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>Carteria de Trabalho</label>
                        <input required value="{{old('carteira_de_trabalho')}}" name="carteira_de_trabalho" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
                <div class="row">
                    <div class="form-group">
                        <label>Salário Base</label>
                        <input required value="{{old('salario_base')}}" name="salario_base" type="text" class="form-control" placeholder=" ...">
                    </div>
                </div>
            </div>
            <h4>Endereço</h4>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Cidade</label>
                    <input required type="text" name="cidade" class="form-control" value="{{old('cidade')}}">
                </div>

                <div class="form-group col-md-2">
                    <label>Estado</label>
                    <select required name="estado" class="form-control" value="{{old('estado')}}">
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SP</option>
                        <option>SE</option>
                        <option>TO</option>
                    </select>
                </div>

                <div class="form-group col-md-4">
                    <label>CEP</label>
                    <input type="text" class="form-control" name="cep" value="{{old('cep')}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label>Bairro</label>
                    <input required type="text" name="bairro" class="form-control" value="{{old('bairro')}}">
                </div>

                <div class="form-group col-md-4">
                    <label>Logradouro</label>
                    <input required type="text" name="logradouro" class="form-control" value="{{old('logradouro')}}">
                </div>

                <div class="form-group col-md-2">
                    <label>Número</label>
                    <input required type="number" name="numero" class="form-control" value="{{old('numero')}}">
                </div>
                <div class="form-group col-md-12">
                        <label>Complemento</label>
                        <textarea  type="textarea" name="complemento" class="form-control" value="{{old('complemento')}}"></textarea>
                </div>
            </div>

            @slot('botao')
                Adicionar
            @endslot
        @endslot
    @endcomponent
@stop
