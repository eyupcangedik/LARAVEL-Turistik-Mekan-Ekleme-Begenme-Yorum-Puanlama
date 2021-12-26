@extends('layouts.home')

@section('title','Hakkımızda')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')

@endsection


@section('footer')
    @include('home._footer')
@endsection