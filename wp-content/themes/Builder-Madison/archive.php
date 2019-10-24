<?php

function render_content() {

?>
	<?php if ( have_posts() ) : ?>
		<div class="loop">
			<div class="loop-header">
				<h4 class="loop-title">
					<?php
						the_post();

						if ( is_category() ) { // Category Archive
							$title = sprintf( __( 'Archive for %s', 'it-l10n-Builder-Madison' ), single_cat_title( '', false ) );
						}
						else if ( is_tag() ) { // Tag Archive
							$title = sprintf( __( 'Archive for %s', 'it-l10n-Builder-Madison' ), single_tag_title( '', false ) );
						}
						else if ( is_tax() ) { // Tag Archive
							$title = sprintf( __( 'Archive for %s', 'it-l10n-Builder-Madison' ), builder_get_tax_term_title() );
						}
						else if ( function_exists( 'is_post_type_archive' ) && is_post_type_archive() && function_exists( 'post_type_archive_title' ) ) { // Post Type Archive
							$title = post_type_archive_title( '', false );
						}
						else if ( is_author() ) { // Author Archive
							$title = sprintf( __( 'Author Archive for %s', 'it-l10n-Builder-Madison' ), get_the_author() );
						}
						else if ( is_year() ) { // Year-Specific Archive
							$title = sprintf( __( 'Archive for %s', 'it-l10n-Builder-Madison' ), get_the_time( 'Y' ) );
						}
						else if ( is_month() ) { // Month-Specific Archive
							$title = sprintf( __( 'Archive for %s', 'it-l10n-Builder-Madison' ), get_the_time( 'F Y' ) );
						}
						else if ( is_day() ) { // Day-Specific Archive
							$title = sprintf( __( 'Archive for %s', 'it-l10n-Builder-Madison' ), get_the_date() );
						}
						else if ( is_time() ) { // Time-Specific Archive
							$title = __( 'Time Archive', 'it-l10n-Builder-Madison' );
						}
						else { // Default catchall just in case
							$title = __( 'Archive', 'it-l10n-Builder-Madison' );
						}

						if ( is_paged() )
							printf( __( '%s &ndash; Page %d', 'it-l10n-Builder-Madison' ), $title, get_query_var( 'paged' ) );
						else
							echo $title;

						rewind_posts();
					?>
				</h4>
			</div>

			<div class="loop-content">
				<?php while ( have_posts() ) : // The Loop ?>
					<?php the_post(); ?>

						<?php get_template_part('post-formats/content', get_post_format()); ?>

				<?php endwhile; // end of one post ?>
			</div>

			<div class="loop-footer">
				<!-- Previous/Next page navigation -->
				<div class="loop-utility clearfix">
					<div class="alignleft"><?php previous_posts_link( __( '&laquo; Previous Page', 'it-l10n-Builder-Madison' ) ); ?></div>
					<div class="alignright"><?php next_posts_link( __( 'Next Page &raquo;', 'it-l10n-Builder-Madison' ) ); ?></div>
				</div>
			</div>
		</div>
	<?php else : // do not delete ?>
		<?php do_action( 'builder_template_show_not_found' ); ?>
	<?php endif; // do not delete ?>
<?php

}

add_action( 'builder_layout_engine_render_content', 'render_content' );

do_action( 'builder_layout_engine_render', basename( __FILE__ ) );
