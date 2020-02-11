<?php // The template part for displaying the footer of the website ?>

            </div><!-- .site-content -->




			
			<?php // Ensure that the floats are cleared for the side-menu website layout ?>
			<div class="after-content">
			</div>
			
			

			
            
            <footer class="site-footer" style="padding-top: 50%;">
			<?php if(is_page('79')): ?>
					<div class="contact-form">
						<? echo do_shortcode('[ninja_form id=2]'); ?>
					</div>
			<?php endif; ?>	
                
				<section class="grid-sidebar-footer">
				<div class="grid-item">
					<span>Photo Gallery</span>
					<a href="http://restaurant.local/gallery">
					<div class="sample-food">
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food10.jpg" width="90px" height="90px" /></span>
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food5.jpg" width="90px" height="90px" /></span>
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food6.jpg" width="90px" height="90px" /></span><br>

						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food7.jpg" width="90px" height="90px" /></span>
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food8.jpg" width="90px" height="90px" /></span>
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food9.jpg" width="90px" height="90px" /></span><br>
						
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food3.jpg" width="90px" height="90px" /></span>
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food1.jpg" width="90px" height="90px" /></span>
						<span><img src="http://restaurant.local/wp-content/themes/bento/images/food2.jpg" width="90px" height="90px" /></span>						
					</div></a>
				</div>

				
				<div class="grid-item">
					<span>Our Location</span>
					<?php echo do_shortcode('
						[leaflet-map lat=42.35 lng=-71.059 zoom=15]

						[leaflet-marker visible] <strong>New Golden Gate</strong><br>66 Beach St, Boston, MA 02111<br> <a href="https://www.google.com/maps/dir//new+golden+gate/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x89e37a7840507c23:0xd0a88073507e509d?sa=X&ved=2ahUKEwij3_HNsrjnAhU6knIEHS0MD10Q9RcwC3oECBAQDw">Get Direction</a>[/leaflet-marker]						
					'); ?>	

        		</div>

				
				<div class="grid-item">
					<span>Our Business Hours</span>
					<div class="bh-opening-hours">
						<span class="bh-title">Opening Hours</span>

						<div class="bh-weekday">
							<span class="bh-weekday-Monday">Monday</span>
							<span class="bh-times">11:00 am - 4:00 am</span>
						</div>
						<div class="bh-weekday">
							<span class="bh-weekday-Tuesday">Tuesday</span>
							<span class="bh-times">11:00 am - 4:00 am</span>
						</div>
						<div class="bh-weekday">
							<span class="bh-weekday-Wednesday">Wednesday</span>
							<span class="bh-times">11:00 am - 4:00 am</span>
						</div>
						<div class="bh-weekday">
							<span class="bh-weekday-Thursday">Thursday</span>
							<span class="bh-times">11:00 am - 4:00 am</span>
						</div>
						<div class="bh-weekday">
							<span class="bh-weekday-Friday">Friday</span>
							<span class="bh-times">11:00 am - 4:00 am</span>
						</div>
						<div class="bh-weekday">
							<span class="bh-weekday-Saturday">Saturday</span>
							<span class="bh-times">11:00 am - 4:00 am</span>
						</div>
						<div class="bh-weekday">
							<span class="bh-weekday-Sunday">Sunday</span>
							<span class="bh-times">11:00 am - 4:00 am</span>
						</div>
					</div>
				</div>
			</section>

				<?php // Footer menu and copyright area ?>
                <div class="bottom-footer clear">
                	<div class="bnt-container">
					
						<?php bento_footer_menu(); ?>
						
                        <?php bento_copyright(); ?>
						
                    </div>
                </div>
                
            </footer><!-- .site-footer -->

		</div><!-- .site-wrapper -->
		
		<?php // Tag for including javascript in the footer; should always be the last element inside the <body> section ?>
		<?php wp_footer(); ?>

	</body>
    
</html>