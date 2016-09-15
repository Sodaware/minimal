<?php $series = get_post_meta( $post->ID, 'series_name', true ); ?>

<?php if ( $series && function_exists( 'series_table_of_contents' ) ) : ?>
	
	<section class="series">
		
		<p>
			This article is part of the <strong><?php esc_html( $series ) ?></strong>
			series.
		</p>
		
		<nav>
			<?php series_table_of_contents( $series ) ?>
		</nav>
		
		<p class="more_posts">
			<?php previous_in_series( '<strong>Previous:</strong> %link', '%title' ) ?>
			<br />
			<?php next_in_series( '<strong>Next:</strong> %link', '%title' ) ?>
		</p>
		
	</section>
	
<?php endif ?>
