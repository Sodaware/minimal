<!DOCTYPE html>
<html>

<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo( 'rss2_url' ); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo( 'rss_url' ); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo( 'atom_url' ); ?>" />

	<!--[if IE]>
		<script src="<?php bloginfo( 'stylesheet_directory' ); ?>/js/modernizr.js"></script>
	<![endif]-->

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<?php wp_get_archives( 'type=monthly&format=link' ); ?>

	<?php wp_head(); ?>
</head>

<body>

<p class="to_content"><a href="#content-container">&darr; Skip to Content</a></p>

<?php get_sidebar(); ?>
