@extends('layout')

@section('content')
<h1>{{$e->title}}</h1>
<div class="sap_tabs">
	<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
		<ul class="resp-tabs-list">
			<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><h2><span>Invitado</span></h2></li>
			<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Mis Invitados</span></li>
			<div class="clear"> </div>
		</ul>					  	 
		<div class="resp-tabs-container">
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
				<div class="login-top">
					@include('partials.createClient')
				</div>
			</div>
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
				<div class="main-info-grid1">
					@include('partials.listClient')

				</div>
			</div>
		</div>	
	</div>
	<div class="clear"> </div>
</div>
@stop