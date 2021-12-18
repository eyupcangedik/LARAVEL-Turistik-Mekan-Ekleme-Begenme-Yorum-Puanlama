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

            ADD CATEGORY

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_category_create')}}" method="post">
                      @csrf

                      <div class="form-group">
                        <label for="exampleSelectGender">Kategori</label>
                        <select name="parent_id" class="form-control" id="exampleSelectGender" required >
                        
                          <option value="0" selected="selected" disabled>Seçiniz</option>

                          @foreach ($datalist as $rs)

                          @if ($rs->parent_id == 0 ) 
                          <option value="{{ $rs->id }}">{{ $rs->title}}</option>
                          @endif
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Keywords</label>
                        <input name="keywords" type="text" class="form-control" id="exampleInputName1" placeholder="Keywords">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Description</label>
                        <input name="description" type="text" class="form-control" id="exampleInputName1" placeholder="Description">
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
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleTextarea1">Textarea</label>
                        <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                      </div>
                      <button type="submit" class="btn btn-primary me-2">Submit</button>
                      
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