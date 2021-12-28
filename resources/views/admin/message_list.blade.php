@extends('layouts.admin')

@section('title','Message List')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">

          <div class="content-wrapper">
          
          <h3>MESSAGE LIST </h3>  
          
          <div class="card-body">

          <div class="card">
                  <div class="card-body" style="overflow-x: scroll" >
                  
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Status</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Created At</th>
                          <th>Update</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          
                          <td>{{ $rs->name }}</td>
                          <td>{{ $rs->email }}</td>
                          <td>{{ $rs->phone }}</td>
                          <td>{{ $rs->status }}</td>
                          <td>{{ $rs->subject }}</td>
                          <td>{{ $rs->message }}</td>
                          <td>{{ $rs->created_at }}</td>

                          <td><a href="{{route('admin_message_edit', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')"><i class="bi bi-images"></i></a></td>

                          
                          <td><a href="{{route('admin_message_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i></a></td>
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