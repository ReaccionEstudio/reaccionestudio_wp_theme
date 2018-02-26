<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
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