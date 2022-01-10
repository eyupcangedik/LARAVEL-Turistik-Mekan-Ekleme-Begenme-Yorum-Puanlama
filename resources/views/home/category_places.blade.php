@extends('layouts.home')

@section('title',$title)
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:3% ;margin-bottom:2%; font-family:arial">
<div class="container">

<div class="row">

  <div class="col-lg-12">
    <h2 class="section-title">{{$title}}</h2>
  </div>

  @foreach($data2 as $rs)
  <div class="col-lg-4 col-md-4 col-sm-6">
    <div class="col-lg-16">
      <h3>{{$rs->title}}</h3>
    </div>
    <a href="{{route('place',['id'=>$rs->id, 'title'=>$rs->title])}}" class="link-portfolio">
      <div class="overlay-portfolio">
        <h3>{{$rs->title}}</h3>
        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif">
          {{$rs->description}}..Devamını Oku...
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{Storage::url($rs->image)}}" alt="" style="width:300px; height:200px;">
    </a>
  </div>
  
  @endforeach
</div><!-- /.row -->

</div><!-- /.container -->
</div><!-- /.section -->
</div>
@endsection


@section('footer')
    @include('home._footer')
@endsection