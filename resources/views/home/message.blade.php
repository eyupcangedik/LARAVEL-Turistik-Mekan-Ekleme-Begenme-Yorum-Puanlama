@if ($message = Session::get('success'))
<div class="alert alert-success alert-block" style="font-family:Arial">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Mesajınız Gönderildi</strong>
</div>
@endif

@if ($message = Session::get('send'))
<div class="alert alert-success alert-block" style="font-family:Arial">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Yer Eklendi, Admin Onayı Bekliyor</strong>
</div>
@endif

@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block" style="font-family:Arial">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <p>{{ $message }}</p>
</div>
@endif

@if ($message = Session::get('warning'))
<div class="alert alert-warning alert-block" style="font-family:Arial">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
<div class="alert alert-info alert-block" style="font-family:Arial">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($errors->any())
<div class="alert alert-danger" style="font-family:Arial">
    <button type="button" class="close" data-dismiss="alert">×</button>
    Kullanıcı Adı veya Şifre Hatalı :(
</div>
@endif