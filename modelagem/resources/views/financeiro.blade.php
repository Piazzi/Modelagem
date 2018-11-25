@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')

<!-- Apply any bg-* class to to the info-box to color it -->
<div class="info-box bg-blue">
    <span class="info-box-icon"><i class="fa fa-calendar-o"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Lucro</span>
      <span class="info-box-number">41,410 R$</span>
      <!-- The progress section is optional -->
      <div class="progress">
        <div class="progress-bar" style="width: 70%"></div>
      </div>
      <span class="progress-description">
        70% Increase in 30 Days
      </span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->

  <!-- Apply any bg-* class to to the info-box to color it -->
  <div class="info-box bg-red">
    <span class="info-box-icon"><i class="fa fa-bookmark-o"></i></span>
    <div class="info-box-content">
      <span class="info-box-text">Pedidos</span>
      <span class="info-box-number">1,410</span>
      <!-- The progress section is optional -->
      <div class="progress">
        <div class="progress-bar" style="width: 70%"></div>
      </div>
      <span class="progress-description">
        70% Increase in 30 Days
      </span>
    </div><!-- /.info-box-content -->
  </div><!-- /.info-box -->

  <table class="table table-striped table-bordered table-inverse table-responsive">
      <thead class="thead-dark">
          <tr>
              <th><strong>Número</strong></th>
              <th>Gastos</th>
              <th>Entradas</th>
          </tr>
          </thead>
          <tbody>
              <tr>
                  <td scope="row"></td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. In ea similique nesciunt illum voluptate consectetur voluptas! Modi quas ipsam accusantium et eius quidem, iste veritatis dignissimos dicta corporis ducimus reprehenderit!</td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur culpa nobis, pariatur nihil quas maxime minima, distinctio accusamus nesciunt aut, asperiores itaque quibusdam quis! Iure error alias provident. Ducimus, aperiam!</td>
              </tr>
              <tr>
                  <td scope="row"></td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed ea ratione corrupti excepturi commodi at sequi laborum esse voluptatum beatae autem illum, aspernatur odio voluptatem praesentium aliquam, eos temporibus nisi.</td>
                  <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati totam architecto repellendus laudantium amet esse quasi doloribus ea nisi, ipsa ut est magni recusandae, qui officiis earum molestias, labore facere?</td>
              </tr>
          </tbody>
  </table>


  <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Monthly Recap Report</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
            <div class="btn-group">
              <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-wrench"></i></button>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </div>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-8">
              <p class="text-center">
                <strong>Sales: 1 Jan, 2014 - 30 Jul, 2014</strong>
              </p>

              <div class="chart">
                <!-- Sales Chart Canvas -->
                <canvas id="salesChart" style="height: 172px; width: 675px;" width="1350" height="344"></canvas>
              </div>
              <!-- /.chart-responsive -->
            </div>
            <!-- /.col -->
            <div class="col-md-4">
              <p class="text-center">
                <strong>Goal Completion</strong>
              </p>

              <div class="progress-group">
                <span class="progress-text">Add Products to Cart</span>
                <span class="progress-number"><b>160</b>/200</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-aqua" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Complete Purchase</span>
                <span class="progress-number"><b>310</b>/400</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-red" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Visit Premium Page</span>
                <span class="progress-number"><b>480</b>/800</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-green" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
              <div class="progress-group">
                <span class="progress-text">Send Inquiries</span>
                <span class="progress-number"><b>250</b>/500</span>

                <div class="progress sm">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%"></div>
                </div>
              </div>
              <!-- /.progress-group -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- ./box-body -->
        <div class="box-footer">
          <div class="row">
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 17%</span>
                <h5 class="description-header">$35,210.43</h5>
                <span class="description-text">TOTAL REVENUE</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-yellow"><i class="fa fa-caret-left"></i> 0%</span>
                <h5 class="description-header">$10,390.90</h5>
                <span class="description-text">TOTAL COST</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block border-right">
                <span class="description-percentage text-green"><i class="fa fa-caret-up"></i> 20%</span>
                <h5 class="description-header">$24,813.53</h5>
                <span class="description-text">TOTAL PROFIT</span>
              </div>
              <!-- /.description-block -->
            </div>
            <!-- /.col -->
            <div class="col-sm-3 col-xs-6">
              <div class="description-block">
                <span class="description-percentage text-red"><i class="fa fa-caret-down"></i> 18%</span>
                <h5 class="description-header">1200</h5>
                <span class="description-text">GOAL COMPLETIONS</span>
              </div>
              <!-- /.description-block -->
            </div>
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-footer -->
      </div>

@stop
