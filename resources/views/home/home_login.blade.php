@extends('layouts.home')

@section('title','Giriş Yap')
@section('keywords',$data->keywords)
@section('description',$data->description)


@section('header')
    @include('home._header')
@endsection

@section('content')
    <div class="maindiv">
    <div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			
			<div class="card-body form-div">
                <div class="card-header">
                    <h2>Giriş Yap</h2>		
                </div>
				@if (session('status'))
            		<div class="mb-4 font-medium text-sm text-green-600">
                		{{ session('status') }}
            		</div>
       			 @endif
				<form method="POST" action="{{route('home_logincheck')}}">
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">

						</div>
						<input type="email" name="email" class="form-control" placeholder="username" id="email">
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input type="password" name="password" class="form-control" placeholder="password" id="password">
					</div>
					
					<div class="form-group">
						<input type="submit" value="Giriş Yap" class="btn float-right login_btn" >
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<span style="color:white">Hesabın yok mu? <a href="{{route('user_register')}}" style="color:white">Kayıt Ol</a></span>    
					@include('home.message') 
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