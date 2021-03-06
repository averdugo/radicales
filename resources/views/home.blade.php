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
					@include('partials.createEvent')
				</div>
			</div>
			<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
				<div class="main-info-grid1">
					@include('partials.listEvent')

				</div>
			</div>
		</div>	
	</div>
	<div class="clear"> </div>
</div>
@stop