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
    <h2 class="section-title">User Panel</h2>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    @include('home.usermenu')
  </div>

  <div class="col-lg-8 col-md-8 col-sm-8">
    @include('profile.show')
  </div>
 
</div><!-- /.row -->

</div><!-- /.container -->

@endsection


@section('footer')
    @include('home._footer')
@endsection