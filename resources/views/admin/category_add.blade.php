@extends('layouts.admin')

@section('title','Category Add')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3> ADD CATEGORY</h3>
           
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_category_create')}}" method="post">
                      @csrf

                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select name="parent_id" class="form-control" id="exampleSelectGender" required >
                        
                          <option value="0" selected="selected" disabled>Seçiniz</option>

                          @foreach ($datalist as $rs)

                          @if ($rs->parent_id == 0 ) 
                          <option value="{{ $rs->id }}">{{ $rs->title}}</option>
                          @endif
                          @endforeach
                        </select>
                      </div>
                      -->

                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select name="parent_id" class="form-control" id="exampleSelectGender" required >
                        
                          <option value="" style="background-color:red; color:white;">Please select a category</option>

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

                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select name="status" class="form-control" id="exampleSelectGender" required >
                          <option>True</option>
                          <option>False</option>
                        </select>
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