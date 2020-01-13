<div id="header" class="menubar">
  <div class="header-menu <?php if( get_theme_mod( 'vw_charity_ngo_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
    <div class="container">
      <div class="row">
        <div class="logo col-lg-3 col-md-5">
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
              <?php else : ?>
                <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
            ?>
            <p class="site-description">
              <?php echo $description; ?>
            </p>
          <?php endif; ?>
        </div>
        <div class="col-lg-7 col-md-4 col-6">
          <div class="toggle-nav mobile-menu">
            <button onclick="menu_openNav()"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Button','vw-charity-ngo'); ?></span></button>
          </div> 
          <div id="mySidenav" class="nav sidenav">
            <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'vw-charity-ngo' ); ?>">
              <a href="javascript:void(0)" class="closebtn mobile-menu" onclick="menu_closeNav()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Button','vw-charity-ngo'); ?></span></a>
              <?php 
                wp_nav_menu( array( 
                  'theme_location' => 'primary',
                  'container_class' => 'main-menu clearfix' ,
                  'menu_class' => 'clearfix',
                  'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
                  'fallback_cb' => 'wp_page_menu',
                ) ); 
              ?>
            </nav>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-6 p-0">
          <?php if( get_theme_mod('vw_charity_ngo_link') != ''){ ?>
            <div class ="donate">
              <a href="<?php echo esc_url(get_theme_mod('vw_charity_ngo_link','#')); ?>"><?php echo esc_html(get_theme_mod('vw_charity_ngo_text','')); ?><span class="screen-reader-text"><?php esc_html_e( 'DONATE NOW','vw-charity-ngo' );?></span></a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>