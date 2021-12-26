@extends('layouts.home')

@section('title','Anasayfa')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('slider')
    @include('home._slider')
@endsection

@section('content')
<div class="container">

<div class="row">

  <div class="col-lg-12">
    <h2 class="section-title">Recent projects</h2>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6">
    <a href="portfolio-item.html" class="link-portfolio">
      <div class="overlay-portfolio">
        <h3>Vizesiz Gezebileceğiniz En Güzel Avrupa Şehirleri</h3>
        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif">
        Dünyanın neredeyse her köşesi keşfedilmeyi bekleyen güzelliklerle saklı. Siz de yeni yerler görmek ancak vize işlemleriyle uğraşmak istemiyorsanız vizesiz gidebileceğiniz Avrupa ülkelerini tercih edebilirsiniz...Devamını Oku
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{asset('assets')}}/img/arnavutluk.jpg" alt="">
    </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6">
    <a href="portfolio-item.html" class="link-portfolio">
      <div class="overlay-portfolio">
        <h3>Kış Aylarında Ziyaret Edilebilecek 5 Ülke</h3>
        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif">
        Muhakkak ki herkesin gönlünde yatan bir mevsim vardır. Kimi yazı sever kimi yaprakların kızıllaştığı sonbaharı… Ancak bir gerçek var ki her mevsimin kendine has, ayrı bir güzelliği var. Kış ayları da…Devamını Oku
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{asset('assets')}}/img/norvec.jpg" alt="">
    </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6">
    <a href="portfolio-item.html" class="link-portfolio">
      <div class="overlay-portfolio">
        <h3>Yabancı Dil Öğrenmek İçin Avrupa'nın En Çok Tercih Edilen Şehirleri</h3>
        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif">
        “Bir dil bir insandır” lafı, boşa söylenmiş bir cümle değil. Bir kursa giderek, konuşma kurslarına katılarak veya yabancı arkadaşlar edinip bol bol pratik yaparak bir yabancı dil öğrenmek mümkün…Devamını Oku
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{asset('assets')}}/img/yabanci-dil.jpg" alt="">
    </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6">
    <a href="portfolio-item.html" class="link-portfolio">
      <div class="overlay-portfolio">
        <h3>Seyahat Ederken Güvende Kalmak İçin 5 İpucu (Covid-19 Önlemleri)</h3>
        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif">
        Koronavirüs hayatımıza girdiği günden bu yana pek çok farklı aşamadan geçtik. Hastalıkla tanıştıktan sonra alınabilecek önlemler, dönemsel yaşanan bazı kısıtlamalar derken nihayet normalleşme…Devamını Oku
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{asset('assets')}}/img/check-in.jpg" alt="">
    </a>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-6">
    <a href="portfolio-item.html" class="link-portfolio">
      <div class="overlay-portfolio">
        <h3>Bir Gezginin Seyahat Çantasının Sahip Olması Gereken Bazı Özellikler</h3>
        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif">
        Bir gezginin çantasında bulunması gerekenler de oldukça önemlidir ancak ondan daha da önemlisi doğru çantayı seçmek olacaktır. Bunun için ilk adım ihtiyacınızı yani kullanım amacınızı belirlemek...Devamını Oku
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{asset('assets')}}/img/gezgin.jpg" alt="">
    </a>
  </div>
  
  <div class="col-lg-4 col-md-4 col-sm-6">
    <a href="portfolio-item.html" class="link-portfolio">
      <div class="overlay-portfolio">
        <h3>Tatile Çıkmadan Önce Almanız Gereken Teknolojik Aletler</h3>
        <small class="text-muted" style="font-family: Arial, Helvetica, sans-serif">
        Dünyanın salgın hastalıkla sınandığı bugünlerde herkes tatil hayalleriyle biraz olsun rahatlamaya çalışıyor. Seyahate çıkarken yanınıza almanız gereken teknolojik aletleri sizler için sıraladık...Devamını Oku
        </small>
      </div><!-- /.overlay-portfolio -->
      <img class="img-responsive img-home-portfolio" src="{{asset('assets')}}/img/aksiyon-kamerasi.jpg" alt="">
    </a>
  </div>
</div><!-- /.row -->

</div><!-- /.container -->
</div><!-- /.section -->

@endsection

@section('footer')
    @include('home._footer')
@endsection



