@extends('layouts.home')

@section('title','Editor')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')

<div class="section-header">
            <div class="col-lg-12">
                <h1 class="page-header"></h1>
            </div>

      <div class="container">
        <div class="row">

                <div class="container container-int">
                
                <div class="row">
                    

                    <div class="col-md-12 col-sm-12">

                            <div class="post">
                                    <h1 class="post-title" style="font-family:Arial; text-align:center">{{$data2->title}}</h1>
                                    <br>
                                    <div style="display:flex; justify-content:space-between">
                                        <img src="{{Storage::url($data2->image)}}" alt="" style="width:100%;position: relative;margin:auto"> 
                                    </div>
                                    <br>
                                    
                                    {!!$data2->detail!!}
                            </div><!-- /.post -->
                            
                    </div> <!--col-md-12 -->

                </div><!-- /.row --> 

                </div><!-- /.container int-->
        </div><!-- /.row -->
      </div><!-- /.container-->
</div><!-- /.section header -->

@endsection


@section('footer')
    @include('home._footer')
@endsection