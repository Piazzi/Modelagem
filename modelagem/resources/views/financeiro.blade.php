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




@stop
