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

          CATEGORY LIST

          <div class="card-body">

          <div class="card">
                  <div class="card-body">
                  <form action="{{route('admin_category_add')}}">
                        <button type="" class="btn btn-primary me-2">Ekle</button>
                  </form>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Parent Id</th>
                          <th>Title</th>
                          <th>Keywords</th>
                          <th>Description</th>
                          <th>Status</th>
                          <th>Güncelle</th>
                          <th>Sil</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>{{ $rs->parent_id }}</td>
                          <td>{{ $rs->title }}</td>
                          <td>{{ $rs->keywords }}</td>
                          <td>{{ $rs->description }}</td>
                          <td>{{ $rs->status }}</td>
                          <td><a href="{{route('admin_category_edit', ['id' => $rs->id])}}">Güncelle</a></td>
                          <td><a href="{{route('admin_category_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')">Sil</a></td>
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