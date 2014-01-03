<?php include "header.php"; ?>
		<section class="artists clearfix">
			<h1>ARTISTS</h1>
			<article class="odd">
				<a href="http://instagram.com/britton_cloakanddagger" target="_blank">
					<img src="img/britton.jpg" alt="Tattoo Artist Britton Asbury - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Britton Asbury</h1>
				</a>
			</article>
			<article class="even">
				<a href="http://instagram.com/everynamestaken" target="_blank">
					<img src="img/jeremy.jpg" alt="Tattoo Artist Jeremy McGrady - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Jeremy McGrady</h1>
				</a>
			</article>
			<article class="odd">
				<a href="http://instagram.com/whiskeyadam" target="_blank">
					<img src="img/adam.jpg" alt="Tattoo Artist Adam Brockman - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Adam Brockman</h1>
				</a>
			</article>
			<article class="even">
				<a href="http://instagram.com/bangorangdayton" target="_blank">
					<img src="img/jess.jpg" alt="Tattoo Artist Jess Oram - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Jess Oram</h1>
				</a>
			</article>
			<article class="odd">
				<a href="http://instagram.com/profes_plum" target="_blank">
					<img src="img/steve.jpg" alt="Tattoo Artist Steve Ratcliffe - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Steve Ratcliffe</h1>
				</a>
			</article>
			<article class="even">
				<a href="http://instagram.com/robwilliams_cloakanddagger" target="_blank">
					<img src="img/rob.jpg" alt="Tattoo Artist Rob Williams - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Rob Williams</h1>
				</a>
			</article>
		</section>
		
		<script>
		$(window).ready(function() {
		     $(".artists article").each(function(i) {
		           $(this).delay(200*i).fadeIn();
		      });
		  });
		</script>
	
<?php include "footer.php"; ?>
	
