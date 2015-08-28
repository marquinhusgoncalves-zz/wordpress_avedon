	<div class = "">

	<?php if(have_posts()) : ?>

		 <?php while(have_posts()) : the_post(); ?>

					<?php
					$myposts = get_posts( 'cat=7&showposts=10&year=$current_year&monthnum=$current_month&order=ASC' );

				foreach($myposts as $post) :
					$nextpost++;
					setup_postdata($post);
					$date = get_the_date("F Y");

					if($nextpost>1): ?>
						<?php endif; ?>

				<article class = "clearfix" style = "margin-bottom: 30px">				
					<div class = "col-md-offset-1 col-md-2"><?php the_post_thumbnail(); ?></div>

					<div class = "col-md-8 descricao">	
						<header class = "entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						</header>
						<div class = "entry-content">
							<p><?php the_content(); ?></p>
						</div>
					</div>
				</article>			

				<?php endforeach; wp_reset_postdata(); ?>
			<?php endwhile; ?>
		<?php endif; ?>

		<?php wp_reset_query(); ?>

	</div>