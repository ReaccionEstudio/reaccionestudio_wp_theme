<div class="single-post-area custom-margin-single-post-area">

	<div class="container">
		
		<?php 

			$mainContentClasses = 'col-lg-8 col-xs-10';

			if ( wp_is_mobile() ) { 

				$mainContentClasses = 'col-lg-10 col-10';

		?>

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

		<?php } ?>

		<article class="row justify-content-center">
			
			<div class="<?= $mainContentClasses ?>">

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

		<?php if ( ! wp_is_mobile() ) { ?>

			<div class="col-lg-4 d-none d-sm-block">
				
				<div id="right_anun" class="sticky">

					<!-- reaccion-articulo-right -->
					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-7890141528894816"
					     data-ad-slot="5979476108"
					     data-ad-format="auto"
					     data-full-width-responsive="true"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>

					<br />

					<ins class="adsbygoogle"
					     style="display:block"
					     data-ad-client="ca-pub-7890141528894816"
					     data-ad-slot="4586503381"
					     data-ad-format="auto"
					     data-full-width-responsive="true"></ins>
					<script>
					     (adsbygoogle = window.adsbygoogle || []).push({});
					</script>

				</div>

			</div>

		<?php } ?>

		</article> 
		
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

<script type="text-javascript">

	

</script>