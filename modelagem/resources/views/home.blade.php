@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')


  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{$pedidosCont}}</h3>

          <p>Número de Pedidos</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="/pedidos" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
        <h3>R$<sup style="font-size: 20px">{{$entradas}}</sup></h3>

          <p>Receita Total</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="/entradas" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
        <h3>{{$usuarios}}</h3>

          <p>Usarios Registrados</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="/usuarios" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
        <h3>{{$estoques}}</h3>

          <p>Itens no Estoque</p>
        </div>
        <div class="icon">
            <i class="fa fa-fw fa-archive"></i>
        </div>
        <a href="/estoque" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>




      <div class="box box-info">
            <div class="box-header with-border">

              <h3 class="box-title">Ultimos Pedidos</h3>
                <div style="" class="box-tools pull-left">
                    <div class="input-group input-group-sm" style="width: 150px;">
                      <input id="table-search-input" type="text" class="form-control pull-right" placeholder="Procure...">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                </div>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Itens</th>
                    <th>Status</th>
                    <th>Mesa</th>
                    <th>Atendente</th>
                    <th>Nome do Cliente</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody id="table-search">
                  @foreach($pedidos as $pedido)
                  <tr>
                    <td><a href="pages/examples/invoice.html">{{$pedido->id}}</a></td>
                    <td>{{$pedido->itens}}</td>
                    @if($pedido->status == 'em_andamento')
                    <td><span class="label label-warning">{{$pedido->status}}</span></td>
                    @endif
                    @if($pedido->status == 'atrasado')
                    <td><span class="label label-danger">{{$pedido->status}}</span></td>
                    @endif
                    @if($pedido->status == 'fechado')
                    <td><span class="label label-success">{{$pedido->status}}</span></td>
                    @endif
                    <td> {{$pedido->mesa}} </td>
                    <td>{{$pedido->atendente }}</td>
                    <td>{{$pedido->cliente}}</td>
                    <td class="pull-right">
                    <a href="{{route('pedidos.show', $pedido->id)}}"> <button type="button" class="btn btn-primary"><i class="fa fa-fw fa-search-plus"></i></button></a>
                    <a href="{{route('pedidos.edit', $pedido->id)}}"> <button type="button" class="btn btn-warning"><i class="fa fa-fw fa-edit"></i></button></a>
                    </td>
                  </tr>
                  @endforeach

                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              <a href="{{route('pedidos.create')}}" class="btn btn-sm btn-info btn-flat pull-left">Crie um novo pedido</a>
              <a href="/pedidos" class="btn btn-sm btn-info btn-flat pull-right">Veja todos os pedidos</a>
            </div>
            <!-- /.box-footer -->
          </div>
@stop
