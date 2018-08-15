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
				<a href="https://www.instagram.com/logan.ipt/" target="_blank">
					<img src="img/logan.jpg" alt="Tattoo Artist Logan Delong - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Logan Delong</h1>
				</a>
			</article>
			<article class="odd">
				<a href="https://instagram.com/chi_tattoos" target="_blank">
					<img src="img/chi.jpg" alt="Tattoo Artist Chi - Cloak and Dagger Tattoo, Dayton OH" />
					<h1>Chi</h1>
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
	
