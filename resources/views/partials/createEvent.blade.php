<form action="event/" method="post" enctype="multipart/form-data">

	<input name="user_id" type="hidden" value="{{$user->id}}">

	<input name="title" type="text" class="active" placeholder="Nombre" required  />

	<textarea name="description" id="" cols="30" rows="2" placeholder="Descripcion"></textarea>
	<input name="fecha" type="date" class="active"  required  />
	<p class="flyer">Flyer</p><br>
	<input type="file" name="flyer" placeholder="Flyer" >

	<div class="login-bottom">
		<ul>
			<li></li>
			<li><input type="submit" value="CREAR"/></li>
		<ul>
		<div class="clear"></div>
	</div>	
	
</form>