<?php include "header.php"; ?>
		<section class="artists clearfix">
			<article class="odd">
				<a href="http://instagram.com/brittonhatesyou" target="_blank">
					<img src="img/britton.jpg" alt="Britton Asbury - Tattoo Artist Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Britton Asbury</h1>
				</a>
			</article>
			<article class="even">
				<a href="http://instagram.com/everynamestaken" target="_blank">
					<img src="img/jeremy.jpg" alt="Jeremy McGrady - Tattoo Artist Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Jeremy McGrady</h1>
				</a>
			</article>
			<article class="odd">
				<a href="http://instagram.com/whiskeyadam" target="_blank">
					<img src="img/adam.jpg" alt="Adam Brockman - Tattoo Artist Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Adam Brockman</h1>
				</a>
			</article>
			<article class="even">
				<a href="http://instagram.com/bangorangdayton" target="_blank">
					<img src="img/jess.jpg" alt="Jess Oram - Tattoo Artist Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Jess Oram</h1>
				</a>
			</article>
			<article class="odd">
				<a href="http://instagram.com/profes_plum" target="_blank">
					<img src="img/steve.jpg" alt="Steve Ratcliffe - Tattoo Artist Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Steve Ratcliffe</h1>
				</a>
			</article>
			<article class="even">
				<a href="http://instagram.com/robwilliams_cloakanddagger" target="_blank">
					<img src="img/rob.jpg" alt="Rob Williams - Tattoo Artist Cloak and Dagger Tattoo, Dayton OH" />
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
	
