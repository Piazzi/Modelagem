<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{$titulo}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form  method="{{$metodo}}" action="{{$rota}}" role="form" {{ csrf_token() }}>
            {{ csrf_field() }}

            {{$formulario}}
            <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
        </form>
        </div>
        <!-- /.box-body -->
</div>
