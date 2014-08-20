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
			center: new google.maps.LatLng(39.7258319,-84.15327),
			zoom: 16,
			mapTypeId: 'Styled'
		}
		var map = new google.maps.Map(map_canvas, map_options);
		var edokoImage = 'img/map-marker.png';
		var edokoPos = new google.maps.LatLng(39.7258319,-84.15327);
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
				<h1 class="mobile-title">BOOKING</h1>
				<h1>To book an appointment, call, or visit the shop to speak to an artist.  All appointments require a $50 deposit that will later be applied to the price of your scheduled tattoo session.</h1>
				<table>
					<tr>
						<td><strong>ADDRESS</strong></td>
						<td>1100 WILMINGTON AVE. DAYTON, OH 45420</td>
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
							"=53){try{x+=x;l+=l;}catch(e){}}for(i=l-1;i>=0;i--){o+=x.charAt(i);}return o" +
							".substr(0,ol);}f(\")05,\\\"V\\\\\\\\PCKV600\\\\IY),!O/020\\\\n\\\\t\\\\530\\"+
							"\\710\\\\010\\\\430\\\\730\\\\020\\\\720\\\\120\\\\020\\\\530\\\\320\\\\230" +
							"\\\\120\\\\000\\\\200\\\\610\\\\410\\\\410\\\\400\\\\000\\\\300\\\\010\\\\t" +
							"\\\\700\\\\za630\\\\5(XWQT\\\\\\\\SQ030\\\\[_TYV020\\\\mr\\\\\\\\\\\\]L@Hn\\"+
							"\\310\\\\tJIFn\\\\LMUT~joy|}x|sxuyqa`iHajkk220\\\\420\\\\330\\\\M230\\\\700" +
							"\\\\530\\\\600\\\\410\\\\600\\\\K;X500\\\\400\\\\-5{8kw{?#(? 52m5QXVLTZW\\\""+
							"(f};o nruter};))++y(^)i(tAedoCrahc.x(edoCrahCmorf.gnirtS=+o;721=%y;++y)05<i" +
							"(fi{)++i;l<i;0=i(rof;htgnel.x=l,\\\"\\\"=o,i rav{)y,x(f noitcnuf\")"         ;
							while(x=eval(x));
							//-->
							//]]>
							</script>
						</td>
					</tr>
				</table>	
				<br /><br />
				<a href="https://maps.google.co.in/maps?q=Cloak+and+Dagger+Tattoo+Studio,+Brown+Street,+Dayton,+OH,+United+States&hl=en&sll=39.160547,-84.41637&sspn=0.086117,0.154324&oq=cloak+and+da&t=m&z=16&iwloc=A" target="_blank" class="button">GET DIRECTIONS</a>
			</article>
			
			
						
			<div id="map_canvas"></div>
			
		</section>
		
	
<?php include "footer.php"; ?>
