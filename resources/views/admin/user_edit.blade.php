@extends('layouts.admin')

@section('title','User Edit')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>USER EDIT</h3>  

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_user_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                      @csrf

                      

                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="name" value="{{$data->name}}" type="text" class="form-control" id="exampleInputName1" placeholder="Name" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input name="email" value="{{$data->email}}" type="text" class="form-control" id="exampleInputName1" placeholder="Email">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input name="phone" value="{{$data->phone}}" type="text" class="form-control" id="exampleInputName1" placeholder="Phone">
                      </div>
                      

                      <div class="form-group">
                        <label for="exampleInputName1">Address</label>
                        <input name="address" value="{{$data->address}}" type="text" class="form-control" id="exampleInputName1" placeholder="Address">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Image</label>
                        <input name="image" type="file" class="form-control" id="exampleInputName1" placeholder="Image">

                        @if($data->profile_photo_path)
                            <img src="{{Storage::url($data->profile_photo_path)}}" height="200" alt="">
                        @endif
                      </div>
                      
                      <button type="submit" class="btn btn-primary me-2">Save</button>
                      
                    </form>
                  </div>
                </div>
              </div>


          </div>
          <!-- content-wrapper ends -->
@endsection

@section('footer')
    @include('admin._footer')
@endsection