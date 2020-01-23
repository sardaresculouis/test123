<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

?>

<?php
	/*

	if(get_user_browser() == "ie"){
		?> <article <?php post_class(''); ?> id="post-<?php the_ID(); ?>"> <?php
	} else {
		?> <article <?php post_class('d-flex'); ?> id="post-<?php the_ID(); ?>"> <?php
	}
	*/
?>

<article <?php post_class('d-flex col-md-6 col-lg-4'); ?> id="post-<?php the_ID(); ?>">

	<?php
		// set_post_thumbnail_size( 360, 200, array( 'center', 'center'). true );
		// add_image_size( 'blog-post-thumbnail', 320, 200 );
		if ( has_post_thumbnail() ) {
		echo get_the_post_thumbnail( $post->ID, 'blog-post-thumbnail' );
		} else { ?>
		<img src="<?php bloginfo('template_directory'); ?>/img/logo_inSegment_360x200.jpg" alt="<?php the_title(); ?>" />
		<?php }
	?>

	<header class="entry-header">

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->

		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
		'</a></h2>' ); ?>

		<?php
			// understrap_entry_footer();
			if ( 'post' === get_post_type() ) {
				$categories_list = get_the_category_list( '<span class="blog-post-category-divider">|</span>' );
				if ( $categories_list && understrap_categorized_blog() ) {
					printf( '<span class="cat-links">' . esc_html__( '%1$s', 'understrap' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				}
			}
		?>

		<?php
			$excerpt = strip_shortcodes(strip_tags($post->post_content));
			$excerpt_length = 200;
			if (strlen($excerpt) > $excerpt_length) {
			$excerpt = substr($excerpt, 0, $excerpt_length);
			$excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
			}
		?>
		<p class="excerpt"><?php echo $excerpt ?></p>

	</header><!-- .entry-header -->

	<div class="entry-content d-flex mt-auto">
		<?php
		// the_excerpt();
		?>
		<a class="blog-post-read-more" href="<?php echo get_post_permalink($post->ID); ?>">Read this post</a>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
