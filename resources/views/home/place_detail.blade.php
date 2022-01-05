@extends('layouts.home')

@section('title',$title)
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')

  @php 
    $avrcom = \App\Http\Controllers\HomeController::avrgcomment($data2->id);
    $avrcom = number_format((float)$avrcom, 2, '.', '');
    
    $countcomment = \App\Http\Controllers\HomeController::countcomment($data2->id);
  @endphp
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
          
        </div>

        <div class="col-md-12 col-sm-12">

          <div class="post">
            <h1 class="post-title" style="font-family:Arial">{{$data2->description}}</h1>
            <div style="display:flex; justify-content:space-between">
            <p class="post-meta">
              <i class="fa fa-calendar-o first"></i> {{$data2->created_at}}
              <i class="fa fa-user"></i> Admin
              <i class="fa fa-comment"></i> <a href="#">{{$countcomment}} Yorum</a>
              <i class="fa fa-star"></i> <a href="#">{{$avrcom}}</a>
              
            </p>
              
            </div>
          
  
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

          <div class="well">
            <h4>Yorum Yap</h4>
            @livewireScripts
            @livewire('comment',['id'=>$data2->id])
            
           
          </div>
          
          <hr>

          <h3>Yorumlar</h3>
  
          @foreach($comments as $rs)
          <!-- the comments -->
          @if($rs->status == 'True')

          <div class="row" style="border-bottom:1px solid black">
            <div class="col-md-3">
                <div class="comment-author-icon pull-left" >
                  <img src="{{Storage::url($rs->user->profile_photo_path)}}" height="100" alt=""> 
                </div>
            </div>

            <div class="col-md-9" >
                <div class="comment-content pull-left ">
                  <h4>{{$rs->user->name}} <small>{{$rs->created_at}}</small></h4>
                  <p>
                      @for ($i = $rs->rate; $i >= 1; $i--)
                        <i class="fa fa-star" style="color:#D8D224"></i>
                      @endfor

                      @for ($i = 5-$rs->rate; $i >= 1; $i--)
                        <i class="fa fa-star" style="color:black"></i>
                      @endfor
                  </p>

                  <p>{{$rs->comment}}</p>
                
                </div>
                
                <div class="clearfix"></div>
              </div>
          
            </div>
          @endif
         
          @endforeach
        
        </div>



      </div><!-- /.row -->

    </div><!-- /.container -->
@endsection

@section('footer')
    @include('home._footer')
@endsection



