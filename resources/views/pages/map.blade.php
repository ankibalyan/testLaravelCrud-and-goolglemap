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
				center: {lat: 51.503,lng: -0.127},
				zoom: 8
			}

			mapElem = document.getElementById('map-canvas');
			map = new google.maps.Map(mapElem, mapOpt);

		}(window,google));
	});
    </script>
@endsection