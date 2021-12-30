<div id="myCarousel" class="carousel slide">
      <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <div class="fill" style="background-image:url('{{asset('assets')}}/img/slide/slide1.jpg');"></div>
            <div class="carousel-caption">
            </div>
          </div>

          @foreach($slider as $rs)
          <div class="item">
            <div class="fill" style="background-image:url('{{Storage::url($rs->image)}}'); width:100%; height:660px;">
              
            </div>
            <div class="carousel-caption">
              <h1>{{$rs->title}}</h1>
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

    <div class="section" id="recent-projects" style="position: relative;">