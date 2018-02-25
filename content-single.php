<div class="single-post-area custom-margin-single-post-area">
		
	<div class="container">
		
		<div class="row justify-content-center">
			
			<div class="col-lg-10">

				<div class="text-center">
					<?php the_post_thumbnail("custom-thumb"); ?>
				</div>

				<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
				<div class="row">
					<h1><?php the_title(); ?><?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<br /><span style="font-size: 14px" class="edit-link">', '</span>' ); ?></h1>
				</div>
				<?php endif; ?>

				<div class="data-section">
					
					<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>

				</div>

			</div>

		</div>
		
	</div>
	
</div>