@extends('layouts.home')

@section('title','Profil')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:5%">

<div class="row">

  <div class="col-lg-12">
    <h2 class="section-title">Kullanıcı Paneli</h2>
    <hr>
  </div>

</div>

<div class="row">
  <div class="col-md-10">
    @include('profile.show')
  </div>

  <div class="col-md-2">
    <div class="container">
      <div class="row">
      @include('home.usermenu')
      </div>
    </div>
    
  </div>
</div>
</div><!-- /.row -->

</div><!-- /.container -->

@endsection


@section('footer')
    @include('home._footer')
@endsection