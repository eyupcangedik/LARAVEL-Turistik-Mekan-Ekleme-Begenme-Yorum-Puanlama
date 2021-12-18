@extends('layouts.home')

@section('title','Akdeniz Bölgesi')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h4 class="page-header">Akdeniz Bölgesi Turistik Mekanlar</h4>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

<div class="container container-int">

<ol class="breadcrumb">
  <li><a href="/home">Anasayfa</a></li>
  <li class="active">Gezi Rehberi - Akdeniz</li>
</ol>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/antalya-side.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Side Antik Kenti</h3>
    <h4>Antalya</h4>
    <p>Antik dönemde Pamfilya’nın en önemli liman kenti olan Side, Antalya’nın 80 kilometre doğusunda, Manavgat’ın 7 kilometre güneybatısında bulunan 350-400 metre genişliğinde bir yarımada üzerinde kurulmuştur.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>
  </div>

</div>

<hr>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/Mersin-KizKalesi.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Kız Kalesi</h3>
    <h4>Mersin</h4>
    <p>Deniz Kalesi olarak da bilinen Kız Kalesi, adını da verdiği mahalle sahilindeki küçük bir adacığın üzerinde kurulmuştur. Kıyıya uzaklığı yaklaşık 600 metredir. Burada bulunan bir yazıttan 1199 yılında I. Leon tarafından yaptırılmış olduğu öğrenilmiştir.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>    
  </div>

</div>

<hr>


</div><!-- /.container -->

@endsection

@section('footer')
    @include('home._footer')
@endsection