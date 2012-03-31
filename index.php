<?php get_header(); ?>

<section id="content-container">
	
	<?php get_template_part('loop', 'post'); ?>
	
	<hr />

	<nav id="page-navigation">

		<ul>
			<li class="previous"><?php previous_posts_link('&laquo; Newer Articles'); ?>&nbsp;</li>
			<li class="archives"><a href="/blog/archives/">Complete Archives</a></li>
			<li class="next">&nbsp;<?php next_posts_link('Older Articles &raquo;');  ?></li>
		</ul>

	</nav>
		
	<br />

</section>

<?php get_footer(); ?>