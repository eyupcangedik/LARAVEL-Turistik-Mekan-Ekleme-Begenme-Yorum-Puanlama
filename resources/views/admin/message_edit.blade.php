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

                      <div class="card-body"> 
                        <table class="table table-hover">
                          <tr>
                              <th>ID <td>{{$data->id}} </td></th>     
                          </tr>

                          <tr>
                              <th>Name <td>{{$data->name}}</td></th>
                          </tr>

                          <tr>
                              <th>Email <td>{{$data->email}}</td></th>
                          </tr>

                          <tr>
                              <th>Phone <td>
                               <textarea name="" id="" cols="80" rows="10" disabled>{{$data->phone}}</textarea> </td></th>
                          </tr>
   
                          <tr>
                              <th>Message <td>
                               <textarea name="" id="" cols="80" rows="10" disabled>{{$data->message}}</textarea> </td></th>
                          </tr>
            
                          </table>
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