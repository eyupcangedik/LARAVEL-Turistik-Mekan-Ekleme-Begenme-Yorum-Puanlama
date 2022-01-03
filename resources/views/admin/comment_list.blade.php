@extends('layouts.admin')

@section('title','Comment List')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>Comment List</h3>  

            <div class="card-body" style="overflow-x: scroll">

                <div class="card">
                  
                <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Place</th>
                          <th>Rate</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Show</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>
                            <a href="{{route('admin_comment',['id'=>$rs->place->id])}}" target="_blank">
                                {{$rs->place->title}}
                            </a>
                          </td>
                        
                          <td>{{ $rs->rate }}</td>
                          <td>{{ $rs->status }}</td>
                          <td>{{ $rs->created_at }}</td>
                          <td><a href="{{route('admin_comment_edit', ['id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')"><i class="bi bi-gear"></i></a></td>
                          <td><a href="{{route('admin_comment_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i></a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                      @include('home.message')
                    </table>
                  
                </div>
            </div>


</div>
       
          <!-- content-wrapper ends -->
@endsection

@section('footer')
    @include('admin._footer')
@endsection