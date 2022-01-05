@extends('layouts.home')

@section('title','SSS')

@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="container" style="margin-top:5% ;margin-bottom:2%; font-family:arial">
            <h2>Sıkça Sorulan Sorular</h2>
            <hr>

            @foreach($datalist as $rs)
                
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{$rs->question}}
                </button>
                <div class="dropdown-menu drop-item" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" style="color:black;" href="#">{!!$rs->answer!!}</a>   
                </div>
            </div>
            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection

@section('footer')
    @include('home._footer')
@endsection