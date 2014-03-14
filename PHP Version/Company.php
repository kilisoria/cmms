<!DOCTYPE html>
<html>
 <head>
		<?php
		require_once ("Layout.php");
		?>

<link type="text/css" href="Content/Styles/skitter.styles.css" media="all" rel="stylesheet" />

<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
<script type="text/javascript" src="js/jquery.skitter.min.js"></script>

  <title>CMMS Software</title>  
 </head>

<?php include("Header.php") ?>

 <body>

<div class="container-fluid company-main-container">  
</div>

<div class="container box_skitter box_skitter_large">
	<ul>
		<li>
			<a href="#cut"><img src="Content/Images/company-1.jpg" class="cut" /></a>
			<div class="label_text"><p>cut</p></div>
		</li>
		<li>
			<a href="#swapBlocks"><img src="Content/Images/company-2.jpg" class="swapBlocks" /></a>
			<div class="label_text"><p>swapBlocks</p></div>
		</li>
		<li>
			<a href="#swapBarsBack"><img src="Content/Images/company-3.jpg" class="swapBarsBack" /></a>
			<div class="label_text"><p>swapBarsBack</p></div>
		</li>
	</ul>
</div>

<?php include("Footer.php") ?>

 </body> 

<script>
	$(document).ready(function() {
		$(".box_skitter_large").skitter();
	});
</script>

</html>
