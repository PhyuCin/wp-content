<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package  Medplus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php endif; ?>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	//wp_body_open hook from WordPress 5.2
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	}
?>
<?php
$disabled_slides 	= get_theme_mod('disabled_slides', false);
$disabled_appointment 	= get_theme_mod('disabled_appointment', false);
$disabled_pageboxes 	= get_theme_mod('disabled_pageboxes', false);
$disabled_headertop 	= get_theme_mod('disabled_headertop', false);
?>
<a class="skip-link screen-reader-text" href="#page_content">
<?php esc_html_e( 'Skip to content', 'medplus' ); ?>
</a>
        
<?php if( $disabled_appointment != ''){ ?>  
<div class="header-top">
    <div class="container">
        <div class="left">
		   <div class="social-icons">
					<?php if ( get_theme_mod('fb_link') != "") { ?>
                    <a title="facebook" class="fa fa-facebook" target="_blank" href="<?php echo esc_url(get_theme_mod('fb_link')); ?>"></a> 
                    <?php } ?>
                    
                    <?php if ( get_theme_mod('twitt_link') != "") { ?>
                    <a title="twitter" class="fa fa-twitter" target="_blank" href="<?php echo esc_url(get_theme_mod('twitt_link')); ?>"></a>
                    <?php } ?> 
                    
                    <?php if ( get_theme_mod('gplus_link') != "") { ?>
                    <a title="google-plus" class="fa fa-google-plus" target="_blank" href="<?php echo esc_url(get_theme_mod('gplus_link')); ?>"></a>
                    <?php } ?>
                    
                    <?php if ( get_theme_mod('linked_link') != "") { ?> 
                    <a title="linkedin" class="fa fa-linkedin" target="_blank" href="<?php echo esc_url(get_theme_mod('linked_link')); ?>"></a>
                    <?php } ?>
           </div>  
        
        </div>
        <div class="right">
          <?php if ( ! dynamic_sidebar( 'header-info' ) ) : ?>
                 <div class="headerinfo">                  
                  <?php $header_phone = get_theme_mod('header_phone');
                   if( !empty($header_phone) ){ ?>
                    <i class="fa fa-phone"></i><?php echo esc_html( $header_phone); ?>                   
                 <?php } ?>
                 
                  <?php $header_address = get_theme_mod('header_address');
                   if( !empty($header_address) ){ ?>
                    <i class="fa fa-envelope"></i> <?php echo esc_html( $header_address); ?>
                 <?php } ?>
                                 
                 </div>                 
            <?php endif; // end sidebar widget area ?>  
        
         
        </div>
        <div class="clear"></div>
     </div> 
  </div><!-- end .headertop -->
<?php } ?>

<div class="header">
        <div class="container">
            <div class="logo">
                <?php medplus_the_custom_logo(); ?>   
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>                
                <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?>
                <span><?php echo esc_html($description); ?></span>
         <?php endif; ?>
            </div><!-- logo -->
            <div class="header_right">
             <div class="toggle">
                <a class="toggleMenu" href="#"><?php esc_html_e('Menu','medplus'); ?></a>
             </div><!-- toggle --> 
            <div class="sitenav">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div><!-- site-nav -->
            </div><!-- header_right -->
            <div class="clear"></div>
        </div><!-- container -->
  </div><!--.header -->
  
  <?php 
if ( is_front_page() && !is_home() ) {
if($disabled_slides != '') {
	for($i=2; $i<=4; $i++) {
	  if( get_theme_mod('page-setting'.$i,false)) {
		$slider_Arr[] = absint( get_theme_mod('page-setting'.$i,true));
	  }
	}
?> 
<div class="slider_wrapper">                
<?php if(!empty($slider_Arr)){ ?>
<div id="slider" class="nivoSlider">
<?php 
$i=1;
$slidequery = new WP_Query( array( 'post_type' => 'page', 'post__in' => $slider_Arr, 'orderby' => 'post__in' ) );
while( $slidequery->have_posts() ) : $slidequery->the_post();
$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID)); 
$thumbnail_id = get_post_thumbnail_id( $post->ID );
$alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true); 
?>
<?php if(!empty($image)){ ?>
<img src="<?php echo esc_url( $image ); ?>" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php }else{ ?>
<img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo esc_attr( $i ); ?>" alt="<?php echo esc_attr($alt); ?>" />
<?php } ?>
<?php $i++; endwhile; ?>
</div>   

<?php 
$i=1;
$slidequery->rewind_posts();
while( $slidequery->have_posts() ) : $slidequery->the_post(); ?>                 
    <div id="slidecaption<?php echo esc_attr( $i ); ?>" class="nivo-html-caption">    	
		 <div class="slide_info">
    	    <h2><?php the_title(); ?></h2>
    	    <?php the_excerpt(); ?>
        </div>                 
    </div>   
<?php $i++; 
endwhile;
wp_reset_postdata(); ?>   
<?php } ?>
<?php } } ?>


 <?php if ( is_front_page() && ! is_home() ) { ?> 
<?php if( $disabled_appointment != ''){ ?>         
 <section id="pagearea">
    <div class="container">
         <?php if( get_theme_mod('appointment')) { ?>
                    <?php $queryvar = new WP_query('page_id='.absint(get_theme_mod('appointment' ,true)) ); ?>
                    <?php while( $queryvar->have_posts() ) : $queryvar->the_post();?> 
                          <div class="appointmentbx">
                            <h2><?php the_title(); ?></h2>                           
                            <p><?php echo wp_trim_words( get_the_content(), 50, '...' ); ?></p>
                            <a class="appointmentbtn" href="<?php the_permalink(); ?>"><?php esc_html_e('Get an Appointment','medplus'); ?></a>
                         </div>
						<?php endwhile;
						wp_reset_postdata(); ?>                      
             <?php } ?>
             
             </div>
    <div class="clear"></div>
    </div><!-- .container -->
</section><!-- #pagearea -->
<?php } ?>  

<?php if( $disabled_pageboxes != ''){ ?> 
<div id="ourservices">
    <div class="container">
         <?php if( get_theme_mod('welcomepage',false) ) { ?>
        		<?php $queryvar = new wp_query('page_id='.absint(get_theme_mod('welcomepage',true)) );				
						while( $queryvar->have_posts() ) : $queryvar->the_post(); ?>
                        <div class="leftwrap"> 							
                            <h2><?php the_title(); ?></h2>                           
                             <p><?php echo wp_trim_words( get_the_content(), 40, '...' ); ?></p>
                            <a class="ReadMore" href="<?php the_permalink(); ?>"><?php esc_html_e('Read More &raquo;','medplus'); ?></a>
                         </div>
						<?php endwhile;
						wp_reset_postdata(); ?>                            
             <?php } ?>
             
           <div class="rightwrap">             
          		  <?php for($v=1; $v<5; $v++) { ?>       
                        <?php if( get_theme_mod('box'.$v,false)) { ?>          
                            <?php $querygt = new WP_query('page_id='.absint(get_theme_mod('box'.$v,true)) ); ?>				
                                 <?php while( $querygt->have_posts() ) : $querygt->the_post(); ?> 
                                    <div class="cols2 <?php if($v % 2 == 0) { echo "lastcols"; } ?>">                                    
                                      <?php if(has_post_thumbnail() ) { ?>
                                        <div class="servicesthumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail();?></a> </div>
                                      <?php } ?>
                                       <div class="srvcontent">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>                                    
                                        <p><?php echo wp_trim_words( get_the_content(), 25, '...' ); ?></p>
                                       </div>                                
                                    </div>
                              <?php endwhile;
                                  wp_reset_postdata(); ?>
                                    
               <?php } } ?>             
             </div><!-- .rightwrap -->
      <div class="clear"></div>
    </div><!-- .container -->
</div><!-- #ourservices -->  
<?php } ?>     
<?php } ?>