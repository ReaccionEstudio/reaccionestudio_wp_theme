<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<div id="post-<?php the_ID(); ?>" style="display: block;" class="col-lg-4 blogs-load">
	
	<div class="single-blog-post">
		
		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
		<div class="blog-img">
			<?php the_post_thumbnail(); ?>
		</div>
		<?php endif; ?>

		<div class="blog-meta">
			<?php if ( is_single() ) : ?>
			<h1><?php the_title(); ?></h1>
			<?php else : ?>
			<h1>
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h1>
			<?php endif; // is_single() ?>

			<?php twentythirteen_entry_meta(); ?>
			<?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>

		</div>

		<div class="description">
		<?php if ( is_single() ) : ?>
			
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>

		<?php else : ?>

			<?php the_excerpt(); ?>

		<?php endif; // is_single() ?>
		</div>

		<div class="blog-comments">
			
			<?php if ( comments_open() && ! is_single() ) : ?>
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			<?php endif; // comments_open() ?>
			
		</div>
	</div>

</div>

<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
	<?php get_template_part( 'author-bio' ); ?>
<?php endif; ?>
