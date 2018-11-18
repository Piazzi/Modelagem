@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')

@stop

@section('content')
<ul class="timeline">
        <!-- timeline time label -->
        <li class="time-label">
              <span class="bg-red">
                10 Feb. 2014
              </span>
        </li>
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <li>
          <i class="fa fa-envelope bg-blue"></i>

          <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

            <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

            <div class="timeline-body">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
              weebly ning heekya handango imeem plugg dopplr jibjab, movity
              jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
              quora plaxo ideeli hulu weebly balihoo...
            </div>
            <div class="timeline-footer">
              <a class="btn btn-primary btn-xs">Read more</a>
              <a class="btn btn-danger btn-xs">Delete</a>
            </div>
          </div>
        </li>
        <!-- END timeline item -->
        <!-- timeline item -->
        <li>
          <i class="fa fa-user bg-aqua"></i>

          <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>

            <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
          </div>
        </li>
        <!-- END timeline item -->
        <!-- timeline item -->
        <li>
          <i class="fa fa-comments bg-yellow"></i>

          <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>

            <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

            <div class="timeline-body">
              Take me to your leader!
              Switzerland is small and neutral!
              We are more like Germany, ambitious and misunderstood!
            </div>
            <div class="timeline-footer">
              <a class="btn btn-warning btn-flat btn-xs">View comment</a>
            </div>
          </div>
        </li>
        <!-- END timeline item -->
        <!-- timeline time label -->
        <li class="time-label">
              <span class="bg-green">
                3 Jan. 2014
              </span>
        </li>
        <!-- /.timeline-label -->
        <!-- timeline item -->
        <li>
          <i class="fa fa-camera bg-purple"></i>

          <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>

            <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

            <div class="timeline-body">
              <img src="http://placehold.it/150x100" alt="..." class="margin">
              <img src="http://placehold.it/150x100" alt="..." class="margin">
              <img src="http://placehold.it/150x100" alt="..." class="margin">
              <img src="http://placehold.it/150x100" alt="..." class="margin">
            </div>
          </div>
        </li>
        <!-- END timeline item -->
        <!-- timeline item -->
        <li>
          <i class="fa fa-video-camera bg-maroon"></i>

          <div class="timeline-item">
            <span class="time"><i class="fa fa-clock-o"></i> 5 days ago</span>

            <h3 class="timeline-header"><a href="#">Mr. Doe</a> shared a video</h3>

            <div class="timeline-body">
              <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tMWkeBIohBs" frameborder="0" allowfullscreen=""></iframe>
              </div>
            </div>
            <div class="timeline-footer">
              <a href="#" class="btn btn-xs bg-maroon">See comments</a>
            </div>
          </div>
        </li>
        <!-- END timeline item -->
        <li>
          <i class="fa fa-clock-o bg-gray"></i>
        </li>
      </ul>

  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>150</h3>

          <p>New Orders</p>
        </div>
        <div class="icon">
          <i class="ion ion-bag"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>53<sup style="font-size: 20px">%</sup></h3>

          <p>Bounce Rate</p>
        </div>
        <div class="icon">
          <i class="ion ion-stats-bars"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>44</h3>

          <p>User Registrations</p>
        </div>
        <div class="icon">
          <i class="ion ion-person-add"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>65</h3>

          <p>Unique Visitors</p>
        </div>
        <div class="icon">
          <i class="ion ion-pie-graph"></i>
        </div>
        <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
  </div>


@stop
