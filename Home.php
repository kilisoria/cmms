<?php 

session_start();

$lang = $_REQUEST["lang"];

$_SESSION["Language"] = (strlen($lang) == 0) ? "No Defined" : $lang;

 ?>

<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once ("Layout.php");
		?>
		<title>CMMS Software</title>
	</head>

	<?php require("Header.php")
	?>

	<body>

		<div class="feature" id="initialMessage" style="display: none">
			{ #Developing your solution! }
		</div>

		<canvas id="world">
			<p class="noCanvas">
				You need a <a href="http://www.google.com/chrome">modern browser</a> to view this.
			</p>
		</canvas>

		<script src="Scripts/home.wave.js"></script>


<?php echo($_SESSION["Language"]); ?>

		<?php require("Footer.php")
		?>
	</body>

	<script>
		$(window).load(function() {

			$("#initialMessage").css("display", "block")
			//$("#initialMessage").fadeIn('slow').hide(20000);

		});

		$("#world").click(function() {
			$("#initialMessage").css("display", "none");
		})

	</script>

</html>
