@extends('layouts.admin')

@section('title','User List')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>User LIST</h3>  

          <div class="card-body">

          <div class="card">
                  <div class="card-body" style="overflow-x: scroll" >
                  
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Update</th>
                          <th>Id</th>
                          <th></th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Address</th>
                          <th>Roles</th>
                          
                        </tr>
                      </thead>

                      <tbody>
                        @foreach($datalist as $rs)
                            <tr>
                            <td><a href="{{route('admin_user_edit', ['id' => $rs->id])}}"><i class="bi bi-gear"></i></a></td>
                            <td>{{ $rs->id }}</td>
                            <td>
                                @if($rs->profile_photo_path)
                                <img src="{{Storage::url($rs->profile_photo_path)}}" height="30" alt="">
                                @endif
                            </td>
                            <td>{{ $rs->name }}</td>
                            <td>{{ $rs->email }}</td>
                            <td>{{ $rs->phone }}</td>
                            <td>{{ $rs->address }}</td>
                            
                            <td>  @foreach($rs->roles as $row)
                                    {{$row->name}},
                                    @endforeach
                                    <a href="{{route('admin_user_roles', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')">
                                    <i class="bi bi-gear"></i></a>
                            </td>
        
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