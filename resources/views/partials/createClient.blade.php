<form action="../client/" method="post" >
	<input type="hidden" name="user_id" value="{{$user->id}}">
	<input type="hidden" name="event_id" value="{{$e->id}}">
	<input name="name" type="text" class="active" placeholder="Nombre" required  />
	<input name="phone" type="text" class="active" placeholder="Telefono"  />
	<div class="login-bottom">
		<ul>
			<li></li>
			<li><input type="submit" value="CREAR"/></li>
		<ul>
		<div class="clear"></div>
	</div>	
	
</form>