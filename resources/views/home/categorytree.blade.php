<div class="acilirmenu">
<ul>
@foreach($children as $subcategory)
    
    
        @if(count($subcategory->children))
            <li>
                <a href="{{route('categoryplaces',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->keywords}}</a>
                    @include('home.categorytree',['children' => $subcategory->children])
               
            </li>
        @else   
            <li><a href="{{route('categoryplaces',['id'=>$subcategory->id,'slug'=>$subcategory->title])}}">{{$subcategory->title}}</a> </li>
        @endif
   

    @endforeach

</ul>
</div>