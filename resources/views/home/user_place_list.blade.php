@extends('layouts.home')

@section('title','Mekanlarım')
@section('keywords')
@section('description')


@section('header')
    @include('home._header')
@endsection

@section('content')
<div class="container" style="margin-top:5%; margin-bottom:5%">

  <div class="row">
      <div class="col-lg-12">
            <h2 class="section-title">Eklediğim Mekanlar</h2>
            @include('home.message')
      </div>
  </div>

  <div class="row">
      <div class="col-lg-12">
            <div class="card-body" style="overflow-x: scroll" >
                  <form action="{{route('user_place_add')}}">
                        <button type="" class="btn btn-primary me-2" >Yeni Mekan Ekle</button>
                  </form>
                    <table class="table table-hover" style="font-family:Arial">
                      <thead>
                        <tr>
                          <th>Güncelle</th>
                          <th>Sil</th>
                          <th>Kategori</th>
                          <th>Başlık</th>
                          <th>Açıklama</th>
                          <th>Şehir</th>
                          <th>Ülke</th>
                          <th>Konum</th>
                          <th>Onay Durumu</th>
                          <th>Resim</th>
                          <th>Resim Galerisi</th>
                          
                        </tr>
                      </thead>

                      <tbody>
                        @foreach ( $datalist as $rs)
                        <tr>
                        <td><a href="{{route('user_place_edit', ['id' => $rs->id])}}">Güncelle</a></td>
                          <td><a href="{{route('user_place_delete', ['id' => $rs->id])}}" onclick="return confirm('Delete! Are you sure ?')">Sil</a></td>
                          <td>{{ \App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category, $rs->category->title) }}</td>
                          <td>{{ $rs->title }}</td>
                          <td>{{ $rs->description }}</td>
                          <td>{{ $rs->city }}</td>
                          <td>{{ $rs->country }}</td>
                          <td>{{ $rs->location }}</td>
                          <td>{{ $rs->status }}</td>

                          <td>
                            @if ( $rs->image )
                                <img src="{{Storage::url($rs->image)}}" height="30" alt=""> 
                            @endif

                          </td>

                          <td><a href="{{route('user_image_add', ['place_id' => $rs->id])}}" onclick="return !window.open(this.href, '','top=50 left=100, width=900, height=700')">Galeri</a></td>

                          
                        </tr>
                        @endforeach
                        
                      </tbody>
                    </table>
            </div>
      </div>
  </div>

</div>

@endsection

@section('footer')
    @include('home._footer')
@endsection

