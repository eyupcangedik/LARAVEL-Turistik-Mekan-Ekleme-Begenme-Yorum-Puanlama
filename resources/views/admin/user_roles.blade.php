@extends('layouts.admin')

@section('title','User Edit')




@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3>USER EDIT</h3>
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    
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
                              <th>Roles</th>
                              <td>
                                  <table>
                                      @foreach($data->roles as $row)
                                      <tr>
                                          <td>{{$row->name}}</td>
                                          <td>
                                              <a href="{{route('admin_user_role_delete', ['userid'=>$data->id, 'roleid'=>$row->id])}}"
                                              onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i></a>
                                          </td>
                                      </tr>
                                    @endforeach
                                  </table>
                              </td>
                          </tr>

                          <tr>
                              <th>Add Role</th>
                              <td>
                                  <form role="form" action="{{route('admin_user_role_add',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                                        @csrf

                                        <select name="roleid">
                                            @foreach($datalist as $rs)
                                                <option value="{{$rs->id}}">{{$rs->name}}</option>
                                            @endforeach
                                        </select>
                                        <input type="submit" class="btn btn-primary me-2" value="Save"></button>
                                  </form>
                              </td>
                          </tr>
                        </table>
                      </div>

                      
                      
                    
                  </div>
                </div>
              </div>


          </div>
          <!-- content-wrapper ends -->
@endsection

