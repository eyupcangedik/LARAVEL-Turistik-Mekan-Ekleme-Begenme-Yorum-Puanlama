@extends('layouts.admin')

@section('title','Place List')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>PLACE LIST</h3>  

          <div class="card-body">

          <div class="card">
                  <div class="card-body" style="overflow-x: scroll" >
                  <form action="{{route('admin_place_add')}}">
                        <button type="" class="btn btn-primary me-2">ADD</button>
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
                          <th>Image</th>
                          <th>Image Galery</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                          <td>{{ $rs->title }}</td>
                          <td>{{ $rs->keywords }}</td>
                          <td>{{ $rs->description }}</td>
                          <td>{{ $rs->city }}</td>
                          <td>{{ $rs->country }}</td>
                          <td>{{ $rs->location }}</td>
                          <td>{{ $rs->user_id }}</td>
                          <td>{{ $rs->status }}</td>

                          <td>
                            @if ( $rs->image )
                                <img src="{{Storage::url($rs->image)}}" height="30" alt=""> 
                            @endif

                          </td>

                          <td><a href="{{route('admin_image_add', ['place_id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')"><i class="bi bi-images"></i></a></td>

                          <td><a href="{{route('admin_place_edit', ['id' => $rs->id])}}"><i class="bi bi-gear"></i></a></td>
                          <td><a href="{{route('admin_place_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i></a></td>
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