<footer id="footer-container">

	<p id="copyright-information">
		Copyright &copy; <?php echo esc_html( date( 'Y' ) ) ?> <?php bloginfo( 'name' ) ?>. All Rights Reserved.
	</p>

	<?php wp_nav_menu( array(
		'theme_location'  => 'footer_links',
		'menu'            => 'footer_links',
		'container'       => '',
		'container_class' => '',
		'container_id'    => '',
		'menu_class'      => '',
		'menu_id'         => '',
		'echo'            => true,
		'fallback_cb'     => 'wp_page_menu',
		'before'          => '',
		'after'           => '',
		'link_before'     => '',
		'link_after'      => '',
		'items_wrap'      => '<ul id="footer-navigation" class="%2$s">%3$s</ul>',
		'depth'           => 0,
	) )	?>
	
</footer>

<?php wp_footer() ?>

</body>
</html>
