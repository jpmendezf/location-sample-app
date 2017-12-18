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
			<div class="container food-search">
			<div class="input-group" style="padding-top: 80px;">
		        <input class="form-control enquiry-input" id="search" name="search">
		       <div class="input-group-addon enquiry-input" style="background-color: transparent;">
		       	<button id="locate-me">Locate Me</button>
		       </div>
		     </div>
		</div>
	</section>
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					 <h6 id="location-details"></h6>
					 <span id="longitude"></span>
					 <span id="latitude"></span>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<h5>Category</h5>
					<hr>
					<label class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Regional Desi Delights</span>
					</label>
					<label class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Starters</span>
					</label>
					<br>
					<label class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Main course</span>
					</label>
					<label class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Rice/Paratha</span>
					</label>
					<label class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Desserts/Beverages</span>
					</label>
					<br><br>
					<h5>Veg/Non-Veg</h5>
					<hr>
					<label class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Veg</span>
					</label>
					<br>
					<label class="custom-control custom-checkbox">
					  <input type="checkbox" class="custom-control-input">
					  <span class="custom-control-indicator"></span>
					  <span class="custom-control-description">Non-Veg</span>
					</label>
				</div>
				<div class="col-md-9">
					<div class="row" id="items">
						@yield('content')
					</div>
					
				</div>
				
			</div>
			
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_o-P9KDY3kLSw2sYgbQH7PpwyAbXu8bo&libraries=places">
    </script>
  	@yield('custom_js')

</body>
</html>