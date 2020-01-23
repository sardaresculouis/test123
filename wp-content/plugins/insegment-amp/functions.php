<?php
// Loading the Components
//Search
add_amp_theme_support('AMP-search');
//Logo
add_amp_theme_support('AMP-logo');
//Social Icons
add_amp_theme_support('AMP-social-icons');
//Menu
add_amp_theme_support('AMP-menu');
//Call Now
add_amp_theme_support('AMP-call-now');
//Sidebar
add_amp_theme_support('AMP-sidebar');
// Featured Image
add_amp_theme_support('AMP-featured-image');
//Author box
add_amp_theme_support('AMP-author-box');
//Loop
add_amp_theme_support('AMP-loop');
// Categories and Tags list
add_amp_theme_support('AMP-categories-tags');
// Comments
add_amp_theme_support('AMP-comments');
//Post Navigation
add_amp_theme_support('AMP-post-navigation');
// Related Posts
add_amp_theme_support('AMP-related-posts');
// Post Pagination
add_amp_theme_support('AMP-post-pagination');

add_image_size( 'blog-post-thumbnail', 360, 200, true );

function insegment_category_filter(){
    $categories = get_categories( array(
        'orderby' => 'name',
        'order'   => 'ASC'
    ) );

    $category_select = '<div class="categories-navigation">';
    $category_select .= '<ul class="categories-container">';
    $cat = get_queried_object();

    if($cat == ''){
        $category_select .= '<li class="category-item-active"><a>'. __("Show All", "insegment_blog") .'</a></li>';
    } else {
        $category_select .= '<li class="category-item"><a href="' . get_home_url() . '/amp">'. __("Show All", "insegment_blog") .'</a></li>';
    }

    foreach( $categories as $category ) {
        $category_link = sprintf(
            '<a href="%s/amp">%s</a>',
            esc_url( get_category_link( $category->term_id ) ),
            esc_html( $category->name )
        );

        if( isset($cat->term_id) && $category->cat_ID == $cat->term_id  ){
            $category_select .= '<li class="category-item-active">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li>';
        } else {
            $category_select .= '<li class="category-item">' . sprintf( esc_html__( '%s', 'textdomain' ), $category_link ) . '</li>';
        }
    }

    $category_select .= '</ul></div><amp-addthis  width="320" height="92" data-pub-id="ra-5b146f3d7c6bcc64" data-widget-id="ci5p" style="display: none;"></amp-addthis>';

    echo $category_select;
}
