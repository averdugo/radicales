@extends('layout')

@section('content')

<div class="sap_tabs">
	<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			<ul class="resp-tabs-list">
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><h2><span>Evento</span></h2></li>
						<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Mis Eventos</span></li>
						<div class="clear"> </div>
					</ul>					  	 
		<div class="resp-tabs-container">
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
				<div class="login-top">
					<form>
						<input type="text" class="email" placeholder="Email" required=""/>
						<input type="password" class="password" placeholder="Password" required=""/>	
						<input type="checkbox" id="brand" value="">
						<label for="brand"><span></span> Remember me?</label>
					</form>
					<div class="login-bottom">
						<ul>
							<li>
								<a href="#">Forgot password?</a>
							</li>
							<li>
								<form>
									<input type="submit" value="LOGIN"/>
								</form>
							</li>
						<ul>
						<div class="clear"></div>
					</div>	
				</div>
			</div>
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
				<div class="login-top sign-top">
					<form>
						<input type="text" class="name active" placeholder="Your Name" required=""/>
						<input type="text" class="email" placeholder="Email" required=""/>
						<input type="password" class="password" placeholder="Password" required=""/>		
						<input type="checkbox" id="brand1" value="">
						<label for="brand1"><span></span> Remember me?</label>
					</form>
					<div class="login-bottom">
						<ul>
							<li>
								<a href="#">Forgot password?</a>
							</li>
							<li>
								<form>
									<input type="submit" value="SIGN UP"/>
								</form>
							</li>
						<ul>
						<div class="clear"></div>
					</div>	
				</div>
			</div>
		</div>	
	</div>
	<div class="clear"> </div>
</div>
@stop