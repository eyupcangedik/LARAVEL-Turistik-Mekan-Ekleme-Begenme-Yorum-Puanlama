@extends('layouts.home')

@section('title','Mekan Ekle')
@section('keywords')
@section('description')


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:5%; margin-bottom:5%">

    <div class="row">
        <div class="col-lg-10">
            <h2 class="section-title">Mekan Ekle</h2>
            @include('home.message')
        </div>
    </div>

    <div class="row">
        <div class="col-lg-10">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  
                    <form class="forms-sample" action="{{route('user_place_create')}}" method="post" enctype="multipart/form-data">
                      @csrf

                      <div class="form-group">
                        <label for="exampleSelectGender">Kategori</label>
                        
                        <select name="category_id" class="form-control" id="exampleSelectGender" required >
                        
                          <option value="" style="background-color:red; color:white;">Kategori Seçiniz </option>

                          @foreach ($datalist as $rs)
                           
                          <option value="{{ $rs->id }}">{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs, $rs->title)}}</option>
                          
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Başlık</label>
                        <input name="title" type="text" class="form-control" id="exampleInputName1" placeholder="Başlık" required>
                      </div>   

                      <div class="form-group">
                        <label for="exampleInputName1">Açıklama</label>
                        <input name="description" type="text" class="form-control" id="exampleInputName1" placeholder="Açıklama" maxlength="310">
                      </div>
         
                      
                      <div class="form-group" > 
                        
                        <label for="exampleInputName1">Bilgi</label>
                        <textarea id="editor1" name="detail"></textarea>
                          <script>
                              CKEDITOR.replace( 'editor1' );
                          </script>
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Şehir</label>
                        <input name="city" type="text" class="form-control" id="exampleInputName1" placeholder="Şehir">
                      </div>


                      <div class="form-group">
                        <label for="exampleInputName1">Ülke</label>
                        <input name="country" type="text" class="form-control" id="exampleInputName1" placeholder="Ülke">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputName1">Konum</label>
                        <input name="location" type="text" class="form-control" id="exampleInputName1" placeholder="Konum">
                      </div>

                     
                      <div class="form-group">
                        <label>File upload</label>
                        <div class="input-group col-xs-12">
                          <input type="file" name="image" class="form-control file-upload-info" required>
                        </div>
                      </div>
                          
                      <div class="form-group">
                        
                      </div>

                      <input type="submit" class="btn btn-primary me-2" value="Save">
                      
                    </form>
                  </div>
                </div>
            </div>
        </div>
    </div>

</div>
           
@endsection

@section('footer')
    @include('home._footer')
@endsection



