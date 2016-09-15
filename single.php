<?php get_header() ?>
<?php the_post() ?>

<section id="content-container">

	<article id="main-post">

		<h2 id="post-<?php the_ID() ?>"><a href="/blog/">Blog</a> / <?php the_title() ?></h2>
		<p class="date">
			Posted: <time datetime="<?php echo esc_attr( get_the_date( 'c' ) ) ?>"><?php echo esc_html( get_the_date( 'F jS, Y \a\t g:ia' ) ) ?></time>

			<?php if ( get_the_modified_date() !== get_the_date() ) : ?>
				<br />
				Updated: <time datetime="<?php echo esc_attr( the_modified_date( 'c' ) ) ?>"><?php echo esc_html( the_modified_date( 'F jS, Y \a\t g:ia' ) ) ?></time>
			<?php endif ?>
		</p>
		<?php the_content( __( '(more...)' ) ) ?>

		<?php get_template_part( 'post', 'series_nav' ) ?>

		<?php if ( function_exists( 'related_posts' ) ) : ?>
			<section class="related">
				<h4>Related Articles:</h4>
				<ul>
					<?php related_posts() ?>
				</ul>
			</section>
		<?php endif ?>

		<p class="meta">
			Posted in: <?php the_category( ',' ) ?>
			<?php wp_link_pages() ?>
			| <?php comments_popup_link( __( 'Comments (0)' ), __( 'Comments (1)' ), __( 'Comments (%)' ) ) ?>

			<?php edit_post_link( 'Edit this', '[', ']' ) ?>
		</p>

		<!--
		<?php trackback_rdf() ?>
		-->

		<?php comments_template() ?>

		<nav id="page-navigation">
			<?php posts_nav_link( '&nbsp;&nbsp;', __( '&laquo; Previous' ), __( 'Next &raquo;' ) ) ?>
		</nav>

	</article>

</section>

<?php get_footer() ?>
