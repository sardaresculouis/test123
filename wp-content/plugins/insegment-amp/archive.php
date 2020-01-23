<?php amp_header(); ?>

<div class="category-filter">
<?php insegment_category_filter(); ?>
</div>
<?php
$sociaLinks = get_field('insegment2018_social_links', 'option');
if( $sociaLinks ){ ?>
  <div class='social-links-wrap'>
    <span class="join-us-text">Join Us!</span>
    <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_blog_rss']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_blog_rss']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_blog_rss']['url']; ?>">
      <amp-img src="<?php echo plugins_url('insegment-amp/img/rss.png'); ?>" width="26" height="26" alt="rss" layout="fixed"></amp-img>
    </a>
    <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_twitter_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_twitter_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_twitter_url']['url']; ?>">
      <amp-img src="<?php echo plugins_url('insegment-amp/img/twitter.png'); ?>" width="26" height="26" alt="twitter" layout="fixed"></amp-img>
    </a>
    <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_facebook_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_facebook_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_facebook_url']['url']; ?>">
      <amp-img src="<?php echo plugins_url('insegment-amp/img/facebook.png'); ?>" width="26" height="26" alt="facebook" layout="fixed"></amp-img>
    </a>
    <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_linkedln_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_linkedln_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_linkedln_url']['url']; ?>">
      <amp-img src="<?php echo plugins_url('insegment-amp/img/linkedin.png'); ?>" width="26" height="26" alt="linkedin" layout="fixed"></amp-img>
    </a>
  </div>
<?php } ?>

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
