@extends('layouts.home')

@section('title','Doğu Anadolu Bölgesi')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h4 class="page-header">Doğu Anadolu Bölgesi Turistik Mekanlar</h4>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

<div class="container container-int">

<ol class="breadcrumb">
  <li><a href="/home">Anasayfa</a></li>
  <li class="active">Gezi Rehberi - Doğu Anadolu</li>
</ol>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/agri-dagi.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Ağrı Dağı</h3>
    <h4>Ağrı</h4>
    <p>Ağrı Dağı, Türkiye'nin en yüksek dağıdır. Zirvesi 4 mevsim boyunca erimeyen kar ve takke buzulu ile kaplı volkanik bir dağ olan Ağrı Dağı, Türkiye'nin doğu ucunda, İran'ın 16 km batısında ve Ermenistan'ın 32 km güneyindedir. Dağın %65'lik bir kesimi Iğdır ilinde kalan %35'lik kesimi ise Ağrı ili sınırları içerisindedir.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>
  </div>

</div>

<hr>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/Erzincan-girlevik.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Girlevik Şelalesi</h3>
    <h4>Erzincan</h4>
    <p>Erzincan’ın 29 km güneydoğusunda yer alan Girlevik Çağlayanı, doğal güzelliği ile ünlü bir piknik alanıdır. Suyun kışın donmasıyla oluşan sarkıtlarda buz ve kaya tırmanışına da olanak veren Çağlayan, coşkuyla akan gür suları ve yeşil dokusuyla bölgenin cenneti.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>    
  </div>

</div>

<hr>


</div><!-- /.container -->

@endsection

@section('footer')
    @include('home._footer')
@endsection