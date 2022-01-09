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
                    <h2>Kayıt Ol</h2>		
                </div>
				@if (session('status'))
            		<div class="mb-4 font-medium text-sm text-green-600">
                		{{ session('status') }}
            		</div>
       			 @endif

				<form method="POST" action="{{route('register')}}">
					@csrf
					<div class="input-group form-group">
						<div class="input-group-prepend">

						</div>
						<input id="name" type="text" name="name" :value="old('name')"  class="form-control" placeholder="Ad-Soyad" required>
						
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">

						</div>
						<input id="email" type="email" name="email" :value="old('email')" class="form-control" placeholder="email" required  >
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input id="password" type="password" name="password" class="form-control" placeholder="password" required >
					</div>

                    <div class="input-group form-group">
						<div class="input-group-prepend">
							
						</div>
						<input id="password_confirmation" type="password" name="password_confirmation" class="form-control" placeholder="password" required >
					</div>
					
					<div class="form-group">
						<input type="submit" value="Kayıt Ol" class="btn float-right login_btn" >
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<span style="color:white">Hesabın var mı? <a href="{{route('home_login')}}" style="color:white">Giriş Yap</a></span>    
                    @if ($errors->any())
                        <div class="alert alert-danger" style="font-family:Arial">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            Kayıtlı Kullanıcı veya Yanlış Şifre
                        </div>
                    @endif
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