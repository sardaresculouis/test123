<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_type' );
?>


<div class="wrapper" id="author-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				<header class="page-header author-header">

					<?php
					$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug',
						$author_name ) : get_userdata( intval( $author ) );
					?>

					<h3><?php esc_html_e( 'Author: ', 'understrap' ); ?><span><?php echo esc_html( $curauth->display_name ); ?></span></h3>
					<div class="media">
					  <div class="media-left mt-2">
							<?php if ( ! empty( $curauth->ID ) ) : ?>
								<?php echo get_avatar( $curauth->ID ); ?>
							<?php endif; ?>
					  </div>
					  <div class="media-body">
							<?php if ( ! empty( $curauth->user_description ) ) : ?>
								<p class="pl-2"><?php echo esc_html( $curauth->user_description ); ?></p>
							<?php endif; ?>
					  </div>
					</div>
				</header><!-- .page-header -->

					<!-- The Loop -->
					<div class="blog-post d-flex flex-wrap">
					<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<article <?php post_class('d-flex col-md-6 col-lg-4'); ?> id="post-<?php the_ID(); ?>">

								<?php
									// set_post_thumbnail_size( 360, 200, array( 'center', 'center'). true );
									// add_image_size( 'blog-post-thumbnail', 320, 200 );
									echo get_the_post_thumbnail( $post->ID, 'blog-post-thumbnail' );
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
										$excerpt = strip_tags($post->post_content);
										$excerpt_length = 200;
										if (strlen($excerpt) > $excerpt_length) {
										$excerpt = substr($excerpt, 0, $excerpt_length);
										$excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
										// $excerpt .= '...';
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

						<?php endwhile; ?>

					<?php else : ?>

						<?php get_template_part( 'loop-templates/content', 'none' ); ?>

					<?php endif; ?>
					<!-- End Loop -->
				</div>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

		</div><!-- #primary -->

		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div> <!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
