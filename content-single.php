<div class="single-post-area custom-margin-single-post-area">
		
	<div class="container google-horizontal-top-ad">

		<!-- blog reaccionestudio horizontal -->
		<ins class="adsbygoogle"
		     style="display:block"
		     data-ad-client="ca-pub-7890141528894816"
		     data-ad-slot="6590794488"
		     data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
		<!-- fin blog reaccionestudio horizontal -->

	</div>

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

				<div class="row">
					<div class="data-section">
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
					</div>
				</div>

			</div>

		</div>
		
		<div class="google-adsense-entry-footer-content">
			<ins class="adsbygoogle"
			     style="display:block"
			     data-ad-format="autorelaxed"
			     data-ad-client="ca-pub-7890141528894816"
			     data-ad-slot="2592538166"></ins>
			<script>
			     (adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		</div>

	</div>
	
</div>