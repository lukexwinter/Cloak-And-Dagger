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
			center: new google.maps.LatLng(39.743973,-84.182857),
			zoom: 16,
			mapTypeId: 'Styled'
		}
		var map = new google.maps.Map(map_canvas, map_options);
		var edokoImage = 'img/map-marker.png';
		var edokoPos = new google.maps.LatLng(39.743973,-84.182857);
		var edokoMarker = new google.maps.Marker({position: edokoPos, map: map, icon: edokoImage, content: 'Edoko Sush & Robata' });
		
		var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
		map.mapTypes.set('Styled', styledMapType);
	}
	google.maps.event.addDomListener(window, 'load', initialize);
	
	
	
</script>


<script>
	function setMapHeight() {
		var cdMap = $('#map_canvas');
		var infoHeight = $('.booking article').height();
		var infoOffset = $('.booking article').offset();
		var windowHeight = $(window).height();
		infoOffset = infoOffset.top;
	
		var mapHeight = (windowHeight - (infoHeight+infoOffset) - 85) ;
		
		cdMap.css('height', mapHeight);
	}

	$(document).ready(function(){
		setMapHeight();
	})

	$(window).resize(function(){
		setMapHeight();
	})
</script>
<script>
$(document).ready(function() {
     $(".booking article, #map_canvas").animate({
	    opacity: 1
	  }, 1000, function() {
	    // Animation complete.
	  });
  });
</script>


		<section class="booking clearfix">
			<article class="clearfix">
				<h1>To book an appointment, call, or visit the shop to speak to an artist.  All appointments require a $50 deposit that will later be applied to the price of your scheduled tattoo session.</h1>
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
						<td class="contact" style="padding-right: 30px;"><strong>CONTACT <br />INFORMATION</strong></td>
						<td>
							+937.222.7880<br />
							<script type="text/javascript">
							//<![CDATA[
							<!--
							var x="function f(x){var i,o=\"\",ol=x.length,l=ol;while(x.charCodeAt(l/13)!" +
							"=118){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return " +
							"o.substr(0,ol);}f(\")87,\\\"sw}lf}#n|rq~220\\\\wsxupvz{gfpd}kjkjnmffmdkoa73" +
							"0\\\\200\\\\Crt}v771\\\\;D*efu771\\\\q12Scbo%f`ijaEkwv`t410\\\\030\\\\330\\" +
							"\\430\\\\330\\\\530\\\\430\\\\130\\\\720\\\\630\\\\520\\\\430\\\\630\\\\220" +
							"\\\\J000\\\\230\\\\100\\\\500\\\\n\\\\700\\\\K4Z000\\\\000\\\\620\\\\310\\\\"+
							"B000\\\\\\\\\\\\}v30>.0* x!:6?$3 *\\\"(f};o nruter};))++y(^)i(tAedoCrahc.x(" +
							"edoCrahCmorf.gnirtS=+o;721=%y{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{" +
							")y,x(f noitcnuf\")"                                                          ;
							while(x=eval(x));
							//-->
							//]]>
							</script>
						</td>
					</tr>
				</table>	
				<br /><br />
				<a href="#" class="button">GET DIRECTIONS</a>
			</article>
			
			
						
			<div id="map_canvas"></div>
			
		</section>
		
	
<?php include "footer.php"; ?>
