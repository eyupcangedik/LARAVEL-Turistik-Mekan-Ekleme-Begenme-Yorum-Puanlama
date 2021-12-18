@extends('layouts.home')

@section('title','İç Anadolu Bölgesi')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h4 class="page-header">İç Anadolu Bölgesi Turistik Mekanlar</h4>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

<div class="container container-int">

<ol class="breadcrumb">
  <li><a href="/home">Anasayfa</a></li>
  <li class="active">Gezi Rehberi - İç Anadolu</li>
</ol>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/kapadokya.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Kapadokya</h3>
    <h4>Nevşehir</h4>
    <p>Kapadokya, 60 milyon yıl önce Erciyes, Hasandağı ve Göllüdağ’ın püskürttüğü lav ve küllerin oluşturduğu yumuşak tabakaların milyonlarca yıl boyunca yağmur ve rüzgâr tarafından aşındırılmasıyla ortaya çıkan bölgedir.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>
  </div>

</div>

<hr>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/catalhoyuk.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Çatalhöyük</h3>
    <h4>Konya</h4>
    <p>Çatalhöyük, Orta Anadolu'da, günümüzden 9 bin yıl önce yerleşim yeri olmuş, çok geniş bir Neolitik Çağ ve Kalkolitik Çağ yerleşim yeridir. Doğu ve batı yönlerinde yan yana iki höyükten oluşmaktadır.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>    
  </div>

</div>

<hr>


</div><!-- /.container -->

@endsection

@section('footer')
    @include('home._footer')
@endsection