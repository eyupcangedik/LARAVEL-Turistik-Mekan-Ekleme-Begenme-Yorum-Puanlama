@extends('layouts.admin')

@section('title','FAQ List')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>FAQ LIST</h3>  

          <div class="card-body">

          <div class="card">
                  <div class="card-body" style="overflow-x: scroll" >
                  <form action="{{route('admin_faq_add')}}">
                        <button type="" class="btn btn-primary me-2">ADD</button>
                  </form>
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Update</th>
                          <th>Delete</th>
                          <th>Id</th>
                          <th>Position</th>
                          <th>Question</th>
                          <th>Status</th>
                          <th>Updated At</th>
                          
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                        <td><a href="{{route('admin_faq_edit', ['id' => $rs->id])}}"><i class="bi bi-gear"></i></a></td>
                          <td><a href="{{route('admin_faq_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i></a></td>
                          <td>{{ $rs->id }}</td>
                          <td>{{ $rs->position }}</td>
                          <td>{{ $rs->question }}</td>
                          <td>{{ $rs->status }}</td>
                          <td>{{ $rs->updated_at }}</td>      
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