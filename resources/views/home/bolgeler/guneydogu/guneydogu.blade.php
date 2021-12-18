@extends('layouts.home')

@section('title','Güneydoğu Anadolu Bölgesi')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h4 class="page-header">Güneydoğu Anadolu Bölgesi Turistik Mekanlar</h4>
          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

<div class="container container-int">

<ol class="breadcrumb">
  <li><a href="/home">Anasayfa</a></li>
  <li class="active">Gezi Rehberi - Güneydoğu</li>
</ol>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/balikligol.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Balıklı Göl</h3>
    <h4>Şanlıurfa</h4>
    <p>Şanlıurfa şehir merkezinin güneybatısında yer alan ve rivayete göre İbrahim Peygamberin ateşe atıldığında düştüğü yer olarak bilinen bu iki göl, kutsal balıkları ve çevrelerindeki tarihi eserler ile Şanlıurfa'nın en çok ziyaretçi çeken yerlerindendir. Ayrıca göldeki balıklar halk tarafından kutsal kabul edilerek yenilmemekte ve korunmaktadır.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>
  </div>

</div>

<hr>

<div class="row">

  <div class="col-md-7 col-sm-7">
    <a href="portfolio-item.html"><img class="img-responsive" src="{{asset('assets')}}/img/nemrut.jpg" alt=""></a>
  </div>

  <div class="col-md-5 col-sm-5">
    <h3>Nemrut Dağı</h3>
    <h4>Adıyaman</h4>
    <p>Adıyaman'ın Kahta ilçesi yakınlarında Ankar dağları civarında 2.150 metre yüksekliğindeki Nemrut dağı 1987'de UNESCO tarafından Dünya mirası alanı ilan edilmiştir. Hemen bir yıl ardından ise milli park statüsü kazanmıştır. Kommagene kralı Antiochus Theos, MÖ 62 yılında bu dağın tepesine, pek çok Yunan ve Pers tanrısının heykelinin yanı sıra kendi mezar-tapınağını da yaptırmıştır. Mezarda, bir kartalın başı gibi, tanrıların taş oymaları bulunur.</p>
    <a class="btn btn-primary" href="portfolio-item.html">Devamını Oku... <i class="fa fa-angle-right"></i></a>    
  </div>

</div>

<hr>


</div><!-- /.container -->

@endsection

@section('footer')
    @include('home._footer')
@endsection