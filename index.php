<!DOCTYPE html>
<html>
<head>
	<?php include_once('include/head.php');?>
	<link rel="stylesheet" href="/winery/mycss/main.css" type="text/css">
	<script src="myjs/myjs.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Playball&display=swap" rel="stylesheet">
</head>
<body>
	<?php include_once('include/header.php');?>
	<br><br>
	<?php
		echo $_SESSION['username']; 
	?>
	<div id="carouselExampleFade" class="carousel slide carousel-fade home-corosal" data-ride="carousel">
  			<div class="carousel-inner">
    			<div class="carousel-item active">
      				<img src="images/demo1.jpg" class="d-block w-100" alt="...">
      				<div class="carousel-caption d-none d-md-block">
      					<h1>Martha's yard</h1>
      				</div>
    			</div>
		    	<div class="carousel-item">
      				<img src="images/demo2.jpg" class="d-block w-100" alt="...">
      				<div class="carousel-caption d-none d-md-block">
      					<h1>Single Vineyard Selection</h1>
      				</div>
    			</div>
    			<div class="carousel-item">
      				<img src="images/demo3.jpg" class="d-block w-100" alt="...">
      				<div class="carousel-caption d-none d-md-block">
      					<h1>Agiorgitiko by Gaia</h1>
      				</div>
    			</div>
  				</div>
  					<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
			</div>
	<div class="container-fluid">
		<br>		
		<br>		
		<br>		
		
			<div class="jumbotron my-jumbotron-home" style="background-color: #222629;">
				<p class="my-red-heading">Tasting Wine</p>
				<img class="my-sub-icon" src="images/wine-icon.png"/>
				<p class="my-sub-content">There’s no right way or wrong way to taste wine. It’s this simple — do you like what you’re drinking or do you not like what you’re drinking? That said, there’s a formal way to taste wine that reveals more about the wine in your glass, even before you start drinking. Here at VinePair, we understand that this method of tasting can be intimidating, so we’re going to break it down for you, leaving you feeling comfortable and confident if you wish to use this method.</p>
				
			</div>
			<div class="jumbotron my-jumbotron-home" style="background-color: #222629;">
				<p class="my-red-heading">Types Of Wines & Grapes</p>
				<img class="my-sub-icon" src="images/varietals-icon.png"/>
				<p class="my-sub-content">Learn about the most popular grapes and wine blends in the world. From Merlot to Malbec, and everything (and everywhere!) in between, our short guides break down everything you need to know about whatever wine you’re interested in.
				<button type="button" class="btn btn-success float-right">Know More</button>				
				</p>
				
				
			</div>
		</div>
</body>
</html>