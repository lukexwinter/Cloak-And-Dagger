<?php include "constants.php"; ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
		<div class="fade"></div>
        <div id="frame">
			<header class="clearfix">
				<nav>
					<a href="index.php"><img id="logo" src="img/cd-logo.png" alt="Cloak And Dagger Tattoo Studio" /></a>
					<ul>
						<li><a href="artists.php"<?php if($_SERVER['SCRIPT_NAME'] == '/artists.php') { echo 'class="active"'; } ?>>Artists</a></li>
						<li><a href="about.php"<?php if($_SERVER['SCRIPT_NAME'] == '/about.php') { echo 'class="active"'; } ?>>About</a></li>
						<li><a href="booking.php"<?php if($_SERVER['SCRIPT_NAME'] == '/booking.php') { echo 'class="active"'; } ?>>Booking</a></li>
						<li><a href="questions-and-care.php"<?php if($_SERVER['SCRIPT_NAME'] == '/questions-and-care.php') { echo 'class="active"'; } ?>>Questions &amp; Care</a></li>
					</ul>
					<div class="shade"></div>
				</nav>
			</header>
			<!--Frame Top-->
        	<div class="gold-border top-left"></div>
			<div class="gold-border top-right"></div>
			<div style="clear: both;"></div>
			<!--Frame Sides-->
			<div class="gold-border left"></div>
			<div class="gold-border right"></div>
			<div style="clear: both;"></div>
			<!--Frame Bottom-->
        	<div class="gold-border bottom-left"></div>
			<div class="diamond"><img src="img/diamond.png" /></div>
			<div class="gold-border bottom-right"></div>
			<div style="clear: both;"></div>
			<footer class="clearfix">
				<h6 class="fleft">Cloak And Dagger Tattoo Studio</h6>
				<h6 class="address fright">1047 brown street dayton, oh 45121 <span class="phone">937.222.7880</span></h6>
			</footer>
		</div>
		<nav class="mobile-nav">
			<ul>
				<li id="menu-button"><a href="#">Menu<span class="line one"></span><span class="line two"></span><span class="line three"></span></a></li>
				<li><a href="artists.php">Artists</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="booking.php">Booking</a></li>
				<li><a href="questions-and-care.php">Questions &amp; Care</a></li>
			</ul>
		</nav>