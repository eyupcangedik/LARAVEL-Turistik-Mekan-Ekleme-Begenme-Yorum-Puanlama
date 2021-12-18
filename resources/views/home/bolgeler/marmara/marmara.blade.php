@extends('layouts.home')

@section('title','Marmara Bölgesi')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h4 class="page-header">Marmara Bölgesi Turistik Mekanlar</h4>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

<div class="container container-int">

<ol class="breadcrumb">
  <li><a href="/home">Anasayfa</a></li>
  <li class="active">Gezi Rehberi - Marmara</li>
</ol>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/uludag.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Uludağ</h3>
    <h4>Bursa</h4>
    <p>Uludağ, Bursa ili sınırları içinde, 2.543 m yüksekliği ile Türkiye'nin en büyük kış ve doğa sporları merkezi olan dağ. Uludağ; Marmara Bölgesinin en yüksek dağıdır. </p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>
  </div>

</div>

<hr>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="/marmara/dolmabahce"><img class="img-responsive" src="{{asset('assets')}}/img/dolmabahce.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Dolmabahçe Sarayı</h3>
    <h4>İstanbul</h4>
    <p>Dolmabahçe Sarayı, İstanbul, Beşiktaş'ta, Kabataş'tan Beşiktaş'a uzanan Dolmabahçe Caddesi'yle İstanbul Boğazı arasında, 250.000 m²lik bir alan üzerinde bulunan Osmanlı sarayı. Marmara Denizi'nden Boğaziçi'ne deniz yoluyla girişte sol kıyıda, Üsküdar ve Kuzguncuk'ın karşısında yer alır.</p>
    <a class="btn btn-primary" href="/marmara/dolmabahce">Devamını Oku... <i class="fa fa-angle-right"></i></a>    
  </div>

</div>

<hr>


</div><!-- /.container -->

@endsection

@section('footer')
    @include('home._footer')
@endsection