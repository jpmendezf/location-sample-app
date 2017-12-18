@extends('layouts.index')
@section('content')
@endsection

@section('custom_js')
<script type="text/javascript">
	  	if (navigator.geolocation) {
	  		var input = document.getElementById('search');
	        var searchBox = new google.maps.places.Autocomplete(input);
	        var geocoder = new google.maps.Geocoder();
			navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};

				var latlng = new google.maps.LatLng(pos.lat, pos.lng);
	            geocoder.geocode({'latLng': latlng}, function(results, status) {
	                if(status == google.maps.GeocoderStatus.OK) {
	                	$("#search").val(results[0]['formatted_address']);
	                };
	            });
	    	});
			searchBox.addListener('place_changed', function() {
	          var place = searchBox.getPlace();
	          console.log(place.formatted_address);
	          console.log(place.geometry.viewport.b.b);
	          console.log(place.geometry.viewport.f.b);

	        });
	    }
	   $("#locate-me").click(function(e){
	   		navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
				console.log(pos);
				var latlng = new google.maps.LatLng(pos.lat, pos.lng);
	            geocoder.geocode({'latLng': latlng}, function(results, status) {
	                if(status == google.maps.GeocoderStatus.OK) {
	                	$("#search").val(results[0]['formatted_address']);
	                };
	            });
	    	});
	   });
  	</script>
@endsection