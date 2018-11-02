

<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <a href="{{$url}}">  <button  type="button" class="btn btn-block btn-primary">Adicionar</button> </a>


        <div class="box-header">

        <h3 class="box-title"><strong> {{$titulo}} </strong></h3>

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
          <table class="table table-hover table-bordered ">
            <tbody>

                {{$foreach}}

            </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>

  <ul class="pagination pagination-sm no-margin ">
    {{ $paginacao }}
  </ul>

