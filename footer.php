<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rockcapital
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="contacts-outer">
			<div class="contacts container">
				<div class="item">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/theme/address.png">
					</div>
					<div class="text">
						<p>Av. Engenheiro Duarte Pacheco, Sala G</p>
						<p>Torre 2 - 17 Piso • Lisboa</p>
					</div>
				</div>
				<div class="item">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/theme/hours.png">
					</div>
					<div class="text">
						<p>Mon - Fri: 8am - 6pm</p>
						<p>Sat-Sun:  Closed</p>
					</div>
				</div>
				<div class="item">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/theme/phone.png">
					</div>
					<div class="text">
						<a href="tel:+351 212 386 5575"><p>+351 21 137 2000</p></a>
					</div>
				</div>
				<div class="item">
					<div class="icon">
						<img src="<?php echo get_template_directory_uri(); ?>/img/theme/email.png">
					</div>
					<div class="text">
					<a href="mailto:info@rockcapital.pt"><p>info@rockcapital.pt</p></a>
					<a href="mailto:info@lince-capital.com"><p>info@lince-capital.com</p></a>
					</div>
				</div>
				
			</div>
		</div>
		<div class="footer-outer">
			<div class="footer-inner container">
				<div class="info">
					<div class="info-col">

					<img src="<?php echo get_template_directory_uri(); ?>/img/theme/ROCK-LOGO-FOOTER.png">


					<p>CMVM Registration 1614 | <a target="_blank" href="https://rockcapital.pt/FIN_ROCK_CAPITAL_ENG_4.pdf">Download SI Sheet</a></p>
					<p>ISIN Cat A: PTLCNMIM0000</p>
					<p>ISIN Cat B: PTLCNNIM0009</p>

					</div>
					<div class="info-col">

					<a href="https://www.lince-capital.com/en/"><img src="<?php echo get_template_directory_uri(); ?>/img/theme/LINCE-LOGO-FOOTER.png"></a>


					<p>Avenida Duarte Pacheco, Torre II - 17.° Sala G</p>
					<p>Andar, Sala G, 1070-102 Lisboa</p>

					</div>
				</div>
				<hr>
				<div class="menu-and-copy">
					<div class="menu">
						<ul>
						<?php
					// check if the repeater field has rows of data

					$i = 0;
					if( have_rows('links_menu', 'options') ):
						// loop through the rows of data
						while ( have_rows('links_menu', 'options') ) : the_row();
						
							if ($i > 0) {
								echo '<li class="separator">|</li>';
							}
							$i++;
							?>
								<li><a href="<?php the_sub_field('url');?>"><?php the_sub_field('text');?></a></li>
							<?php
							
						endwhile;
					endif;?>

						</ul>
					</div>
					<div class="copyright"><p> <strong>Rock Capital Investements</strong> - All Rights Reserved</p></div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>

function SetCookie(c_name,value,expiredays)
	{
		var exdate=new Date()
		exdate.setDate(exdate.getDate()+expiredays)
		document.cookie=c_name+ "=" +escape(value)+
		((expiredays==null) ? "" : ";expires="+exdate.toGMTString())
	}


	(function() {
  "use strict";

    document.querySelector("#field_70Referral").addEventListener("change", function() {
		console.log('clicked');

		document.getElementsByClassName("_field71")[0].style.display = "block";
		document.getElementsByClassName("_field72")[0].style.display = "block";

		  
		
	});
	
	document.querySelector("field_70Wealth Manager").addEventListener("change", function() {
		console.log('clicked');

		document.getElementsByClassName("_field71")[0].style.display = "none";
		document.getElementsByClassName("_field72")[0].style.display = "none";

		  
		
	});
	
	document.querySelector("field_70Google").addEventListener("change", function() {
		console.log('clicked');

		document.getElementsByClassName("_field71")[0].style.display = "none";
		document.getElementsByClassName("_field72")[0].style.display = "none";

		  
		
    });

   

})();


</script>
</body>
</html>
