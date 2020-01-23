<?php amp_header(); ?>
<div class="single">
	<div class="feat-img">
	<?php if ( ampforwp_has_post_thumbnail() ){ ?>
			<?php $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'large', 'responsive'=> true); ?>
			<?php amp_loop_image($args);?>
	<?php } else { ?>
		<amp-img src="<?php bloginfo('template_directory'); ?>/img/logo_inSegment.jpg" width="150" height="100" layout=responsive class=""></amp-img>
	<?php } ?>
	</div>
	<div class="author-date-wrap">
		<span class="post-author-name">By: <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) ?>"><?php amp_loop_author(); ?></a></span>
		<span class="post-date"><?php echo esc_html( get_the_date() ); ?></span>
	</div>
	<div class="">
	  <div class="cntr">
			<?php amp_loop_title(); ?>
	    <?php amp_loop_category(); ?>
		<?php
		global $redux_builder_amp;
		if(isset($redux_builder_amp['minimalblog-date']) && $redux_builder_amp['minimalblog-date']==1){?>
		    <?php amp_date(); ?>
		<?php }?>
		</div>
	</div>
</div>
<div class="cntr">
	<?php
		global $redux_builder_amp;
		if(isset($redux_builder_amp['minimalblog-author-box']) && $redux_builder_amp['minimalblog-author-box']==1){?>
	<?php
		$args = $arrayName = array('avatar' => true,
									'author_prefix' =>'by',
									'avatar_size' => 80);
		amp_author_box($args); ?>
	<?php }?>
	<div class="single-cntn">
		<?php amp_content(); ?>

		<amp-addthis  width="320" height="92" data-pub-id="ra-5b146f3d7c6bcc64" data-widget-id="ci5p"></amp-addthis>

	</div>
	<?php
		global $redux_builder_amp;
		if(isset($redux_builder_amp['minimalblog-comment']) && $redux_builder_amp['minimalblog-comment']==1){?>
	<div class="cmts">
		<?php amp_comments();?>
	</div><!-- /.comments-part -->
	<?php } ?>
</div>
<?php
	$my_query = related_post_loop_query();
  if( $my_query->have_posts() ) { ?>
    <div class="rlp">
      <ul class="clearfix">
        <div class="cntr"><?php ampforwp_related_post(); ?></div>
        <?php
          while( $my_query->have_posts() ) {
            $my_query->the_post();
						?>
						<li class="<?php if ( has_post_thumbnail() ) { echo'has_thumbnail'; } else { echo 'no_thumbnail'; } ?>">
							<div class="">
								<div class="rlp-cnt">
									<div class="cntr">
										<?php
										$argsdata = array(
												'show_author' => false,
												'show_excerpt' =>false
													);
													ampforwp_get_relatedpost_content($argsdata); ?>
									</div>
								</div>
							</div>
						</li>
					<?php } ?>
			</ul>
    </div>
	<?php } ?>
<?php wp_reset_postdata(); ?>
<?php amp_footer()?>
