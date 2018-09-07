@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
<div class="box">
    <div class="box-header with-border">
      <h3 class="box-title"> <strong> Cargos </strong> </h3>
      <div class="box-tools pull-right">
        <!-- Buttons, labels, and many other things can be placed here! -->
        <!-- Here is a label for example -->
        <span class="label label-primary" data-toggle="modal" data-target="#adicionarModal"><strong> Adicionar </strong></span>
      </div>
      <!-- /.box-tools -->
    </div>
    <!-- /.box-header -->
  </div>
  <!-- /.box -->
   @if (session()->has('Sucesso'))
        <div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Sucesso!</h4>
            <strong>{{ session('Sucesso') }}</strong>
        </div>
    @endif
@stop

@section('content')

<div class="box">
    <div class="box-header">
      <h3 class="box-title">Cargos cadastrados</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>ID</th>
          <th>Nome</th>
          <th>Descrição</th>
          <th></th>
        </tr>
        @foreach ($cargos as $cargo)
        <tr>
          <td> {{$cargo->id}} </td>
          <td> {{$cargo->nome}} </td>
          <td> {{$cargo->descricao}} </td>
          <td>
                <i class="fa fa-fw fa-pencil fa-2x" data-toggle="modal" data-target="alterarModal"></i>
                <i class="fa fa-fw fa-search-plus fa-2x" data-toggle="modal" data-target="visualizarModal"></i>
                <i class="fa fa-fw fa-trash fa-2x" data-toggle="modal" data-target="excluirModal"></i>
            </td>
        </tr>
        @endforeach
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>

      <!-- Modal Adicionar  -->
    <div class="modal fade" id="adicionarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span></button>
                    <h4 class="modal-title">Adicionar Cargo</h4>
                </div>
                <div class="modal-body">
                    <form action="{{route('cargos.store')}}" method="post" token="{{ csrf_token()}}">
                            {{ csrf_field() }}
                    <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="Insira o nome do cargo">
                    </div>
                    <div class="form-group">
                        <label for="">Descrição</label>
                        <input type="text" class="form-control" name="descricao" id="" aria-describedby="helpId" placeholder="Insira a descrição">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
                    </form>
            </div>
        </div>
    </div>

      <!-- Modal Visualizar  -->
      <div class="modal fade" id="visualizarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span></button>
                        <h4 class="modal-title">Adicionar Cargo</h4>
                    </div>
                    <div class="modal-body">
                    <form action="cargos/{{$cargo->id}}" method="post" token="{{ csrf_token()}}">
                                {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Nome</label>
                            <input disabled type="text" class="form-control" name="nome" id="" aria-describedby="helpId" placeholder="Insira o nome do cargo">
                        </div>
                        <div class="form-group">
                            <label for="">Descrição</label>
                            <input disabled type="text" class="form-control" name="descricao" id="" aria-describedby="helpId" placeholder="Insira a descrição">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    </div>
                        </form>
                </div>
            </div>
        </div>


@stop
