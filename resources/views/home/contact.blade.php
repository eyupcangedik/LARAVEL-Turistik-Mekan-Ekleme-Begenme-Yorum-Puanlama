@extends('layouts.home')

@section('title','İletişim')

@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-6">
                <div class="container" style="margin-top:5% ;margin-bottom:2%; font-family:arial">
                    {!!$data->contact!!}
                </div>
        </div>

        <div class="col-md-6">
   
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
                            
                            <form action="{{route('sendmessage')}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                    
                                        <div class="form-group">
                                            <label for="name">
                                                Ad-Soyad</label>
                                            <input type="text" name="namesurname" class="form-control" id="name" placeholder="Ad-Soyad" required="required" />
                                        </div>

                                        <div class="form-group">
                                            <label for="email">
                                                Email</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                                </span>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" required="required" /></div>
                                            </div>

                                        <div class="form-group">
                                            <label for="phone">
                                                Telefon</label>
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefon" required="required" />
                                        </div>    

                                        <div class="form-group">
                                            <label for="subject">
                                                Subject</label>
                                            <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="required" />
                                        </div>    

                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="message">
                                                Mesajınız</label>
                                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                placeholder="Message"></textarea>
                                        </div>
                                        @include('home.message')
                                    </div>

                                    <div class="col-md-12">
                                        <input type="submit" class="btn btn-primary pull-right" id="btnContactUs" style="background-color: #16A08">
                                            Mesajı Gönder</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
</div>

<div id="map-canvas" class="carousel"></div>  

@endsection



@section('footer')
    @include('home._footer')
@endsection