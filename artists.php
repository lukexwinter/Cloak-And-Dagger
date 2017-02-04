<?php include "header.php"; ?>
		<section class="artists clearfix">
			<h1>ARTISTS</h1>
			<article class="odd">
				<a href="https://instagram.com/brittonhatesyou" target="_blank">
					<img src="img/britton.jpg" alt="Tattoo Artist Britton Asbury - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Britton Asbury</h1>
				</a>
			</article>
			<article class="even">
				<a href="https://www.instagram.com/tattoosbyatom/" target="_blank">
					<img src="img/atom.jpg" alt="Tattoo Artist Atom Aker - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Atom Aker</h1>
				</a>
			</article>
			<article class="odd">
				<a href="https://instagram.com/profes_plum" target="_blank">
					<img src="img/steve.jpg" alt="Tattoo Artist Steve Ratcliffe - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Steve Ratcliffe</h1>
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
	
