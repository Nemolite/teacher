<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

			get_template_part( 'template-parts/content', get_post_type() );
/*
			the_post_navigation();
*/
			// If comments are open or we have at least one comment, load up the comment template.
			
			/*
			
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
			*/

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
/*
get_sidebar();
*/
get_footer();
