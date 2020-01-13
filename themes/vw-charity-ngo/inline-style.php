<?php
	
	/*---------------------------highlight color-------------------*/

	$vw_charity_ngo_first_color = get_theme_mod('vw_charity_ngo_first_color');

	$custom_css = '';

	if($vw_charity_ngo_first_color != false){
		$custom_css .='.custom-social-icons i:hover, .donate a, .more-btn a, #slider .carousel-control-prev-icon, #slider .carousel-control-next-icon, .scholarship-box, input[type="submit"], .sidebar input[type="submit"], .scrollup i, .woocommerce span.onsale, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, nav.woocommerce-MyAccount-navigation ul li, .date-monthwrap, .hvr-sweep-to-right:before, .pagination span, .pagination a,.sidebar .tagcloud a:hover, #comments a.comment-reply-link, .toggle-nav i, .footer .widget_price_filter .ui-slider .ui-slider-range, .footer .widget_price_filter .ui-slider .ui-slider-handle, .footer .woocommerce-product-search button, .sidebar .woocommerce-product-search button, .sidebar .widget_price_filter .ui-slider .ui-slider-range, .sidebar .widget_price_filter .ui-slider .ui-slider-handle{';
			$custom_css .='background-color: '.esc_html($vw_charity_ngo_first_color).';';
		$custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$custom_css .='nav.woocommerce-MyAccount-navigation ul li, #comments input[type="submit"].submit{';
			$custom_css .='background-color: '.esc_html($vw_charity_ngo_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$custom_css .='a, #top-bar i, .donate a:hover, .more-btn a:hover, .woocommerce ul.products li.product .price, .woocommerce div.product p.price, .woocommerce div.product span.price, a.showcoupon, .woocommerce-message::before, .woocommerce .quantity .qty, .metabox span i, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title,.sidebar th,.sidebar td,.sidebar caption,.sidebar td#prev a, .footer li a:hover, .entry-content a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a{';
			$custom_css .='color: '.esc_html($vw_charity_ngo_first_color).';';
		$custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$custom_css .='.woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover, .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce .quantity .qty, .post-main-box:hover,.footer .tagcloud a:hover, .toggle-nav i{';
			$custom_css .='border-color: '.esc_html($vw_charity_ngo_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$custom_css .='hr.head-line, hr.title, hr.what_do, .woocommerce-message, .main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_charity_ngo_first_color).';';
		$custom_css .='}';
	}
	if($vw_charity_ngo_first_color != false){
		$custom_css .='.woocommerce-message, .main-navigation ul ul, .header-fixed{';
			$custom_css .='border-bottom-color: '.esc_html($vw_charity_ngo_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_charity_ngo_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page #header{';
			$custom_css .='width: 97.4%;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page #header{';
			$custom_css .='width: 97.7%;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_charity_ngo_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_charity_ngo_slider_content_option','Left');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
		$custom_css .='hr.head-line{';
			$custom_css .='left: 35%; position: absolute; margin: -2px 0px;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
		$custom_css .='hr.head-line{';
			$custom_css .='right: 3%; position: absolute; margin: -2px 0px;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_charity_ngo_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.post-main-box{';
			$custom_css .='';
		$custom_css .='}';
		$custom_css .='.post-main-box h2{';
			$custom_css .='padding:0;';
		$custom_css .='}';
		$custom_css .='.new-text p{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.blogbutton-small{';
			$custom_css .='margin: 0; display: inline-block;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.post-main-box, .post-main-box h2, .new-text p, .metabox, .content-bttn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.new-text p{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.metabox{';
			$custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$custom_css .='}';
		$custom_css .='.blogbutton-small{';
			$custom_css .='margin: 0; display: inline-block;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.post-main-box, .post-main-box h2, .new-text p, .content-bttn{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.metabox{';
			$custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$custom_css .='}';
	}