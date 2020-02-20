<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Image Generator - Home</title>
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
      <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-tachometer-alt fa-fw"></i> Dashboard</a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link disabled" href="#"><i class="fa fa-home fa-fw"></i> Configure <span class="sr-only">(current)</span></a>
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
		<div class="col-md-4"></div>
		<div class="col-md-4 mt-5">			
			<h1 class="text-center"><i class="fa fa-cogs fa-fw"></i> Configurations</h1>
		</div>
		<div class="col-md-4"></div>
	</div>
	<!-- Access form -->
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<form class="mt-5">
				
			  <h4 class="mb-4"><i class="fa fa-database fa-fw"></i> Database</h4>
			  <div class="form-group">
				<label for="formGroupExampleInput">Hosting</label>
				<input type="text" class="form-control" laceholder="Localhost" value="localhost">
			  </div>
			  <div class="form-group">
				<label for="formGroupExampleInput2">Database</label>
				<input type="text" class="form-control" laceholder="Database" value="imggen">
			  </div>
			  <div class="form-group">
				<label for="formGroupExampleInput2">User</label>
				<input type="text" class="form-control" laceholder="admin" value="admin">
			  </div>
			  <div class="form-group">
				<label for="formGroupExampleInput2">Password</label>
				<input type="password" class="form-control" laceholder="Password">
			  </div>
			  <div class="form-group">
				<label for="formGroupExampleInput2">Database table</label>
				<input type="text" class="form-control" placeholder="text" value="text">
			  </div>
			  <div class="form-group">
				<label for="formGroupExampleInput2">Prefix</label>
				<input type="text" class="form-control" placeholder="ig_" value="ig_">
			  </div>
				
			  <hr class="mt-5 mb-5">
				
			  <h4 class="mb-4"><i class="fa fa-images fa-fw"></i> Images</h4>	
			  <div class="form-group">
				<label for="formGroupExampleInput2">Images directory path</label>
				<input type="text" class="form-control" placeholder="ImgGen/images/" value="ImgGen/images/">
			  </div>
			  <div class="form-group">
				<label for="formGroupExampleInput2">
					Images default name
					<a style="cursor: pointer;" tabindex="0" data-toggle="popover" data-trigger="focus" data-content="Replace for the name given to the images, ie.: images_ or myimage_">
						<i class="fa fa-question-circle fa-fw"></i>
					</a>
				</label>
				<input type="text" class="form-control" placeholder="Images default name" value="image_">
			  </div>
			  <div class="form-group">
				<label for="inputState">Images extension type</label>
			  	<select class="form-control">
					<option selected>jpg</option>
					<option>jpeg</option>
					<option>png</option>
					<option>gif</option>
			    </select>
			  </div>
				
			  <hr class="mt-5 mb-5">
				
			  <h4 class="mb-4"><i class="fa fa-copyright fa-fw"></i> Logo</h4>	
			  <div class="form-group">
				<label for="formGroupExampleInput2">Logo directory path</label>
				<input type="text" class="form-control" placeholder="Logo directory path" value="ImgGen/logo/">
			  </div>
			  <div class="form-group">
				<label for="formGroupExampleInput2">Logo name</label>
				<input type="text" class="form-control" placeholder="Logo name" value="logo">
			  </div>
			  <div class="form-group">
				<label for="inputState">Bran extension type</label>
			  	<select class="form-control">
					<option selected>jpg</option>
					<option>jpeg</option>
					<option>png</option>
					<option>gif</option>
			    </select>
			  </div>
				
			  <button type="submit" class="btn btn-info btn-block mt-5"><i class="far fa-check-circle fa-fw"></i> Configure</button>
			</form>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>

<!-- Footer -->	
<footer class="text-light text-center mt-5">
	<p>Powered by <a href="https://www.pixelbytedesign.com" class="text-info">PixelByteDesign</a> - Bogotá D.C., Colombia 2020</p>	
</footer>
	
<!--<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>-->

</body>
</html>