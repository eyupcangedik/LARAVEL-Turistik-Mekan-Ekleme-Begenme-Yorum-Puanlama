@extends('layouts.admin')

@section('title','Message Edit')

@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>Message EDIT</h3>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post">
                      @csrf           


                      <div class="form-group">
                        <label for="exampleInputName1">Name</label>
                        <input name="namesurname" value="{{$data->name}}" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Email</label>
                        <input name="email" value="{{$data->email}}" type="text" class="form-control" id="exampleInputName1" placeholder="Keywords">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Phone</label>
                        <input name="phone" value="{{$data->phone}}" type="text" class="form-control" id="exampleInputName1" placeholder="Description">
                      </div>

                      <div class="form-group">
                        <label for="message">Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                            placeholder="Message">{{$data->message}}</textarea>
                      </div>
                      
                      <div class="form-group">
                        <label for="message">Admin Note</label>
                            <textarea name="adminnote" id="adminnote" class="form-control" rows="9" cols="25" required=""
                            placeholder="">{{$data->note}}</textarea>
                      </div>

                      <input type="submit" class="btn btn-primary me-2" value="Save"></button>
                      
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