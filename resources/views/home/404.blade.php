@extends('layouts.home')

@section('title','404')


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="section-colored">

<div class="container">

  <div class="row">
    <div class="col-md-2 col-sm-3">
      <img src="{{asset('assets')}}/img/monster.png" alt="monster" class="img-responsive center-block monster">
    </div>
    <div class="col-md-10 col-sm-9">
      <h1>Üzgünüz...</h1>
      <h2>Aradığınız Sayfa Bulunamadı</h2>
      <h3 class="error-404 text-center">404</h3>
    </div>
  </div><!-- /.row -->

</div><!-- /.container -->

</div><!-- /.section -->

@endsection

@section('footer')
    @include('home._footer')
@endsection

