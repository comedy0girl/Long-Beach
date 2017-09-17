<?php get_header(); ?>

<div class="twelve columns site-container">
	<div class="row header-bg"><?php
		    include (TEMPLATEPATH . '/includes/_nav.php'); ?>
	</div>

	<div class="offset-by-one ten columns main-content">
		
		<div class="row offset-by-one ten columns container"><?php 
			query_posts( array( 'paged' => get_query_var('paged') ) ); 
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="four columns the-post"><?php
						if (! $featured = get_the_post_thumbnail()) {
							$featured = get_the_content();
						}
						// extract post thumbail URL
						preg_match('/<img.*(src)="([^"]*)"/i', $featured, $matches);
						$thumb = $matches[2]; ?>
						<?php if (!empty($thumb)) : ?>
					<div class="post-pic"><h2><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h2>
						<img src="<?php echo $thumb; ?>">

					</div>
					
					<p class="tags"><?php the_time('F') ?> <?php the_time('j') ?> <?php the_time('Y')?> / <?php	
						$categories = get_the_category();
							if ( ! empty( $categories ) ) {
							    echo esc_html( $categories[0]->name );   
							} ?>
					</p>
					<p><?php $myExcerpt = wp_trim_words( get_the_content(), 50, '' ) ; 
						echo $myExcerpt ; ?>
					</p>

			 	</div><?php
			 		endif;
					endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
	</div>  
</div>

<?php get_footer(); ?>