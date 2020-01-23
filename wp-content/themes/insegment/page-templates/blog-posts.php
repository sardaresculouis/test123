<?php
/**
 * Template Name: Insegment Blog Posts
 *
 * @package understrap
 */

get_header();

$container   = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero', 'page' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

	<!-- Do the left sidebar check and opens the primary div -->
	<?php get_template_part( 'global-templates/left-sidebar-check', 'page' ); ?>

	<main class="site-main" id="main">

		<?php
		$categories = get_categories( array(
			'orderby' => 'name',
			'order'   => 'ASC'
		) );

		?>
		<div class="categories-wrap">
			<div class="row">
				<div class="categories d-flex flex-wrap">
			<?php
			if($cat == ''){
				echo '<span class="category-item-active"><a href="' . get_post_type_archive_link( 'post' ) . '">'. __("Show All", "insegment_blog") .'</a></span> ';
			} else {
				echo '<span class="category-item"><a href="' . get_post_type_archive_link( 'post' ) . '">'. __("Show All", "insegment_blog") .'</a></span> ';
			}
			?>
			<?php
			foreach( $categories as $category ) {
				$category_link = sprintf(
					'<a href="%1$s" alt="%2$s">%3$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_attr( sprintf( __( 'View all posts in %s', 'insegment_blog' ), $category->name ) ),
					esc_html( $category->name )
				);

				if( $category->cat_ID == $cat  ){
					echo '<span class="category-item-active">' . sprintf( esc_html__( '%s', 'insegment_blog' ), $category_link ) . '</span> ';
				} else {
					echo '<span class="category-item">' . sprintf( esc_html__( '%s', 'insegment_blog' ), $category_link ) . '</span> ';
				}
			}
			?>
		</div>
				<div class="social-links homepage col-lg-2 text-left text-lg-right">
					<?php
					$sociaLinks = get_field('insegment2018_social_links', 'option');
					if( $sociaLinks ){ ?>
						<span class="join-us-text">Join Us!</span>
						<div class='social-links-wrap'>
							<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_blog_rss']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_blog_rss']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_blog_rss']['url']; ?>"><i class="fa fa-rss"></i></a>
							<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_twitter_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_twitter_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_twitter_url']['url']; ?>"><i class="fa fa-twitter"></i></a>
							<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_facebook_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_facebook_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_facebook_url']['url']; ?>"><i class="fa fa-facebook-f"></i></a>
							<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_linkedln_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_linkedln_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_linkedln_url']['url']; ?>"><i class="fa fa-linkedin"></i></a>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
		<?php if ( have_posts() ) : ?>

			<div class="blog-post d-flex flex-wrap">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				get_template_part( 'loop-templates/content', get_post_format() );
				?>

			<?php endwhile; ?>

			</div>

			</div>

		<?php else : ?>

			<?php get_template_part( 'loop-templates/content', 'page' ); ?>

		<?php endif; ?>

	</main><!-- #main -->

	<!-- The pagination component -->
	<?php understrap_pagination(); ?>

	<!-- Do the right sidebar check -->
	<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>


</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
