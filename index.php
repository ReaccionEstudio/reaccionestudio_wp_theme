<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Reaccion Estudio Theme
 * @since Reaccion Estudio Theme
 */

get_header(); ?>

	<div class="blogpost-area">
		<div class="container">
			<div class="row">

				<?php if ( have_posts() ) : ?>

					<?php /* The loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part( 'content', get_post_format() ); ?>
					<?php endwhile; ?>

				<?php else : ?>
					<?php get_template_part( 'content', 'none' ); ?>
				<?php endif; ?>

			</div>

			<?php twentythirteen_paging_nav(); ?>
			
		</div>
	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>