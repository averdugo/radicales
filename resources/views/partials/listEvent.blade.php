<div class="navigation-bottom-menu-bottom scrollbar" id="style-2">
<br>
    @foreach ($events as $e)
        <div class="nav-btm-menu-btm-grid john evento" data-id="{{$e->id}}" >
            <div class="nav-btm-menu-btm-grid-left">
                <img src="flyers/{{$e->flyer}}" alt=" " class="img-responsive" />
            </div>
            <div class="nav-btm-menu-btm-grid-left1">
                <h3>{{$e->title}}</h3>
                <p>{{$e->description}}</p>
            </div>
            <div class="nav-btm-menu-btm-grid-right">
                <h4>{{$e->fecha}}</h4>
                <p class="pActivity" data-id="{{$e->id}}">&nbsp;&nbsp;&nbsp;<i class="glyphicon glyphicon-remove"></i></p>
            </div>
            <div class="clear"> </div>
        </div>
    @endforeach
  
  
</div>