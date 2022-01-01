<div>

    <input wire:model="search" name="search" type="text" class="form-control search-bar" list="mylist"
    placeholder="Keşfet">
    @if(!empty($query))
        <datalist id="mylist">
            @foreach($datalist as $rs)
                <option value="{{$rs->title}}">{{$rs->category->title}}</option>
            @endforeach
        </datalist>
    @endif
    
</div>
