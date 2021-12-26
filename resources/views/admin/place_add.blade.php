@extends('layouts.admin')

@section('title','Place Add')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3> ADD PLACE</h3>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_place_create')}}" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="exampleSelectGender">Category Id</label>
                        
                        <select name="category_id" class="form-control" id="exampleSelectGender" required >
                        
                          <option value="" style="background-color:red; color:white;">Please select a category </option>

                          @foreach ($datalist as $rs)
                           
                          <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                          
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title" required>
                      </div>   

                      <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <input name="keywords" type="text" class="form-control" id="exampleInputName1" placeholder="Keywords">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input name="description" type="text" class="form-control" id="exampleInputName1" placeholder="Description">
                      </div>
         
                      
                      <div class="form-group" > 
                        
                        <label for="exampleInputName1">Detail</label>
                        <textarea id="editor1" name="detail"></textarea>
                          <script>
                              CKEDITOR.replace( 'editor1' );
                          </script>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">City</label>
                        <input name="city" type="text" class="form-control" id="exampleInputName1" placeholder="City">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputName1">Country</label>
                        <input name="country" type="text" class="form-control" id="exampleInputName1" placeholder="country">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Location</label>
                        <input name="location" type="text" class="form-control" id="exampleInputName1" placeholder="Location">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">User Id</label>
                        <input name="user_id" type="number" class="form-control" id="exampleInputName1" placeholder="User Id">
                      </div>

                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select name="status" class="form-control" id="exampleSelectGender" required >
                          <option>True</option>
                          <option>False</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="image" class="form-control file-upload-info" required>
                        </div>
                      </div>
                          
                      <div class="form-group">
                        
                      </div>

                      <input type="submit" class="btn btn-primary me-2" value="Save">
                      
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