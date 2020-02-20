<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Image Generator - Home</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" rel="stylesheet">
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
	
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fa fa-cogs"></i> Image Generator</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-envelope"></i> Contact</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-address-card"></i> About Us</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-hands-helping"></i> Help</a>
      </li>
    </ul>
  </div>
</nav>
	
<!-- App logo -->	
<div class="container">
	<!-- Logo row -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<i id="ig-logo-access" class="fa fa-cogs text-center"></i>
			<h1 class="text-center">Image Generator</h1>
		</div>
		<div class="col-md-4"></div>
	</div>
	<!-- Access form -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form class="mt-5">
			  <div class="form-group">
				<label for="exampleInputEmail1">Email address</label>
				<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
				<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <div class="form-group form-check">
				<input type="checkbox" class="form-check-input" id="exampleCheck1">
				<label class="form-check-label" for="exampleCheck1">Check me out</label>
			  </div>
			  <button type="submit" class="btn btn-info btn-block">Submit</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<footer class="text-light text-center fixed-bottom">
	<p>Powered by <a href="https://www.pixelbytedesign.com" class="text-info">PixelByteDesign</a> - Bogotá D.C., Colombia 2020</p>	
</footer>
	
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>