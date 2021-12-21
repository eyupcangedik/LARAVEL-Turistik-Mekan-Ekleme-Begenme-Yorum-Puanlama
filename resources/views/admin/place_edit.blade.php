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

          <h3>PLACE EDIT</h3>  

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_place_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="exampleSelectGender">Category Id</label>
                      
                          <select name="category_id" value="{{$data->category_id}}" class="form-control" id="exampleSelectGender" required >                        
                          <option value="0" selected="selected" disabled>Seçiniz</option>
    
                          @foreach ($datalist2 as $rs)

                          @if ($rs -> id <= 5)
                          <option value="{{ $rs->id }}">{{ $rs->title}}</option> @endif
                          
                          @endforeach

                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input name="title" value="{{$data->title}}" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
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
                        
                        <textarea id="summernote" name="detail" value="">{{$data->detail}}</textarea>
                        <script>
                          $(document).ready(function() {
                             $('#summernote').summernote();
                          });
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
                        <label for="exampleInputName1">User Id</label>
                        <input name="user_id" value="{{$data->user_id}}" type="number" class="form-control" id="exampleInputName1" placeholder="User Id">
                      </div>

                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select name="status" value="{{$data->status}}" class="form-control" id="exampleSelectGender" required >
                          <option>True</option>
                          <option>False</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="image" class="form-control file-upload-info">
                        </div>
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