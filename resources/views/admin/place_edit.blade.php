@extends('layouts.admin')

@section('title','Place Edit')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>PLACE EDIT</h3>  

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_place_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="exampleSelectGender">Category: </label>
                          <label for="">{{$data->category->title}} </label>
                          <select name="category_id" value="{{$data->category_id}}" class="form-control" id="exampleSelectGender" required >                        
                          <option value="" style="background-color:red; color:white;" >Please select a category</option>
    
                          @foreach ($datalist2 as $rs)

                         
                          <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option> 
                          
                          @endforeach

                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input name="title" value="{{$data->title}}" type="text" class="form-control" id="exampleInputName1" placeholder="Title" required>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <input name="keywords" value="{{$data->keywords}}" type="text" class="form-control" id="exampleInputName1" placeholder="Keywords">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input name="description" value="{{$data->description}}" type="text" class="form-control" id="exampleInputName1" placeholder="Description">
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Detail</label>

                        <textarea id="editor1" name="detail">{{$data->detail}}</textarea>
                          <script>
                              CKEDITOR.replace( 'editor1' );
                          </script>

                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">City</label>
                        <input name="city" value="{{$data->city}}" type="text" class="form-control" id="exampleInputName1" placeholder="City">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Country</label>
                        <input name="country" value="{{$data->country}}" type="text" class="form-control" id="exampleInputName1" placeholder="country">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Location</label>
                        <input name="location" value="{{$data->location}}"  type="text" class="form-control" id="exampleInputName1" placeholder="Location">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select name="status" value="{{$data->status}}" class="form-control" id="exampleSelectGender" required >
                          <option>True</option>
                          <option selected>False</option>
                        </select>
                      </div>
                      
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Image</label>
                        <input name="image" type="file" class="form-control" id="exampleInputName1" placeholder="Image">

                        @if($data->image)
                            <img src="{{Storage::url($data->image)}}" height="200" alt="">
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