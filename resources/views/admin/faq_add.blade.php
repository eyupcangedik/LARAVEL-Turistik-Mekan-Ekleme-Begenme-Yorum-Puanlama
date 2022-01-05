@extends('layouts.admin')

@section('title','FAQ Add')
@section('navbar')
    @include('admin._navbar')
@endsection


@section('sidebar')
    @include('admin._sidebar')
@endsection

@section('content')
<div class="main-panel">
          <div class="content-wrapper">

          <h3> ADD FAQ</h3>

            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    
                    <form class="forms-sample" action="{{route('admin_faq_create')}}" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="exampleInputName1">Position</label>
                        <input name="position" type="number" class="form-control" id="exampleInputName1" placeholder="Position">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Question</label>
                        <input name="question" type="text" class="form-control" id="exampleInputName1" placeholder="Question">
                      </div>

                      <div class="form-group" > 
                        <label for="exampleInputName1">Answer</label>
                        <textarea id="editor1" name="answer"></textarea>
                          <script>
                              CKEDITOR.replace( 'editor1' );
                          </script>
                      </div>
                      
                      <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                        <select name="status" class="form-control" id="exampleSelectGender" required >
                          <option>True</option>
                          <option>False</option>
                        </select>
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