<?php
$this->disableAutoLayout();
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
<script src="//maps.google.com/maps/api/js?v=3&key=AIzaSyDihS5u5-r5HENhrb5EHzJHGXvkra1iITc"></script>
<script>var matching = {
};
var gIcons0 = {
};

	jQuery(document).ready(function() {
		
			var initialLocation = new google.maps.LatLng(51, 11);
			var browserSupportFlag = new Boolean();
			var myOptions = {zoom: 6, streetViewControl: false, navigationControl: true, mapTypeControl: true, scaleControl: true, scrollwheel: false, keyboardShortcuts: true, center: initialLocation, navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL}, mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR, position: google.maps.ControlPosition.RIGHT_CENTER}, mapTypeId: google.maps.MapTypeId.ROADMAP};

			// deprecated
			gMarkers0 = new Array();
			gInfoWindows0 = new Array();
			gWindowContents0 = new Array();
		
			var map0 = new google.maps.Map(document.getElementById("someothers"), myOptions);
			
	// Try W3C Geolocation (Preferred)
	if (navigator.geolocation) {
		browserSupportFlag = true;
		navigator.geolocation.getCurrentPosition(function(position) {
			geolocationCallback(position.coords.latitude, position.coords.longitude);
		}, function() {
			handleNoGeolocation(browserSupportFlag);
		});
		// Try Google Gears Geolocation
	} else if (google.gears) {
		browserSupportFlag = true;
		var geo = google.gears.factory.create("beta.geolocation");
		geo.getCurrentPosition(function(position) {
			geolocationCallback(position.latitude, position.longitude);
		}, function() {
			handleNoGeoLocation(browserSupportFlag);
		});
		// Browser doesn't support Geolocation
	} else {
		browserSupportFlag = false;
		handleNoGeolocation(browserSupportFlag);
	}

	function geolocationCallback(lat, lng) {
		initialLocation = new google.maps.LatLng(lat, lng);
		map0 . setCenter(initialLocation);

	}

	function handleNoGeolocation(errorFlag) {
	if (errorFlag == true) {
		//alert("Geolocation service failed.");
	} else {
		//alert("Your browser doesn't support geolocation. We've placed you in Siberia.");
	}
	//map0 . setCenter(initialLocation);
	}
	

	});</script>
    <div> 
        <div id="map"></div>
        <div id="someothers" class="map" style="width: 100%;height: 400px;">Map cannot be displayed!</div>    </div>
</div>