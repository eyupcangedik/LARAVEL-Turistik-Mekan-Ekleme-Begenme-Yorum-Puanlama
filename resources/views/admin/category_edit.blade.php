@extends('layouts.admin')

@section('title','Category Edit')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>CATEGORY EDIT</h3>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_category_update', ['id'=>$data->id])}}" method="post">
                      @csrf

                      <!-- <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select name="parent_id" value="{{$data->parent_id}}" class="form-control" id="exampleSelectGender" required >
                        
                          @if ($data->parent_id == 0)
                          <option disabled>{{$data->title}}</option>
                          
                          @else
                          <option selected="selected" disabled>Seçiniz</option>
                          
                          @endif
                          
                          @foreach ($datalist as $rs)
                          <option value="{{ $rs->id }}" @if ($rs->id == $data->parent_id) selected="selected" @endif>{{ $rs->title}}</option>
                          @endforeach
                        </select>
                      </div>
                      -->

                      <div class="form-group">
                        <label for="exampleSelectGender">Category</label>
                        <select name="parent_id" value="{{$data->parent_id}}" class="form-control" id="exampleSelectGender" required >
                         
                          @foreach ($datalist as $rs)
                          <option value="{{ $rs->id }}" @if ($rs->id == $data->id and $rs->parent_id >5)  style="background-color:red" disabled @endif>
                            {{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}
                          </option>
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
                        <label for="exampleSelectGender">Status</label>
                        <select name="status" value="{{$data->status}}" class="form-control" id="exampleSelectGender" required >
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