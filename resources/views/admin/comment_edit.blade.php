@extends('layouts.admin')

@section('title','Comment Edit')




@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>Comment EDIT</h3>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_comment_update', ['id'=>$data->id])}}" method="post">
                      @csrf           

                      <div class="card-body"> 
                        <table class="table table-hover">
                          <tr>
                              <th>ID <td>{{$data->id}} </td></th>     
                          </tr>

                          <tr>
                              <th>Name <td>{{$data->user->name}}</td></th>
                          </tr>

                          <tr>
                              <th>Place <td>{{$data->place->title}}</td></th>
                          </tr>

                          <tr>
                              <th>Comment <td>
                               <textarea name="" id="" cols="80" rows="10" disabled>{{$data->comment}}</textarea> </td></th>
                          </tr>

                          <tr>
                              <th>Rate <td>{{$data->rate}}</td></th>
                          </tr>

                          <tr>
                                <th>Status 
                                  <td>
                                    <select name="status" id="">
                                        <option value="True">True</option>
                                        <option value="False" selected>False</option>
                                    </select>
                                  </td>
                                </th>
                          </tr>
                          </table>
                      </div>

                      <input type="submit" class="btn btn-primary me-2" value="Save"></button>
                      
                    </form>
                  </div>
                </div>
              </div>


          </div>
          <!-- content-wrapper ends -->
@endsection

