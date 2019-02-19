<?php

add_theme_support( 'post-thumbnails' );
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

$number = 0;

function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

function custom_excerpt_length( $length ) {
    return 340;
}

add_image_size('home', 99999, 99999, false);
add_image_size('largest', 800, 600, true);
add_image_size('landscape', 500, 300, true);

?>