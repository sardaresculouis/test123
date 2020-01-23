<?php amp_header(); ?>

<div class="category-filter">
</div>

<?php
global $post, $redux_builder_amp;
$post_author = get_userdata($post->post_author);
$avatar = true; //To show author Avater
$avatar_size = 80;
$author_description = false;
$class = $author_prefix = $author_wrapper_class = '';
$show_date = false;
$show_time = false;
$author_name = $post_author->display_name;
?>

<div class="amp-author loop-wrapper">
    <?php if ( $avatar ) {
$author_avatar_url = get_avatar_url( $post_author->ID, array( 'size' => $avatar_size ) );
        ?>
    <div class="amp-author-image <?php echo $author_image_wrapper; ?>">
        <amp-img data-block-on-consent src="<?php echo esc_url($author_avatar_url); ?>" width="<?php echo $avatar_size; ?>" height="<?php echo $avatar_size; ?>" layout="fixed"></amp-img>
    </div>
    <?php } ?>
    <?php echo '<div class="author-details '. $author_wrapper_class .'">';
        echo '<h3 class="author-name">' . $author_prefix . esc_html( $author_name ) . '</h3>';
        echo '<p>'. the_author_meta('description') . '</p>';

    //to show date and time
    if ( $show_date || $show_time ) {
     echo '<span class="posted-time"> ';
            if ( $show_date ) {
               echo esc_html( get_the_date() ) . ' ';
            }
            if ( $show_time ) {
                echo esc_html( get_the_time());
            }
     echo '</span>';
    }
    if ( $author_description ) {
      echo "<p>".$post_author->description."</p>";
    } ?>
    </div>
</div>

<?php while(amp_loop('start')): ?>
    <div class="loop-container">
      <?php if ( ampforwp_has_post_thumbnail() ) { ?>
        <?php $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'large', 'responsive'=> true); ?>
        <?php amp_loop_image($args); ?>
      <?php } else { ?>
        <div class="loop-img image-container">
          <a href="<?php echo ampforwp_url_controller( get_permalink() ); ?>">
            <amp-img src="<?php bloginfo('template_directory'); ?>/img/logo_inSegment.jpg" width="150" height="100" layout=responsive class=""></amp-img>
          </a>
        </div>
      <?php } ?>
        <div class="col-right-wrap">
          <div class="author-date-wrap">
            <span class="post-author-name">By: <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) . "amp" ) ?>"><?php amp_loop_author(); ?></a></span>
            <span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
          </div>
          <div class="clearfix"></div>
          <?php amp_loop_title(); ?>
          <?php amp_loop_category(); ?>
          <?php amp_loop_excerpt(); ?>
          <div class="read-more-button">
            <a href="<?php echo ampforwp_url_controller( get_permalink() ); ?>">Read this post</a>
          </div>
        </div>
    </div>
<?php endwhile; amp_loop('end');  ?>

<div class="cntr">
	<?php amp_pagination(); ?>
</div>

<?php amp_footer(); ?>
