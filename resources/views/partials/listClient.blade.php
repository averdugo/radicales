<div class="navigation-bottom-menu-bottom scrollbar" id="style-2">
<br>
<style>
    i{
        cursor: pointer
    }
    i:hover{
        color:darkred;
    }
    .popover{
        max-width: 600px;
        padding:0 20px;
    }
    .btn-default{
        border: none;
        outline: none;

    }
    .btn-default:hover{
        border: none;
        outline: none;
        background: none;
    }
</style>
    @foreach ($clients as $c)
        <div class="nav-btm-menu-btm-grid john " data-id="{{$c->id}}" >

            <div class="nav-btm-menu-btm-grid-left1">
                <h2>{{$c->name}}</h2>
                <p>{{$c->phone}}</p>
            </div>
            <div class="nav-btm-menu-btm-grid-right">
                
                <p class="" data-id="{{$c->id}}">
                    <i class="glyphicon glyphicon glyphicon-eye-open ticket" data-id="{{$c->unique_id}}"></i>&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
                    <button type="button" class="btn btn-lg btn-default" data-toggle="popover" data-placement="left" title="Enlace" data-content="radicales.app/ticket/{{$c->unique_id}}  aa"> 
                        <i class="glyphicon glyphicon-link " data-id="{{$c->id}}"></i>
                    </button> &nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;
                    
                    <i class="glyphicon glyphicon-remove"></i></p>
            </div>
            <div class="clear"> </div>
        </div>
    @endforeach
  
  
</div>
<!-- Modal -->
<div class="modal fade" id="linkModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="linkModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>