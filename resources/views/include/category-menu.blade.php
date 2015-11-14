<div  class='category-container-menu' >
    @foreach($menu as $name => $link)
        <a href="{{$link}}">
            {{$name}}
        </a>
        /
    @endforeach
</div>
<br>  <br>