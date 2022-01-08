@extends('layouts.home')

@section('title','Mekan Ekle')
@section('keywords')
@section('description')


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:5%; margin-bottom:5%">

    <div class="row">
        <div class="col-lg-10">
            <h2 class="section-title">Mekan Güncelle</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                  <form class="forms-sample" action="{{route('user_place_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
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
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                          <img src="{{Storage::url($data->image)}}" alt="" height="100px">
                          <input type="file" name="image" class="form-control file-upload-info" required>
                        </div>
                      </div>
                      
                      
                      <button type="submit" class="btn btn-primary me-2">Save</button>
                      
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>
           
@endsection

@section('footer')
    @include('home._footer')
@endsection



