<?php include "header.php"; ?>
		<div class="reveal" style="opacity: 1; display: block; height: 100%; width: 100%; background-color: #000; z-index: 999; position: absolute; top: 0; left: 0;"></div>
		<section class="home">
			<h1>
				CUSTOM DESIGNED<span class="slash"></span>
				<br />SKILLFULLY CRAFTED
				<span class="brand futura-med">CLOAK AND DAGGER</span>
				<span class="studio futura-med">TATTOO STUDIO</span>
			</h1>
		</section>
		<script>
			$(document).ready(function() {
				$('.reveal').animate({
				    opacity: 0
				  }, 1500, function() {
					$('.reveal').hide();
				    $('.home h1').flexVerticalCenter();
					setTimeout(function(){ $('.home h1').addClass('show') }, 500);
				  });
				
			});
		</script>		
<?php include "footer.php"; ?>
        