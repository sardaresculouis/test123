<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<div class="header-image-wrap">
		<?php if ( has_post_thumbnail() ) {
		echo get_the_post_thumbnail( $post->ID, 'blog-post-header' );
		} else { ?>
		<img src="<?php bloginfo('template_directory'); ?>/img/logo_inSegment.jpg" alt="<?php the_title(); ?>" />
		<?php } ?>
	</div>

	<header class="entry-header col-lg-10 offset-lg-1">

		<div class="entry-meta">

			<?php understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<?php
			// understrap_entry_footer();
			if ( 'post' === get_post_type() ) {
				$categories_list = get_the_category_list( '<span class="blog-post-category-divider">|</span>' );
				if ( $categories_list && understrap_categorized_blog() ) {
					printf( '<span class="cat-links">' . esc_html__( '%1$s', 'understrap' ) . '</span>', $categories_list ); // WPCS: XSS OK.
				}
			}
		?>

	</header><!-- .entry-header -->

	<div class="entry-content col-lg-10 offset-lg-1">
		<div class="row">
			<div class="article-content col-md-10">
				<?php the_content(); ?>
			</div>
			<div class="share-buttons col-md-2 text-center">
				<?php echo do_shortcode('[addthis tool="addthis_inline_share_toolbox"]'); ?>
			</div>
		</div>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

</article><!-- #post-## -->
