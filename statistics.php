<?php 	require_once "php/badmin.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Brotherhood</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,400italic,500,700&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese" rel="stylesheet">
	<script src="js/main.js"></script>
	<script src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/normalize.css"/>
	<link rel="stylesheet" href="css/skeleton.css"/>
	<link rel="stylesheet" href="css/style.css"/>
</head>


<body id="overlay">
<nav id="nav">
	<div id="nav-icon3" class="fa fa-bars fa-2x" data-function="swipe" for="swipe" value="button">
		<span></span>
		<span></span>
		<span></span>
		<span></span>
	</div>
	<ul>
		<li class="active"><a href="index.html"><i class="fa fa-th-large fa-2x" aria-hidden="true" alt="About"></i></a></li>
		<li><a href="media.html"><i class="fa fa-youtube-play fa-2x" aria-hidden="true" alt="Media"></i></a></li>
		<li><a href="posts.html"><i class="fa fa-bookmark fa-2x" aria-hidden="true" alt="Posts"></i></a></li>
		<li><a href="contact.html"><i class="fa fa-envelope fa-2x" aria-hidden="true" alt="Contact Us"></i></a></li>
		<li><a href="statistics.php"><i class="fa fa-exchange fa-2x" aria-hidden="true" alt="Statistics"></i></a></li>
		<!-- <img src="" alt="Brotherhood Gaming" height="54" style="float:right; padding-top:2px;"> -->
	</ul>
</nav>

<div class="sidebarvisible" id="sidebarmenu">
	<div class="container">
		<div id="login">
			<div id="loginheader">
				<div id="titles">
					<h3>Login In</h3>
				</div>
				<p id="smalltext">Please log in with your username and password. Use the <span>Contact Us</span> page if you have any issues.</p>
			</div>
			<div id="loginbody">
				<form>
					<h6 style="padding-top:2%;visibility:hidden;">User Info</h6>
					<div class="ten columns">
						<i class="fa fa-envelope-o fa-lg" id="bodyicon" aria-hidden="true" alt="Sign In"></i>
						<input class="ten columns" type="email" placeholder="username" id="usernameInput">
					</div>
					<div class="ten columns">
						<i class="fa fa-asterisk fa-lg" id="bodyicon" aria-hidden="true" alt="Sign In"></i>
						<input class="ten columns" type="password" placeholder="password" id="passwordInput">
					</div>
				</form>
			</div>
			<div id="loginfooter">
				<input class="button-primary" id="floatleft" type="submit" value="Submit">
				<p id="floatright" style="font-size:0.4em; padding-right:10px;">Need help? <a href="contact.html">click here <i class="fa fa-angle-right fa-lg" aria-hidden="true" alt="Sign In"></i></a></p>
			</div>
		</div>
	</div>
</div>

<div id="main" class="container">

	<header>
		<h2 id="headertitle" class="u-full-width" style="height:50px;"></h2>
	</header>

	<div id="cardholder">
		<div id="statrow1">
				<h3 id="titles">Server Statistics</h3>
						<?php infotable($info); ?>
						<?php ruletable($rules); ?>
		</div>

		<div id="statrow2">
				<h3 id="titles">Player Statistics</h3>
						<?php playertable($players); ?>
				</div>
		</div>


		<script>
			$(document).ready(function(){
				$('#nav-icon3').click(function(){
					$(this).toggleClass('open');
				});
			});

			$(document).ready(function(){
				$("#nav-icon3").click(function(){
					$("#sidebarmenu").toggleClass("sidebar sidebarvisible");
				});
			});

			$(document).on('click', '#nav-icon3', function(){
				if ($('body').css('overflow') == 'auto'){
					$('body').css("overflow", "hidden");
				}else{
					$('body').css("overflow", "auto");
				}
			});
		</script>

</body>

</html>