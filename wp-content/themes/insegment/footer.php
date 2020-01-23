<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<footer class="footer-wrapper">
  <div class="container d-inline d-md-flex">
    <div class="copyright-section col-lg-4" itemscope itemtype="http://schema.org/LocalBusiness">
      <div class="footer-logo"><img src='<?php echo "/wp-content/themes/".get_template();?>/img/insegment-logo-single.png' alt="inSegment Boston Digital Marketing Agency Logo"></img></div>
      <p class='copyright'>&copy; <?php echo date("Y"); ?> <span itemprop="name">inSegment</span>. <span itemprop="description">Digital Marketing Agency</span> | All Rights Reserved.</p>
    </div>

    <div class="address-section col-sm-6 col-lg-6 text-left text-sm-center" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <?php
      $sociaLinks = get_field('insegment2018_social_links', 'option');
      if( $sociaLinks ){ ?>
        <div class='social-links d-flex justify-content-left justify-content-sm-center'>
          <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_blog_rss']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_blog_rss']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_blog_rss']['url']; ?>"><i class="fa fa-rss"></i></a>
          <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_twitter_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_twitter_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_twitter_url']['url']; ?>"><i class="fa fa-twitter"></i></a>
          <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_linkedln_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_linkedln_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_linkedln_url']['url']; ?>"><i class="fa fa-linkedin"></i></a>
          <a class="social-item <?php echo strtolower($sociaLinks['insegment2018_facebook_url']['title']); ?>" target="<?php echo $sociaLinks['insegment2018_facebook_url']['target'] ?>" href="<?php echo $sociaLinks['insegment2018_facebook_url']['url']; ?>"><i class="fa fa-facebook-f"></i></a>
        </div>
      <?php } ?>
      <p>
        <span itemprop="streetAddress"><?php the_field('insegment2018_company_street_address', 'option'); ?></span><br>
        <span itemprop="addressLocality"><?php the_field('insegment2018_company_address_locality', 'option');?>,</span>
        <span itemprop="addressRegion"> <?php the_field('insegment2018_company_address_region', 'option');?></span>
        <span itemprop="postalCode"> <?php the_field('insegment2018_company_zip_code', 'option');?></span>
        <span itemprop="addressCountry"><?php the_field('insegment2018_company_address_country', 'option');?></span> |
        <span class="highlight footer-email">
          <?php $emailLink = get_field('insegment2018_company_email', 'option'); ?>
          <a href="mailto:<?php echo $emailLink['url'] ?>" itemprop="email" target="<?php $emailLink['target'] ?>"><?php echo $emailLink['title'] ?></a>
        </span>
      </p>
    </div>
    <div class="partner-badge col-sm-2" style="height: 78px;"><div class="g-partnersbadge" data-agency-id="8978487415"></div></div>
  </div>
</footer>
</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

<script src="https://apis.google.com/js/platform.js" async defer></script>
</body>

</html>
