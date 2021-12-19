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

          PLACE LIST

          <div class="card-body">

          <div class="card">
                  <div class="card-body">
                  <form action="{{route('admin_place_add')}}">
                        <button type="" class="btn btn-primary me-2">Ekle</button>
                  </form>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Category Id</th>
                          <th>Title</th>
                          <th>Keywords</th>
                          <th>Description</th>
                          <th>City</th>
                          <th>Country</th>
                          <th>Location</th>
                          <th>User Id</th>
                          <th>Status</th>
                          <th>Güncelle</th>
                          <th>Sil</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>{{ $rs->category_id }}</td>
                          <td>{{ $rs->title }}</td>
                          <td>{{ $rs->keywords }}</td>
                          <td>{{ $rs->description }}</td>
                          <td>{{ $rs->city }}</td>
                          <td>{{ $rs->country }}</td>
                          <td>{{ $rs->location }}</td>
                          <td>{{ $rs->user_id }}</td>
                          <td>{{ $rs->status }}</td>
                          <td><a href="{{route('admin_place_edit', ['id' => $rs->id])}}">Güncelle</a></td>
                          <td><a href="{{route('admin_place_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')">Sil</a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
                  </div>

                  
                </div>
          </div>


          </div>
       
          <!-- content-wrapper ends -->
@endsection

@section('footer')
    @include('admin._footer')
@endsection