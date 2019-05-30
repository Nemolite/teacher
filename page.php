<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package teacher
 */

get_header();
?>

<!-- левый сайтбар -->
<?php get_sidebar( 'left' ); ?>
<!-- завершеие левого сайтбара-->

<div class="news">
<img src="<?php echo bloginfo('template_url'); ?>/img/22_tl.png">
<div class="news1">


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
</div>
</div>		
		
<!-- правый сайтбар с банерами -->
<?php 
get_sidebar();
?>
<!-- завершение правого сайтбара с банерами-->


<?php

get_footer();