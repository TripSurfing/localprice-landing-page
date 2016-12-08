<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Local Price</title>
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
		<link rel="stylesheet" href="<?= base_url('static/css/main.css') ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	</head>

	<body>
		<div>
			<div class="parallax-container">
				<div class="parallax"><img class="img-responsive img-blur" src="<?= base_url('static/img/background.png') ?>"></div>
				<nav class="container">
					<div class="nav-wrapper">
						<a href="/" class="brand-logo"><img src="<?= base_url('static/img/logo.png') ?>" alt="logo"></a>
						<ul id="nav-mobile" class="right hide-on-med-and-down">
							<li><a href="/">Home</a></li>
							<li><a href="/">Features</a></li>
							<li><a href="/">Contact</a></li>
						</ul>
					</div>
				</nav>

				<div class="row content">
					<div class="col m4 offset-m3 s12">
						<h4>Best way to learn about local prices</h4>
						<ul>
							<li>Search for the prices anytime </li>
							<li>Use anywhere without Wi-Fi</li>
							<li>Find best place to buy</li>
							<li>Remember what you’ll buy</li>
							<li>It’s <strong><i>free!</i></strong></li>
						</ul>
						<img class="button-store" src="<?= base_url('static/img/buttonGoogle.png') ?>" alt="button">
					</div>
					<div class="col m2 s6 offset-s3">
						<img src="<?= base_url('static/img/iphone.png') ?>" alt="phone">
					</div>
				</div>
				
			</div>
		</div>
	</body>
	<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
	<script>
		$(document).ready(function(){
      $('.parallax').parallax();
    });
	</script>

	</html>