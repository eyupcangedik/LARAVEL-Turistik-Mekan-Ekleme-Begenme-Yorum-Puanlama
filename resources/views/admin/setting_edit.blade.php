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

          <h3>SETTING EDIT</h3>  

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_setting_update')}}" method="post" enctype="multipart/form-data">
                      @csrf


                      <div class="container">
                        <div class="row">
                          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                            <div class="card">
                              <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs" id="setting" role="tablist">

                                  <li class="nav-item">
                                    <a class="nav-link active" href="#general" role="tab" aria-controls="description" aria-selected="true">General</a>
                                  </li>

                                  <li class="nav-item">
                                    <a class="nav-link"  href="#email" role="tab" aria-controls="history" aria-selected="false">Smtp Email</a>
                                  </li>

                                  <li class="nav-item">
                                    <a class="nav-link" href="#social" role="tab" aria-controls="deals" aria-selected="false">Social Media</a>
                                  </li>
                                  
                                  <li class="nav-item">
                                    <a class="nav-link" href="#contact" role="tab" aria-controls="deals" aria-selected="false">Contact Us</a>
                                  </li>
                                  
                                  <li class="nav-item">
                                    <a class="nav-link" href="#aboutus" role="tab" aria-controls="deals" aria-selected="false">About Us</a>
                                  </li>

                                  <li class="nav-item">
                                    <a class="nav-link" href="#references" role="tab" aria-controls="deals" aria-selected="false">References</a>
                                  </li>
                            
                                  
                                </ul>
                              </div>

                              <div class="card-body">
                                
                                <div class="tab-content mt-3">
                                  <div class="tab-pane active" id="general" role="tabpanel">

                                      <div class="form-group">
                                        <label for="exampleInputName1">Title</label>
                                        <input name="title" value="{{$data->title}}" type="text" class="form-control" id="title" placeholder="Title">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1">Keywords</label>
                                        <input name="keywords" value="{{$data->keywords}}" type="text" class="form-control" id="keywords" placeholder="Keywords">
                                       </div>

                                       <div class="form-group">
                                        <label for="exampleInputName1">Company</label>
                                        <input name="company" value="{{$data->company}}" type="text" class="form-control" id="company" placeholder="Company">
                                       </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1">Address</label>
                                        <input name="address" value="{{$data->address}}" type="text" class="form-control" id="address" placeholder="Address">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1">Phone</label>
                                        <input name="phone" value="{{$data->phone}}" type="text" class="form-control" id="phone" placeholder="Phone">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1">Fax</label>
                                        <input name="fax" value="{{$data->fax}}" type="text" class="form-control" id="fax" placeholder="Fax">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleSelectGender">Status</label>
                                          <select name="status" value="{{$data->status}}" class="form-control" id="exampleSelectGender" required >
                                            <option>True</option>
                                            <option>False</option>
                                          </select>
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1"></label>
                                        <input name="id" value="{{$data->id}}" type="hidden" class="form-control" id="exampleInputName1" placeholder="">
                                      </div>
                                              
                                  </div>
                                  
                                  <div class="tab-pane" id="email" role="tabpanel" aria-labelledby="history-tab"> 

                                      <div class="form-group">
                                        <label for="exampleInputName1">Email</label>
                                        <input name="email" value="{{$data->email}}" type="text" class="form-control" id="email" placeholder="Email">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1">Smtpserver</label>
                                        <input name="smtpserver" value="{{$data->smtpserver}}" type="text" class="form-control" id="smtpserver" placeholder="Smtpserver">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1">Smtpemail</label>
                                        <input name="smtpemail" value="{{$data->smtpemail}}" type="text" class="form-control" id="smtpemail" placeholder="Smtpemail">
                                      </div>

                                      <div class="form-group">
                                        <label for="exampleInputName1">Smtppassword</label>
                                        <input name="smtppassword" value="{{$data->smtppassword}}" type="text" class="form-control" id="smtppassword" placeholder="Smtppassword">
                                      </div>
                      
                                      <div class="form-group">
                                        <label for="exampleInputName1">Smtpport</label>
                                        <input name="smtpport" value="{{$data->smtpport}}" type="text" class="form-control" id="smtpport" placeholder="Smtpport">
                                      </div>

                                  </div>
                                  
                                  <div class="tab-pane" id="social" role="tabpanel" aria-labelledby="deals-tab">

                                  <div class="form-group">
                                    <label for="exampleInputName1">Facebook</label>
                                    <input name="facebook" value="{{$data->facebook}}" type="text" class="form-control" id="facebook" placeholder="Facebook">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputName1">Instagram</label>
                                    <input name="instagram" value="{{$data->instagram}}" type="text" class="form-control" id="instagram" placeholder="Instagram">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputName1">Twitter</label>
                                    <input name="twitter" value="{{$data->twitter}}" type="text" class="form-control" id="twitter" placeholder="Twitter">
                                  </div>

                                  <div class="form-group">
                                    <label for="exampleInputName1">Youtube</label>
                                    <input name="youtube" value="{{$data->youtube}}" type="text" class="form-control" id="youtube" placeholder="Youtube">
                                  </div>

                                </div>

                                <div class="tab-pane" id="aboutus" role="tabpanel" aria-labelledby="deals-tab">
                                
                                  <div class="form-group">
                                    <label for="exampleInputName1">About Us</label>
                                      <textarea id="summernote" name="aboutus" value="">{{$data->aboutus}}</textarea>
                                        <script>
                                          $(document).ready(function() {
                                            $('#summernote').summernote();
                                          });
                                        </script>  
                                  </div>

                                </div>

                                <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="deals-tab">
                                
                                  <div class="form-group">
                                    <label for="exampleInputName1">Contact Us</label>
                                      <textarea id="summernote2" name="contact" value="">{{$data->contact}}</textarea>
                                      <script>
                                        $(document).ready(function() {
                                          $('#summernote2').summernote();
                                      });
                                      </script>
                                  </div>
                                  
                                </div>

                                <div class="tab-pane" id="references" role="tabpanel" aria-labelledby="deals-tab">
                                
                                  <div class="form-group">
                                    <label for="exampleInputName1">References</label>               
                                    <textarea id="summernote3" name="references" value="">{{$data->references}}</textarea>
                                    <script>
                                      $(document).ready(function() {
                                        $('#summernote3').summernote();
                                      });
                                    </script>
                                  </div>
                                  
                                </div>

                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
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

@section('js')
<script>
    $('#setting a').on('click', function (e) {
      e.preventDefault()
    $(this).tab('show')
})
  </script>
@endsection