@extends('layouts.admin')

@section('title','Editor List')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>EDITOR LIST</h3>  

          <div class="card-body">

          <div class="card">
                  <div class="card-body" style="overflow-x: scroll" >
                  <form action="{{route('admin_editor_add')}}">
                        <button type="" class="btn btn-primary me-2">ADD</button>
                  </form>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>{{ $rs->title }}</td>
                                         
                          <td>
                            @if ( $rs->image )
                                <img src="{{Storage::url($rs->image)}}" height="30" alt=""> 
                            @endif

                          </td>

                          <td><a href="{{route('admin_editor_edit', ['id' => $rs->id])}}"><i class="bi bi-gear"></i></a></td>
                          <td><a href="{{route('admin_editor_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i></a></td>
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