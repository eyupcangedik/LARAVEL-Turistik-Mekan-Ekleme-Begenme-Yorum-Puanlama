@extends('layouts.admin')

@section('title','Editor Add')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3> ADD EDITOR</h3>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body" >
                    
                    <form class="forms-sample" action="{{route('admin_editor_create')}}" method="post" enctype="multipart/form-data" >
                      @csrf

                    
                      <div class="form-group" style="font-family:arial">
                        <label for="exampleInputName1">Title</label>
                        <input name="title"  type="text" class="form-control" id="exampleInputName1" placeholder="Title" required>
                      </div>   

                      <div class="form-group" style="font-family:arial">
                        <label for="exampleInputName1">Description</label>
                        <input name="description" type="text" class="form-control" id="exampleInputName1" placeholder="Description" maxlength="320" required>
                      </div>  

                      <div class="form-group" style="font-family:arial"> 
                        
                        <label for="exampleInputName1">Detail</label>
                        <textarea id="editor1" name="detail"></textarea>
                          <script>
                              CKEDITOR.replace( 'editor1' );
                          </script>
                      </div>


                      <div class="form-group" style="font-family:arial">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="image"  class="form-control file-upload-info" required>
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