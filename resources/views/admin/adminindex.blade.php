@extends('layouts.admin')

@section('title','Admin Homepage')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
    @include('admin._content')
@endsection

@section('footer')
    @include('admin._footer')
@endsection