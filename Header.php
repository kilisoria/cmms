<?php
require_once ("Layout.php");
require_once ("Resources.inc");
?>

<!-- Header -->
<nav class="navbar-inverse" role="navigation">
	<!--.container-fluid -->
	<div class="container-fluid">
		<div class="navbar-header">
			<ul class="nav navbar-nav">
				<li>
					<a class="nav-logo"> <img src="Content/Images/header-logo-1.jpg" 
						title="CMMS Software"> <span class="nav-logo-description">CMMS</span> </a>
					</li>
					<li class="divider-vertical"></li>
					<li>
						<a class="navbar-brand" href="#"><? Resources::HomeName(); ?></a>
					</li>
					<li>
						<a class="navbar-brand" href="#"><? Resources::ServiceName(); ?></a>
					</li>
					<li>
						<a class="navbar-brand" href="#"><? Resources::CompanyName(); ?></a>
					</li>

				</ul>
			</div>
			<div class="container-fluid">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a  href="#"><? Resources::BlogName(); ?></a>
					</li>
					<li>
						<a href="#"><? Resources::ContactName(); ?></a>
					</li>
					<li class="gobal-social-network-twitter" title="<? Resources::TwitterTooltip(); ?>"></li>
					<li></li>				
					<li class="gobal-social-network-facebook" title="<? Resources::FacebookTooltip(); ?>"></li>
					<li class="gobal-social-network-email" title="<? Resources::EmailTooltip(); ?>">						
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- (End) Header -->		
	<script>
	$(document).ready(function() {

		$(".nav-logo").click(function() {
			window.location.href = "Home.html";
		});

		$('.navbar-header .navbar-brand:eq(0)').click(function() {
			window.location.href = "Home.html";
		});

		$('.navbar-header .navbar-brand:eq(1)').click(function() {
			window.location.href = "Services.html";
		});

		$('.navbar-header .navbar-brand:eq(2)').click(function() {
			window.location.href = "Company.html";
		});

		$('.navbar-right a:eq(0)').click(function() {
			window.location.href = "Blog.html";
		});

		$('.navbar-right a:eq(1)').click(function() {
			window.location.href = "Contact.html";
		});

		$(".gobal-social-network-twitter").click(function() {
			var win = window.open('https://twitter.com/cmmsok', '_newtab');
			win.focus();
		});

		$(".gobal-social-network-facebook").click(function() {
			var win = window.open('https://www.facebook.com/pages/CMMS-Software/518582168192061?ref=hl', '_newtab');
			win.focus();
		});

		$(".gobal-social-network-email").click(function() {
			window.location.href = "mailto:cmms@outlook.com";
		});
	});

</script>
