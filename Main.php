<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once ("Layout.php");
		?>
		<title>CMMS Software</title>
	</head>
	<body>
		<div class="main-container">
			<div class="col-md-8 main-title" style="display:none">
				CMMS SOFTWARE
			</div>
			<div class="col-md-4 col-md-offset-2" style="display:none">
				<span> Beta Version 1.0</span> <span class="main-language-name"><a>ENGLISH<a>&nbsp;&nbsp;<a>ESPAÑOL<a></span> 
			</div>
		</div>

		<script>
		
			$(window).load(function() {

				$(".main-container div").css("display", "block");

				$(".main-container").click(function() {
					window.location.href = "Home.php";
				});

				//$('.main-container div:eq(2) .main-language-name a:eq(1)').click(function(){ alert("a"); });

			})

		</script>

	</body>
</html>
