<?php // The template part for displaying the header of the website ?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
	
    <?php // This part includes meta information and functions ?>
    
    <head>
    	        
		<?php // Various utilities ?>
    	<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet"> 		
            	
		<?php // Tag for including header files; should always be the last element inside the <head> section ?>
		<?php wp_head(); ?>
        
    </head>
    
    
    <?php // This encompasses the visible part of the website ?>
    
    <body <?php body_class(); ?>>
	
		<?php do_action('bento_body_top'); ?>
         				
		<div class="site-wrapper clear">

			<header class="site-header no-fixed-header">
            	<div class="bnt-container">
                
                	<?php bento_mobile_menu(); ?>
            		
                    <?php bento_logo(); ?>
                    
                    <?php bento_primary_menu(); ?>
                    
                </div>
            </header>
			
			<!-- .site-header -->
						
			<?php bento_post_header(); ?>
			
			<div class="nav-router">
				<span><a href="/">Home</a></span>
				<span><a href="https://www.facebook.com/pages/New-Golden-Gate-Seafood/442941425740557?rf=385942594789318&utm_source=tripadvisor&utm_medium=referral" target="_blank">Facebook</a></span>
				<span><a href="https://www.yelp.com/biz/new-golden-gate-boston-2" target="_blank">Yelp</a></span>
				<span><a href="https://www.tripadvisor.com/Restaurant_Review-g60745-d321617-Reviews-New_Golden_Gate_Seafood-Boston_Massachusetts.html" target="_blank">TripAdvisor</a></span>
				<span><a href="http://restaurant.local/gallery">Gallery</a></span>
				<span><a href="http://restaurant.local/contact-us">Contact Us</a></span>
			</div>


        	<div class="site-content">
			
			
			<section class="food-group" style="margin-top:25%;">
				<div class="group">
					
					<div class="food-menu">
						<iframe width="100%" height="500px" class="the-menu" src="http://places.singleplatform.com/new-golden-gate/menu?ref=google"></iframe>
					</div>
					
					<?php
						echo do_shortcode('[smartslider3 slider=3]');
					?>
				</div>


			</section>

			
