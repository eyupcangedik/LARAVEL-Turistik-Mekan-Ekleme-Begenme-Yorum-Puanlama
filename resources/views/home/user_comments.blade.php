@extends('layouts.home')

@section('title','Profil')
@section('keywords')
@section('description')


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:5%">

<div class="row">

  <div class="col-lg-12">
    <h2 class="section-title">User Panel</h2>
  </div>

  <div class="col-lg-4 col-md-4 col-sm-4">
    @include('home.usermenu')
  </div>

  <div class="col-lg-8 col-md-8 col-sm-8">
          <div class="content-wrapper">

          <h3>Yorumlarım</h3>

          <div class="card-body">

          <div class="card">
                  
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Place</th>
                          <th>Comment</th>
                          <th>Rate</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>
                            <a href="{{route('place',['id'=>$rs->place->id, 'title'=> $rs->place->title ])}}" target="_blank">
                                {{$rs->place->title}}
                            </a>
                          </td>
                        
                          <td>{{ $rs->comment }}</td>
                          <td>{{ $rs->rate }}</td>
                          <td>{{ $rs->status }}</td>
                          <td>{{ $rs->created_at }}</td>
                          <td><a href="{{route('user_comment_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i>Delete</a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                      @include('home.message')
                    </table>
                  </div>
         
                </div>
          </div>


          </div>
       

@endsection