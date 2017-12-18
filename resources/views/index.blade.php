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
	                	$("#location-details").text(results[0]['formatted_address']);
	                	$.ajax({
							url: "/items",
							cache: false,
							success: function(items){
								$("#items").empty();
								$("#items").append(items);
							}
						});
	                };
	            });
	    	});
			searchBox.addListener('place_changed', function() {
	          var place = searchBox.getPlace();
	          console.log(place.geometry.viewport.b.b);
	          console.log(place.geometry.viewport.f.b);
	          $.ajax({
					url: "/items",
					cache: false,
					success: function(items){
						$("#items").empty();
						$("#items").append(items);
					}
				});
	          $("#location-details").text(place.formatted_address);
	        });
	    }
	   $("#locate-me").click(function(e){
	   		navigator.geolocation.getCurrentPosition(function(position) {
				var pos = {
					lat: position.coords.latitude,
					lng: position.coords.longitude
				};
				var latlng = new google.maps.LatLng(pos.lat, pos.lng);
	            geocoder.geocode({'latLng': latlng}, function(results, status) {
	                if(status == google.maps.GeocoderStatus.OK) {
	                	$("#search").val(results[0]['formatted_address']);
	                	$("#location-details").text(results[0]['formatted_address']);
	                	$.ajax({
					url: "/items",
					cache: false,
					success: function(items){
						$("#items").empty();
						$("#items").append(items);
					}
				});

	                }
	            });
	    	});
	   });
  	</script>
@endsection