@extends('layouts.home')

@section('title','Profil')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:5%; margin-bottom:5%">
  
  <div class="row">
    <div class="col-lg-12">
      <h2 class="section-title">Kullanıcı Paneli</h2>
      <hr>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-12">
      @include('profile.show')
    </div> 
  </div>

</div>

</div><!-- /.container -->

@endsection


@section('footer')
    @include('home._footer')
@endsection