@extends('layouts.home')

@section('title','Anasayfa')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('slider')
    @include('home._slider')
@endsection

@section('content')

<div class="container">

<div class="row">

  <div class="col-lg-12">
      <form action="{{route('getplace')}}" method="post">
        @csrf
        <div> 
        @livewire('search')
        
          <span class="input-group-btn">
                <button class="btn btn-primary search-button" type="submit"><i class="fa fa-search"></i></button>
          </span>
        </div>
      </form>
      @section('footerjs')
      @livewireScripts
      @endsection
  </div>

  <div class="col-lg-12" style="margin-top:20px">
    <h2 class="section-title">Son Yazılar</h2>
  </div>

  @foreach($data2 as $rs)
  <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="col-lg-16" style="text-align:center;">
      <h4>{{$rs->title}}</h4>
    </div>
    <a href="portfolio-item.html" class="link-portfolio">
      <div class="overlay-portfolio">

        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif;">
          {{$rs->description}}...
          Devamını Oku...
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{Storage::url($rs->image)}}" alt="" style="width:300px; height:200px;">
    </a>
  </div>
  
  @endforeach
</div><!-- /.row -->

</div><!-- /.container -->
</div><!-- /.section -->

@endsection

@section('footer')
    @include('home._footer')
@endsection



