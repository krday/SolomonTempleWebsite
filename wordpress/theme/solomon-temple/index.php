<?php
/**
 * Fallback index — front page uses front-page.php
 */
get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        the_content();
    }
}
get_footer();