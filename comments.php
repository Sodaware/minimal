<a name="comments"></a>

<h3>
	<?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments')); ?> 
</h3>

<?php if ( $comments ) : ?>	
	<?php $commentCount = 0; ?>
	
	<?php foreach ($comments as $comment) : ?>
	<?php $commentCount++; ?>
		<article id="comment-<?php comment_ID() ?>" class="<?php if (function_exists('author_highlight')) { author_highlight($comment); } ?>">

			<header>
				<strong>#<a href="#comment-<?php comment_ID(); ?>"><?php echo $commentCount; ?></a></strong>
				|
				<?php comment_author_link() ?> | 
				<?php comment_date() ?> @ <?php comment_time() ?> 
				<?php edit_comment_link(__("Edit This"), ' | '); ?>
			</header>
			
			<?php comment_text() ?>
			
		</article>

	<?php endforeach; ?>

<?php else : // If there are no comments yet ?>
	<p><?php _e('No comments have been posted yet. Why not be the first?'); ?></p>
<?php endif; ?>


<?php if ( comments_open() ) : ?>
<br />

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>
<?php else : ?>

<a name="response"></a>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">

	<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
	
	<h3 id="postcomment"><?php _e('Leave a comment'); ?></h3>

	<?php if ($user_ID) { ?>
		<p>
			Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="<?php _e('Log out of this account') ?>">Logout &raquo;</a>
		</p>
	<?php } else { ?>
	
<div class="user_info">

   <p>	
	    <label for="author"><small>Name <?php if ($req) _e('(required)'); ?></small></label>
	    <input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
	</p>
   
   <p>
       <label for="email"><small>Email Address <?php if ($req) _e('(required)'); ?></small></label>
	    <input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
   </p>
   
   <p>
       <label for="url"><small>Website</small></label>
	    <input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
   </p>
	
</div>

	<?php } ?>
	
	<p><small><strong>Tags Allowed:</strong> a, abbr, acronym, b, blockquote, code, em, i, strike, strong </small></p>
	<textarea name="comment" class="comment_box" cols="58" rows="11" tabindex="4"></textarea>
	
	<?php if (function_exists('show_subscription_checkbox')) { ?>
		<?php show_subscription_checkbox(); ?>
	<?php } ?>
	
	<p>
		<input name="submit" type="submit" id="submit" tabindex="5" value="Add Comment" class="button" />
	</p>

	<?php do_action('comment_form', $post->ID); ?>

</form>

<?php endif; // If registration required and not logged in ?>

<?php else : // Comments are closed ?>
<p><?php _e('Sorry, the comment form is closed at this time.'); ?></p>
<?php endif; ?>

<p class="more_posts">
	<?php previous_post('<strong>Previous Post: </strong>%', '', 'yes'); ?><br />
	<?php next_post('<strong>Next Post: </strong>%', '', 'yes'); ?>
</p>
