<?php
get_header();
while ( have_posts() ) {
	the_post();
	get_template_part( 'partials/content' );
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	};
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'wlc' ) . '</span> ' . '<span class="screen-reader-text">' . __( 'Next post:', 'wlc' ) . '</span> ' . '<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'wlc' ) . '</span> ' . '<span class="screen-reader-text">' . __( 'Previous post:', 'wlc' ) . '</span> ' . '<span class="post-title">%title</span>',
	) );
};
get_footer();
