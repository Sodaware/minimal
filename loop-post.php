<?php while ( have_posts() ) { the_post(); ?>
		
	<article>
	
		<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<p class="date">
			Posted: <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date('F jS, Y \a\t g:ia'); ?></time>

			<?php if (get_the_modified_date() != get_the_date()) { ?>

				<br />
				
				Updated: <time datetime="<?php echo the_modified_date('c'); ?>"><?php echo the_modified_date('F jS, Y \a\t g:ia'); ?></time>
			<?php } ?>
		</p>
		
		<?php the_content(__('(more...)')); ?>

		<?php get_template_part('post', 'series-nav'); ?>
		
		<?php if (function_exists('related_posts')) { ?>
			<section class="related">
				<h4>Related Articles:</h4>
				<ul>
					<?php related_posts(); ?>
				</ul>
			</section>
		<?php } ?>
	
		<p class="meta">
			<?php _e("Posted in:"); ?> <?php the_category(',') ?> 
			<?php wp_link_pages(); ?>
			| <?php comments_popup_link(__('Comments (0)'), __('Comments (1)'), __('Comments (%)')); ?>
				
			<?php edit_post_link('Edit this', '[', ']'); ?>
		</p>
		
	</article>

<?php } ?>