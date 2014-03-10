<!DOCTYPE html>
<html>
	<head>
		<title>CMMS Software</title>
		<?php
		require_once ("Layout.php");
		?>
	</head>

	<body>

		<?php include("Header.php")
		?>

		<section class="container-fluid contact-main-container">
			<header class="control-group">
				<h1>Contact US!</h1>
			</header>
			<div class="contact-form-container">
				<form action="Contact.php" method="post">
					<div class="contact-item-container">
						<input type="text" placeholder="Name" id="name"/>
					</div>
					<div class="contact-item-container">
						<input type="email" placeholder="Email" id="email"/>
					</div>
					<div class="contact-item-container">
						<input type="text" placeholder="Company" id="company"/>
					</div>
					<div class="contact-item-container">
						<textarea id="message" rows="8" cols="0" placeholder="Your message!"></textarea>
					</div>
					<div class="contact-item-right-container">
						<a class="btn-link">Back</a>
						<input type="submit" class="btn btn-large btn-inverse" value="Send"/>
					</div>
				</form>
			</div>
		</section>

		<?php include("Footer.php")
		?>

		<script>
			$(document).ready(function() {

				$("input").attr("maxlength", 100);

				$(".contact-item-right-container a").click(function() {
					window.location.href = "Home.php";
				});

			})

		</script>

	</body>

</html>
