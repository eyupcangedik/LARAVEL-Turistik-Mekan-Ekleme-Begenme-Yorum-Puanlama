@extends('layouts.home')

@section('title','Ege Bölgesi')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h4 class="page-header">Ege Bölgesi Turistik Mekanlar</h4>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

<div class="container container-int">

<ol class="breadcrumb">
  <li><a href="/home">Anasayfa</a></li>
  <li class="active">Gezi Rehberi - Ege</li>
</ol>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/Kazdaglari.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Kazdağı Milli Parkı</h3>
    <h4>Balıkesir</h4>
    <p>Antik çağlarda İda dağı olarak bilinen Kaz Dağı, Biga Yarımadasının en yüksek dağıdır. Başta Kazdağı Göknarı olarak tanınan endemik ağaç türü olmak üzere, zengin bir bitki örtüsüne sahip olan milli park, memeliler, kuşlar ve sürüngenler açısından da çeşitlilik göstermektedir.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>
  </div>

</div>

<hr>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/alacati.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Çeşme ve Alaçatı</h3>
    <h4>İzmir</h4>
    <p>Alaçatı, İzmir'in Çeşme ilçesine bağlı bir mahalle. Ege Denizi'ne kıyısı vardır. Tarihî taş evleri ve yılın 360 günü rüzgâr alması sebebiyle rüzgâr sörfüne elverişli plajları ile ünlüdür. Son yıllarda taş evleri sayesinde çok fazla gelişmiştir.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>    
  </div>

</div>

<hr>


</div><!-- /.container -->

@endsection

@section('footer')
    @include('home._footer')
@endsection