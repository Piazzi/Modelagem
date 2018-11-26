<div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">{{$titulo}}</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <form  method="POST" action="{{$rota}}" role="form" {{ csrf_token() }}>

            {{ csrf_field() }}
        <input type="hidden" name="_method" value="{{$metodo}}">

            {{$formulario}}
        <button class="btn btn-primary btn-block" type="submit">{{$botao}}</button>
        </form>
        </div>
        <!-- /.box-body -->
</div>
