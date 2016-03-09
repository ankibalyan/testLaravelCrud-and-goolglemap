@extends('layouts.main')

@section('title',' My Acedamics | Map')

@section('content')
  <h3 class="center" >Academy's Map</h3>
	<div class="map-wrapper">
		<div id="map-canvas" style="width: 100%; height: 100%;"></div>
	</div>
@endsection

@section('scripts')
	<script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyCDwTH2PhmyL34Gt1bQDN83eCgdYPCr9wU"></script>
    <script>
    $( document ).ready(function(){
		(function(window, google) {
			var mapOpt = {
				center: new google.maps.LatLng(28.751893, 77.058588),
				zoom: 12,
				disableDefaultUI: false,
				scrollwheel: false,
				draggable: true,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				maxZoom: 18,
				minZomm:8,
				zoomControlOptions:{
					position: google.maps.ControlPosition.BOTTOM_LEFT,
					style: google.maps.ZoomControlStyle.SMALL
				},
				panControlOptions:{
					position: google.maps.ControlPosition.LEFT_BOTTOM,
				}
			}

		    var locations = [
		    @foreach ($academics as $academic)
		      ['{{$academic->academic_name}}', {{$academic->latitude}}, {{$academic->longitude}}, true],
		    @endforeach
		    ];

			mapElem = document.getElementById('map-canvas');
			map = new google.maps.Map(mapElem, mapOpt);

		    var infowindow = new google.maps.InfoWindow();
		    var marker, i;

		    for (i = 0; i < locations.length; i++) {  
		      marker = new google.maps.Marker({
		        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
		        map: map
		      });


		      google.maps.event.addListener(marker, 'click', (function(marker, i) {
		        return function() {
		          infowindow.setContent(locations[i][0]);
		          infowindow.open(map, marker);
		        }
		      })(marker, i));
		    }
		}(window,google));
	});
    </script>
@endsection