<!DOCTYPE html>
<html>
<head>
	<title>Petoo.in</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="{{ asset("css/app.css") }}">
</head>
<body>
	<div class="row">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="#">Petoo</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			  </div>
			</nav>
		</div>
	</div>
	<section class="row header-section">
		<div class="after">
			<div class="container food-search">
			<div class="input-group" style="padding-top: 80px;">
		        <input class="form-control enquiry-input" id="search" name="search">
		       <div class="input-group-addon enquiry-input" style="background-color: transparent;">
		       	<button id="locate-me">Locate Me</button>
		       </div>
		     </div>
		</div>
		</div>
	</section>
	<div class="row">
		<div class="container">
			@yield('content')
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_o-P9KDY3kLSw2sYgbQH7PpwyAbXu8bo&libraries=places">
    </script>
  	@yield('custom_js')

</body>
</html>