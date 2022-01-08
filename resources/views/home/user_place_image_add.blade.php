@section('content')

          <div class="content-wrapper">

          <h3>{{$data->title}}</h3>  
          

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('user_image_store', ['place_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                      @csrf


                      <div class="form-group">
                        <label for="exampleInputName1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Title">
                      </div>   

                      <div class="form-group">
                        <label>Image upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="image" class="form-control file-upload-info" required>
                        </div>
                      </div>

                      <div class="form-group">
                        
                      </div>

                      <button type="submit" class="btn btn-primary me-2">Save</button>
                      
                    </form>


                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Id</th>
                          <th>Title</th>
                          <th>Image</th>
                          <th>Delete</th>
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $images as $rs)
                        <tr>
                          <td>{{ $rs->id }}</td>
                          <td>{{ $rs->title }}</td>
                    
                          <td>
                            @if ( $rs->image )
                                <img src="{{Storage::url($rs->image)}}" alt=""> 
                            @endif

                          </td>
                          
                          <td><a href="{{route('user_image_delete', ['id'=>$rs->id, 'place_id'=>$data->id])}}" onclick="return confirm('Delete! Are you sure ?')"><i class="bi bi-trash-fill"></i></a></td>
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>


       
          <!-- content-wrapper ends -->
@endsection

