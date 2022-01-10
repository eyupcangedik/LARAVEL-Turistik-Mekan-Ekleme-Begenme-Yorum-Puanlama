@extends('layouts.admin')

@section('title','Editor Edit')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>EDITOR EDIT</h3>  

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_editor_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                      @csrf


                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input name="title" value="{{$data->title}}" type="text" class="form-control" id="exampleInputName1" placeholder="Title" required>
                      </div>

                    
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input name="description" value="{{$data->description}}" type="text" class="form-control" id="exampleInputName1" placeholder="{{$data->description}}" maxlength="320" required>
                      </div>  

                      <div class="form-group" > 
                        
                        <label for="exampleInputName1">Detail</label>
                        <textarea id="editor1" name="detail" value="{{$data->detail}}">{{$data->detail}}</textarea>
                          <script>
                              CKEDITOR.replace( 'editor1' );
                          </script>
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