<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Image Generator - Dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
<link href="style.css" type="text/css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>
$(document).ready(function(){	
	$('.popover-dismiss').popover({
	  trigger: 'focus'
	})
$(function () {
  $('[data-toggle="popover"]').popover()
	})	

});
</script>
	
</head>
<body>

<!-- Main menu - Top menu -->	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-cogs fa-fw"></i> Image Generator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link disabled" href="#"><i class="fa fa-tachometer-alt fa-fw"></i> Dashboard</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-home fa-fw"></i> Configure <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-envelope fa-fw"></i> Text</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-envelope fa-fw"></i> Contact</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-address-card fa-fw"></i> About Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-hands-helping  fa-fw"></i> Help</a>
      </li>
    </ul>
	  
	<ul class="navbar-nav">
	  <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-sign-out-alt fa-fw"></i> Logout</a>
      </li>
    </ul>
  </div>
</nav>
	
<!-- App logo -->	
<div class="container">
	<!-- Logo row -->
	<div class="row">
		<!--<div class="col-md-4"></div>
		<div class="col-md-4 mt-5">
			<h1 class="text-center"><i class="fa fa-cogs fa-fw"></i> Create image content easy, faster and pro!</h1>
		</div>
		<div class="col-md-4"></div>-->
	</div>
	<!-- Access form -->
	<div class="row">
		
		<!-- Left Column -->
		<div class="col-md-4 mt-5">
			<div class="card">
			  <div class="card-body">
				<h5 class="card-title">Welcome to Image Generator</h5>
				<h6 class="card-subtitle mb-2 text-muted">Thanks for choose us!</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			  </div>
			</div>
			<div class="card mt-2">
			  <div class="card-body">
				<h5 class="card-title">Go Pro</h5>
				<h6 class="card-subtitle mb-2 text-muted">Get more...</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			  </div>
			</div>			
		</div>
		
		<!-- Middel Column -->
		<div class="col-md-4 mt-5">
			<h3>Whit Image Creator to post image content in Easy!</h3>
			
			<p>Thanks for choosing Image Generator to create your images.</p>
			<p>
				Let's get starting your very first images project, so you just need to upload images to your images file, insert text into your database and that's all,
				with just one clic, you will get a lot of images to post in your social networks, work a few hours, and get content for all week, month or event years,
				isn't it great!
			</p>
		</div>
		
		<!-- Right Column -->
		<div class="col-md-4 mt-5">
			<div class="card mt-2">
			  <div class="card-body">
				<h5 class="card-title">Cloud Acounting</h5>
				<h6 class="card-subtitle mb-2 text-muted">Accounting in the cloud!</h6>
				<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				<a href="#" class="card-link">Card link</a>
				<a href="#" class="card-link">Another link</a>
			  </div>
			</div>
		</div>
		
	</div>
</div>

<!-- Footer -->	
<footer class="text-light text-center mt-5">
	<p>Powered by <a href="https://www.pixelbytedesign.com" class="text-info">PixelByteDesign</a> - Bogotá D.C., Colombia 2020</p>	
</footer>
	
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->

</body>
</html>