@extends('layouts.home')

@section('title','Yerler')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h1 class="page-header">{{$title}}</h1>
          </div>

        

    <div class="section" id="recent-projects" style="position: relative;">
        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

    <div class="container container-int">
      
      <div class="row">
        <div>
          <?php 
          
            
          ?>
        </div>

        <div class="col-md-8 col-sm-8">

          <div class="post">
            <h1 class="post-title" style="font-family:Arial">{{$data2->description}}</h1>
            <p class="post-meta">
              <i class="fa fa-calendar-o first"></i> {{$data2->created_at}}
              <i class="fa fa-user"></i> Admin
              <i class="fa fa-comment"></i> <a href="#">2 comments</a>
            </p>
          
          <div class="img-post">
            
            <div id="myCarousel" class="carousel slide" style="width:100%;">

                <!-- Wrapper for slides -->
                <div class="carousel-inner" >

                  <div class="item active">
                    <div class="fill" style="background-image:url('{{Storage::url($data2->image)}}');"></div>
                      <div class="carousel-caption">
                        <h1></h1>
                      </div>
                  </div>


                  @foreach($datalist as $rs)
                  <div class="item">
                    <div class="fill" style="background-image:url('{{Storage::url($rs->image)}}');"></div>
                      <div class="carousel-caption">
                        <h1>Test</h1>
                      </div>
                  </div>
                  @endforeach
                  
                  
                </div>

                      <!-- Controls -->
                      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                      </a>
                      <a class="right carousel-control" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                      </a>
            </div>
          </div>

            {!!$data2->detail!!}
          </div><!-- /.post -->

          <!-- the comment box -->
          <div class="well">
            <h4>Leave a Comment:</h4>
            <form role="form">
              <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          
          <hr>

          <h3>2 Comments</h3>

          <!-- the comments -->
          <div class="comment-author-icon pull-left">
            <i class="fa fa-user"></i>
          </div>
          <div class="comment-content pull-left">
            <h4>John Doe <small>9:41 PM on January 24, 2014</small></h4>
            <p>Lorem ipsum Eiusmod do culpa enim ullamco officia dolor anim Ut nulla nostrud incididunt commodo reprehenderit qui exercitation commodo velit dolore voluptate esse sunt nulla eiusmod in cillum fugiat cillum nulla consequat qui reprehenderit pariatur Ut elit sed culpa amet.</p>
          </div>
          <div class="clearfix"></div>

          <div class="comment-author-icon pull-left">
            <i class="fa fa-user"></i>
          </div>
          <div class="comment-content pull-left">
            <h4>John Doe <small>12:28 PM on January 27, 2014</small></h4>
            <p>Lorem ipsum Eiusmod do culpa enim ullamco officia dolor anim Ut nulla nostrud incididunt commodo reprehenderit qui exercitation commodo velit dolore voluptate esse sunt nulla eiusmod in cillum fugiat cillum nulla consequat qui reprehenderit pariatur Ut elit sed culpa amet.</p>
          </div>
          <div class="clearfix"></div>

        </div>

        <div class="col-md-4 col-sm-4 sidebar">
          <div class="well">
            <h4>Search</h4>
            <div class="input-group">
              <input type="text" class="form-control">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button"><i class="fa fa-search"></i></button>
              </span>
            </div><!-- /input-group -->
          </div><!-- /.well -->

          <div class="well">
            <h4>Categories</h4>
            <ul class="nav nav-stacked nav-pills">
              <li><a href="#">Lorem</a></li>
              <li><a href="#">Ipsum</a></li>
              <li><a href="#">Dolor</a></li>
              <li><a href="#">Sit</a></li>
              <li><a href="#">Amet</a></li>
              <li><a href="#">Consectetur</a></li>
            </ul>
          </div><!-- /.well -->


          <ul class="nav nav-tabs" id="widgetTab">
            <li class="active"><a href="#latest-news" data-toggle="tab">Recent News</a></li>
            <li><a href="#popular-news" data-toggle="tab">Popular News</a></li>
          </ul>

          <div class="tab-content">
            <div class="tab-pane fade in active list-posts" id="latest-news">
              <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pulvinar quam sed consequat adipiscing</a></li>
              </ul>
            </div>
            <div class="tab-pane fade list-posts" id="popular-news">
              <ul>
                <li><a href="#"><i class="fa fa-caret-right"></i> Praesent convallis a risus eget cursus. Phasellus ultrices laoreet lacus semper cursus. Nam vitae luctus sapien, a hendrerit nunc</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Praesent convallis a risus eget cursus. Phasellus ultrices laoreet lacus semper cursus. Nam vitae luctus sapien, a hendrerit nunc</a></li>
                <li><a href="#"><i class="fa fa-caret-right"></i> Praesent convallis a risus eget cursus. Phasellus ultrices laoreet lacus semper cursus. Nam vitae luctus sapien, a hendrerit nunc</a></li>
              </ul>
            </div>
          </div><!-- /.tab-content -->


          <div class="well">
            <h4>Tags</h4>
            <div class="tags">
              <a href="#">lorem</a>
              <a href="#">ipsum</a>
              <a href="#">dolor</a>
              <a href="#">sit</a>
              <a href="#">amet</a>
              <a href="#">consectetur</a>
              <a href="#">adipiscing</a>
              <a href="#">elit</a>
              <a href="#">donec</a>
              <a href="#">pulvinar</a>
            </div><!-- /tags -->
          </div><!-- /.well -->

          
        </div><!-- /.sidebar -->

      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection

@section('footer')
    @include('home._footer')
@endsection



