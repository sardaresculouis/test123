<?php amp_header_core() ?>
 <header class="header">
    <div class="head-sec cntr">
        <div class="left">
            <?php // amp_logo(); ?>
            <div class="amp-logo">
                <a href="<?php echo get_bloginfo('url'); ?>">
                <?php if ( is_single() ) { ?>
                    <amp-img src="<?php echo plugins_url('insegment-amp/img/insegment-logo-single.png'); ?>" width="150" height="54" alt="insegblog" layout="responsive"></amp-img>
                <?php } else { ?>
                    <amp-img src="<?php echo plugins_url('insegment-amp/img/insegment-logo.png'); ?>" width="150" height="54" alt="insegblog" layout="responsive"></amp-img>
                <?php } ?>
                </a>
            </div>
        </div>
        <div class="right">
          <?php /* amp_sidebar(['action'=>'open-button']); */?>
          <!-- Start Navbar -->
          <header class="ampstart-headerbar fixed flex justify-start items-center top-0 left-0 right-0 pl2 pr4">
              <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger  pr2">Menu ☰</div>
          </header>
          <!-- End Navbar -->
        </div>
        <div class="clearfix"></div>
    </div><!-- /.header-section -->

    <?php if ( !is_single() ) { ?>
    <div class="hero-title-wrapper col-12">
      <h1 class="hero-title text-center"><?php the_field('insegment2018_header_title', 'options'); ?></h1>
      <hr class="sub-title"/>
      <p><?php the_field('insegment2018_header_subtitle', 'options'); ?></p>
    </div>
  <?php } ?>
</header>
<!-- Start Sidebar -->
<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3 " layout="nodisplay" side="right">
  <div class="flex justify-start items-center ampstart-sidebar-header">
    <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
  </div>
  <nav class="ampstart-sidebar-nav ampstart-nav">
    <ul class="list-reset m0 p0 ampstart-label">
      <li class="ampstart-nav-item ampstart-nav-dropdown relative">
        <!-- Start Dropdown-inline -->
        <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
          <section>
            <header>Who we are</header>
            <ul class="ampstart-dropdown-items list-reset m0 p0">
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/company/" class="text-decoration-none">About us</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/process/" class="text-decoration-none">Process</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/careers/#jobs" class="text-decoration-none">Careers</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/careers/#internships" class="text-decoration-none">Internships</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/scholarship/" class="text-decoration-none">Scholarship</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/resources/" class="text-decoration-none">Resources</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/press-room/" class="text-decoration-none">Press Room</a></li>
            </ul>
          </section>
        </amp-accordion>
        <!-- End Dropdown-inline -->
      </li>

      <li class="ampstart-nav-item ampstart-nav-dropdown relative">
        <!-- Start Dropdown-inline -->
        <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">
          <section>
            <header>What we do</header>
            <ul class="ampstart-dropdown-items list-reset m0 p0">
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/portfolio/" class="text-decoration-none">Portfolio</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/services/" class="text-decoration-none">Services</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/clients/" class="text-decoration-none">Clients</a></li>
                <li class="ampstart-dropdown-item"><a href="https://www.insegment.com/industries/" class="text-decoration-none">Industries</a></li>
            </ul>
          </section>
        </amp-accordion>
        <!-- End Dropdown-inline -->
      </li>
      <li class="ampstart-nav-item"><a href="https://www.insegment.com/blog/">Blog</a></li>
      <li class="ampstart-nav-item"><a href="https://www.insegment.com/contact-us/">Contact</a></li>
    </ul>
  </nav>
</amp-sidebar>
<!-- End Sidebar -->
<div class="content-wrapper">
