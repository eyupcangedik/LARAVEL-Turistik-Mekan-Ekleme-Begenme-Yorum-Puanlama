@extends('layouts.home')

@section('title','Referanslarımız')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:5% ;margin-bottom:2%; font-family:arial">
    {!!$data->references!!}
</div>
@endsection


@section('footer')
    @include('home._footer')
@endsection