@extends('layouts.home')

@section('title','İletişim')

@section('header')
    @include('home._header')
@endsection

@section('content')


<div class="jumbotron jumbotron-sm">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-12" >
                <h3 class="h3" style="font-family: Arial, Helvetica, sans-serif">
                    Bize Ulaşın
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="well well-sm">
                <form>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Ad-Soyad</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Mesajınız</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary pull-right" id="btnContactUs" style="background-color: #16A08">
                            Mesajı Gönder</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
        <div class="col-md-4">
            <form action="">
            <legend><span class=""></span> Ofisimiz</legend>
            <address>
                <strong>Karabük Üniversitesi</strong><br>
                Bilgisayar Mühendisliği<br>
                Karabük/Merkez<br>
                Telefon: (123) 456-7890
            </address>

            </form>
        </div>
    </div>
</div>


@endsection



@section('footer')
    @include('home._footer')
@endsection