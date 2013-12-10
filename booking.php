<?php include "header.php"; ?>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
<script>
	function initialize() {
		
		var styles = [
			{
				featureType: 'landscape',
				elementType: 'all',
				stylers: [
					{ hue: '#e0dbd4' },
					{ saturation: -40 },
					{ lightness: -4 },
					{ visibility: 'on' }
				]
			},{
				featureType: 'landscape.man_made',
				elementType: 'all',
				stylers: [
					{ hue: '#f0ebe2' },
					{ saturation: 7 },
					{ lightness: 22 },
					{ visibility: 'on' }
				]
			},{
				featureType: 'water',
				elementType: 'all',
				stylers: [
					{ hue: '#cabaa2' },
					{ saturation: -39 },
					{ lightness: -6 },
					{ visibility: 'on' }
				]
			},{
				featureType: 'poi',
				elementType: 'all',
				stylers: [
					{ hue: '#ded5ac' },
					{ saturation: 0 },
					{ lightness: -1 },
					{ visibility: 'on' }
				]
			},{
				featureType: 'poi.medical',
				elementType: 'all',
				stylers: [
					{ hue: '#e6d6c9' },
					{ saturation: -10 },
					{ lightness: -3 },
					{ visibility: 'on' }
				]
			},{
				featureType: 'poi.park',
				elementType: 'all',
				stylers: [
					{ hue: '#e0dbd4' },
					{ saturation: -62 },
					{ lightness: 34 },
					{ visibility: 'on' }
				]
			},{
				featureType: 'road.highway',
				elementType: 'all',
				stylers: [
					{ hue: '#ccc6a7' },
					{ saturation: -73 },
					{ lightness: 24 },
					{ visibility: 'on' }
				]
			}
		];
		
		var map_canvas = document.getElementById('map_canvas');
		var map_options = {
			mapTypeControlOptions: {
				mapTypeIds: [ 'Styled']
			},
			center: new google.maps.LatLng(39.74507466327502, -84.19938793182371),
			zoom: 16,
			mapTypeId: 'Styled'
		}
		var map = new google.maps.Map(map_canvas, map_options);
		var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
		map.mapTypes.set('Styled', styledMapType);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	
	
	
</script>

<script>
	function setMapHeight() {
		var map = $('#map_canvas');
		var windowHeight = $(window).height();
		var windowWidth = $(window).width();
		var infoHeight = $('.booking article').height();
		var mapHeight = 0;
	
		
		mapHeight = windowHeight - 75;
		}
		map.css('height', mapHeight);
	}

	$(document).ready(function(){
		setFrameHeight();
		console.log(infoHeight);
	})

	$(window).resize(function(){
		setFrameHeight();
	})
</script>


		<section class="booking clearfix">
			<article class="clearfix">
				<h1>To book an appointment, call, or visit the shop to speak to an artist.  All appointments require a $50 deposit that will later be applied to the price of your scheduled appointment.</h1>
				<table>
					<tr>
						<td><strong>ADDRESS</strong></td>
						<td>1047 BROWN STREET DAYTON, OH 45121</td>
					</tr>
					<tr class="spacer"><td></td></tr>
					<tr>
						<td><strong>STUDIO HOURS</strong></td>
						<td>
							MONDAY - THURSDAY 12PM - 9PM<br />
							FRIDAY - SATURDAY 12PM - 10PM
						</td>
					</tr>
					<tr class="spacer"><td></td></tr>
					<tr>
						<td><strong>CONTACT<br />INFORMATION</strong></td>
						<td>
							+937.222.7880<br />
							BOOKING[AT]CLOAKANDDAGGERTATTOO.COM
						</td>
					</tr>
				</table>	
			</article>
			
			<div id="map_canvas"></div>
			
		</section>
		
	
<?php include "footer.php"; ?>
