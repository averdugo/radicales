<!DOCTYPE HTML>
<!--
	Big Picture by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Big Picture by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" media="all" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body style="padding:0">
		<style>
			#qrcode img{

    margin: 0 auto;
			}
		</style>

		<!-- Intro -->
			<section id="intro" class="main style1 dark fullscreen" style="background-image: url('../flyers/{{$e->flyer}}')">
				<div class="content container 75%">
					<header>
						<h2>{{$e->title}}</h2>
					</header>
					<p style="    font-size: 30px;font-weight: bold;">{{$e->description}}</p>
					<footer class="qr">
						<a href="#" class="button style2 down " style="background-image: url('../img/qrcode.png')"></a>
					</footer>
				</div>
			</section>
			<!-- Modal -->
			<div class="modal fade" id="qrModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			  <div class="modal-dialog" role="document" >
			    <div class="modal-content">

			      <div class="modal-body">
			        <div id="qrcode"></div>
			        <br>
			      </div>

			    </div>
			  </div>
			</div>
		
			
		<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.poptrox.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
				<script src="{{ url('js/bootstrap.min.js') }}"></script>
			<script src="../assets/js/main.js"></script>
			<script src="../js/qrcode.js"></script>
			<script>
				var qrcode = new QRCode(document.getElementById("qrcode"), {
					width : 250,
					height : 250
				});

				function makeCode () {		
					var elText = 'adasd';
					
					if (!elText) {
						alert("Input a text");
						elText.focus();
						return;
					}
					
					qrcode.makeCode(elText);
				}

				makeCode();
					$('body').on('click','.qr',function(){
						$('#qrModal').modal('show');
					})
			</script>

	</body>
</html>