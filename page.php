<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 */

if ( have_posts() ) :

	while ( have_posts() ) : the_post();

		do_action( 'cherry_page_before' );

		do_action( 'cherry_page' );

		do_action( 'cherry_page_after' );

		do_action( 'cherry_get_comments' );

	endwhile;

endif; ?>