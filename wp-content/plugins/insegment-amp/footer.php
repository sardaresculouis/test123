</div>
<footer class="footer">
	<div class="container d-inline d-md-flex">
    <div class="copyright-section col-lg-4" itemscope itemtype="http://schema.org/LocalBusiness">
      <div class="footer-logo"><amp-img src='<?php echo plugins_url('insegment-amp/img/insegment-logo-single.png'); ?>' alt="inSegment Boston Digital Marketing Agency Logo" layout="fixed" width="150" height="54"></amp-img></div>
      <p class='copyright'>&copy; <?php echo date("Y"); ?> <span itemprop="name">inSegment</span>. <span itemprop="description">Digital Marketing Agency</span> | All Rights Reserved.</p>
    </div>

    <div class="address-section col-sm-6 col-lg-6 text-left text-sm-center" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
      <p>
        <span itemprop="streetAddress"><?php the_field('insegment2018_company_street_address', 'option'); ?></span><br>
        <span itemprop="addressLocality"><?php the_field('insegment2018_company_address_locality', 'option');?>,</span>
        <span itemprop="addressRegion"> <?php the_field('insegment2018_company_address_region', 'option');?></span>
        <span itemprop="postalCode"> <?php the_field('insegment2018_company_zip_code', 'option');?></span>
        <span itemprop="addressCountry"><?php the_field('insegment2018_company_address_country', 'option');?></span> |
        <span class="highlight footer-email">
          <?php $emailLink = get_field('insegment2018_company_email', 'option'); ?>
          <a href="mailto:<?php echo $emailLink['url'] ?>" itemprop="email"><?php echo $emailLink['title'] ?></a>
        </span>
      </p>
			<?php
			$sociaLinks = get_field('insegment2018_social_links', 'option');
			if( $sociaLinks ){ ?>
				<div class='social-links d-flex justify-content-left justify-content-sm-center'>
					<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_blog_rss']['title']); ?>" target="_blank" href="<?php echo $sociaLinks['insegment2018_blog_rss']['url']; ?>">
						<amp-img src='<?php echo plugins_url('insegment-amp/img/rss-bg.png'); ?>' alt="RSS" layout="fixed" width="33" height="34"></amp-img>
					</a>
					<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_twitter_url']['title']); ?>" target="_blank" href="<?php echo $sociaLinks['insegment2018_twitter_url']['url']; ?>">
						<amp-img src='<?php echo plugins_url('insegment-amp/img/twitter-bg.png'); ?>' alt="RSS" layout="fixed" width="33" height="34"></amp-img>
					</a>
					<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_linkedln_url']['title']); ?>" target="_blank" href="<?php echo $sociaLinks['insegment2018_linkedln_url']['url']; ?>">
						<amp-img src='<?php echo plugins_url('insegment-amp/img/linkedin-bg.png'); ?>' alt="RSS" layout="fixed" width="33" height="34"></amp-img>
					</a>
					<a class="social-item <?php echo strtolower($sociaLinks['insegment2018_facebook_url']['title']); ?>"  target="_blank" href="<?php echo $sociaLinks['insegment2018_facebook_url']['url']; ?>">
						<amp-img src='<?php echo plugins_url('insegment-amp/img/facebook-bg.png'); ?>' alt="RSS" layout="fixed" width="33" height="34"></amp-img>
					</a>
				</div>
			<?php } ?>
    </div>
    <div class="partner-badge col-sm-2"><div class="g-partnersbadge" data-agency-id="8978487415"></div></div>
  </div>
</footer>
<?php amp_sidebar(['action'=>'start',
    'id'=>'sidebar',
    'layout'=>'nodisplay',
    'side'=>'right'
] ); ?>
<div class="amp-close-btn">
    <?php amp_sidebar(['action'=>'close-button']); ?>
</div>
<?php amp_menu(); ?>
<?php amp_search();?>
<?php amp_sidebar(['action'=>'end']); ?>
