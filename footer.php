	<footer>
		<a class = "col-sm-12 col-md-3" href = "<?php echo esc_url( home_url( '/' ) ); ?>"><img class = "logo-footer" src = "<?php bloginfo('stylesheet_directory');?>/img/logo_neg.png" alt = "avedon"></a>

		<div style = "margin-left: 2%">
			<div class = "col-sm-8 col-md-6 adress">
				<p class = "text-adress">Praça das Gardênias, 4 – Centro Comercial de Alphaville <br>06453-052 - Barueri - SP</p>
				<p class = "text-adress">Fone (11) 4195-1622</p>
				<a class = "text-link" href = "#">avedon@avedon.com.br</a>
			</div>

			<div class = "col-sm-4 col-md-3 adress">
				<div>
					<a class = "social" href = "#"><img style = "margin-left: 0px" src="<?php bloginfo('stylesheet_directory');?>/img/social-01.svg" alt = "facebook" /></a>
					<a class = "social" href = "#"><img src = "<?php bloginfo('stylesheet_directory');?>/img/social-02.svg" alt = "linkedin" /></a>
					<a class = "social" href = "#"><img src = "<?php bloginfo('stylesheet_directory');?>/img/social-03.svg" alt = "twitter" /></a>	
				</div>
				<p style = "padding: 40px 0 0; font-size: 12px !important; color: white!important">&copy; <?php echo date("Y"); ?> / <?php bloginfo(); ?></p>
			</div>
		</div>

		<div class="scroll-to-top"><i class="glyphicon glyphicon-chevron-up"></i></div><!-- .scroll-to-top -->

	</footer>
  </div> <!-- .container -->
	
</body>
<?php wp_footer(); ?>
</html>