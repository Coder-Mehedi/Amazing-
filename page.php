<?php
get_header();
?>

	<div id="page-primary" class="content-area">
		<div class="<?php 
			// - make sure the method exists
			// - check the page builder is be using
			if( function_exists( 'kc_is_using' ) && kc_is_using() ) :
				echo 'container-full';
			else :
				echo 'container';
			endif;
		?>">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
// get_footer();
