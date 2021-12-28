<div class="acilirmenu">
<ul>
@foreach($children as $subcategory)
    
    
        @if(count($subcategory->children))
            <li>
                <a href="">{{$subcategory->title}}</a>
                    @include('home.categorytree',['children' => $subcategory->children])
               
            </li>
        @else   
            <li><a href="#">{{$subcategory->title}}</a> </li>
        @endif
   

    @endforeach

</ul>
</div>