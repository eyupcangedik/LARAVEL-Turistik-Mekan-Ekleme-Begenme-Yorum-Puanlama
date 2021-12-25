<ul>
@foreach($children as $subcategory)

    
        @if(count($subcategory->children))
            <li>{{$subcategory->title}}
               
                    @include('home.categorytree',['children' => $subcategory->children])
               
            </li>
        @else   
            <li><a href="#">{{$subcategory->title}}</a> </li>
        @endif
   

    @endforeach

</ul>