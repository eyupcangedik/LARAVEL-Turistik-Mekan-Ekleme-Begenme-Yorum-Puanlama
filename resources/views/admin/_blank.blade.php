@extends('layouts.admin')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">
          </div>
          <!-- content-wrapper ends -->
@endsection

@section('footer')
    @include('admin._footer')
@endsection