<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Radicales VIP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--Custom Theme files-->
<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('css/style3.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('css/style2.css') }}" rel="stylesheet" type="text/css" media="all" />

<!--//Custom Theme files -->
<!--web font-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!--//web font-->
<!--js-->
<script src="{{ url('js/jquery.min.js') }}"></script>
<script src="{{ url('js/easyResponsiveTabs.js') }}" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
				type: 'default', //Types: default, vertical, accordion           
				width: 'auto', //auto or any width like 600px
				fit: true   // 100% fit in a container
			});
		});
	   </script>
<!--//js-->
</head>
<body>
	<!-- main -->
	<div class="main">
		<h1><img src="{{ url('img/logo_radicales.png') }}" alt=""/></h1>
		<div class="main-info">
			@yield('content')
		</div>	
	</div>	
	<script src="{{ url('js/bootstrap.min.js') }}"></script>
	<script src="{{ url('js/main.js') }}"></script>
</body>
</html>