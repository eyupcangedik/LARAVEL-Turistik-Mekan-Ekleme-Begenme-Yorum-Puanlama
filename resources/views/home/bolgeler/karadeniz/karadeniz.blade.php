@extends('layouts.home')

@section('title','Karadeniz Bölgesi')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h4 class="page-header">Karadeniz Bölgesi Turistik Mekanlar</h4>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

<div class="container container-int">

<ol class="breadcrumb">
  <li><a href="/home">Anasayfa</a></li>
  <li class="active">Gezi Rehberi - Karadeniz</li>
</ol>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/safranbolu.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Safranbolu</h3>
    <h4>Karabük</h4>
    <p>Safranbolu, Karabük ilinin tarihi ve turistik bir ilçesidir. Konumu Ankara'nın 231 km kuzeyinde ve Karadeniz'in 90 km güneyindedir. Karabük ilçe merkezinin de 8 km kuzeyinde bulunmaktadır. Safranbolu şehir merkezi ve Karabük il merkezi birbirine bitişiktir.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>
  </div>

</div>

<hr>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/abant.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Abant Gölü</h3>
    <h4>Bolu</h4>
    <p>Abant Gölü, Bolu'nun 35 kilometre güney batısında bulunan, yaklaşık 1350 metre yükseklikte bulunan ve alanı 125 hektarı bulan bir heyelan set gölüdür. Suları tatlı olan gölün, en derin yeri 18 m'dir.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>    
  </div>

</div>

<hr>


</div><!-- /.container -->

@endsection

@section('footer')
    @include('home._footer')
@endsection