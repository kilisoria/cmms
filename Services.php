<!DOCTYPE html>
<html>
	<head>
		<?php
		require_once ("Layout.php");
		require_once ("Resources.inc");
		?>

		<link rel="stylesheet" href="Content/Styles/jcarousel.styles.css" />
		<script src="Scripts/jquery.jcarousel.min.js"></script>

		<title>CMMS Software</title>
	</head>
	<?php include("Header.php")
	?>
	<body>

<div class="services-main-container">  
		<div class="container services-top-container">
			<? Resources::ServicesMainDescription(); ?>
		</div>
		<div class="container services-sub-top-container">	
			<? Resources::ServicesSubDescription(); ?>
		</div>
		<div class="jcarousel-wrapper">
			<div class="jcarousel">
				<ul>
					<li><img src="Content/Images/microsoft.jpg" width="100" height="110" alt="">
					</li>
					<li><img src="Content/Images/VS-logo.jpg" width="100" height="110" alt="">
					</li>
					<li><img src="Content/Images/Csharp.jpg" width="100" height="110" alt="">
					</li>
					<li><img src="Content/Images/ASP-net-MVC.jpg" width="100" height="110" alt="">
					</li>
					<li><img src="Content/Images/SQL-server.jpg" width="100" height="110" alt="">
					</li>
					<li><img src="Content/Images/Azure.jpg" width="120" height="110" alt="">
					</li>
					<li><img src="Content/Images/HTML5.jpg" width="200" height="160" alt="">
					</li>
					<li><img src="Content/Images/css3.jpg" width="200" height="160" alt="">
					</li>
					<li><img src="Content/Images/javascript.jpg" width="180" height="160" alt="">
					</li>
					<li><img src="Content/Images/linux.jpg" width="200" height="160" alt="">
					</li>
					<li><img src="Content/Images/php.jpg" width="200" height="160" alt="">
					</li>
					<li><img src="Content/Images/Apache.jpg" width="200" height="160" alt="">
					</li>
				</ul>
			</div>
			<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
			<a href="#" class="jcarousel-control-next">&rsaquo;</a>
			<p class="jcarousel-pagination"></p>
		</div>
		</div>
		</ul>
		</div>
		</div>
		<?php include("Footer.php")
		?>
	</body>

	<script>
		$(document).ready(function() {

			$('.jcarousel').jcarousel();

			$('.jcarousel-control-prev').on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			}).on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			}).jcarouselControl({

				target : '-=1'
			});

			$('.jcarousel-control-next').on('jcarouselcontrol:active', function() {
				$(this).removeClass('inactive');
			}).on('jcarouselcontrol:inactive', function() {
				$(this).addClass('inactive');
			}).jcarouselControl({
				target : '+=1'
			});

			$('.jcarousel-pagination').on('jcarouselpagination:active', 'a', function() {
				$(this).addClass('active');
			}).on('jcarouselpagination:inactive', 'a', function() {
				$(this).removeClass('active');
			}).jcarouselPagination();

		});

	</script>

</html>
