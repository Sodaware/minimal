<?php get_header(); ?>
<?php the_post(); ?>

<section id="content-container">
	
	<article id="main-post">

		<h2 id="post-<?php the_ID(); ?>"><a href="/blog/">Blog</a> / <?php the_title(); ?></h2>

		<?php the_content(__('(more...)')); ?>

		<?php edit_post_link('Edit this', '[', ']'); ?>

		<!--
			<?php trackback_rdf(); ?>
		-->

		<nav id="page-navigation">
			<?php posts_nav_link('&nbsp;&nbsp;', __('&laquo; Previous'), __('Next &raquo;')); ?>
		</nav>

	</article>

</section>

<?php get_footer(); ?>
