<div>
   @if(session()->has('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
   @endif


   <form role="form" wire:submit.prevent="store">
       @csrf
        <div class="form-group">
            <textarea class="form-control" rows="3" wire:model="comment"></textarea>
            @error('comment') <span class="text-danger">{{$message}}</span>@enderror
        </div>

        <div class="container d-flex justify-content-center mt-5">
    
            <div class="rate bg-success py-3 text-white mt-3">
                <div class="rating"> 
                    <input type="radio" wire:model="rate" value="5" id="5"><label for="5">☆</label> 
                    <input type="radio" wire:model="rate" value="4" id="4"><label for="4">☆</label> 
                    <input type="radio" wire:model="rate" value="3" id="3"><label for="3">☆</label> 
                    <input type="radio" wire:model="rate" value="2" id="2"><label for="2">☆</label> 
                    <input type="radio" wire:model="rate" value="1" id="1"><label for="1">☆</label> 
                </div>
            </div>
    
        </div>
        @auth
            
            <input type="submit" class="btn btn-primary" value="Yorum Yap"></input>
            @else
            <a href="{{route('home_login')}}">Yorum Yapmak İçin Giriş Yapmalısınız</a>
            @endauth
    </form>




</div>
