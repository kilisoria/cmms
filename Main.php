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

			<div class="col-md-8 main-title">
				CMMS SOFTWARE
			</div>

		</div>

		<script>
			$(document).ready(function() {

				$(".main-container").click(function() {
					window.location.href = "Home.php";
				});
			})

		</script>

	</body>
</html>
