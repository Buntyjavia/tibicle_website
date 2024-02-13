<footer>
    <div class="footer-section ">
    <div class="logo">
			<?php
				$custom_logo_id = get_theme_mod('custom_logo');
				$logo = wp_get_attachment_image_src($custom_logo_id);
				if (has_custom_logo()) {
					echo '<a href="' . home_url('/') . '" >';
					echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" class="img-fluid" >';
					echo '</a>';
				} else {
					echo '<h1>' . get_bloginfo('name') . '</h1>';
				}
			?>
			</div>
        <div class="footer-content ml-180">
            <div class="left-section">
                <div class="contact-info">
                    <div class="contact-section">
                        <div class="phone-icon bg-purple">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/phone-icon.svg" alt="icon">             
                        </div>
                        <div class="contact-details">
                            <span>Phone</span>
                            <div class="phone-number"><?php  $phone_number = get_field('phone_number', 'options'); echo $phone_number ?></div>
                        </div>
                    </div>
                    <div class="contact-section">
                        <div class="phone-icon bg-pink">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/plane-icon.png" alt="icon">             
                        </div>
                        <div class="contact-details">
                            <span>Career Email</span>
                            <div class="phone-number"><?php  $career_email = get_field('career_email', 'options'); echo $career_email ?></div>
                        </div>
                    </div>
                    <div class="contact-section">
                        <div class="phone-icon bg-orange">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/package-icon.png" alt="icon">              
                        </div>
                        <div class="contact-details">
                            <span>Connect With</span>
                            <div class="phone-number"><?php  $career_email = get_field('career_email', 'options'); echo $career_email ?></div>
                        </div>
                    </div>
                </div>
                <div class="border"></div>
                <div class="list-section">
                    <?php wp_nav_menu( array(
            'container' => false, 
            'menu' => 'footer menu',
        )
        ); ?>
                </div>
            </div>
            <div class="right-section">
                <span >INDIA</span>
                <div class="address-section">
                    <div class="location-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/location-icon.svg" alt="location-icon">
                    </div>
                    <div class="address">
                    <?php  $company_address = get_field('company_address', 'options'); echo $company_address ?>
                    </div>
                </div>
                <div class="background-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/asset/img/footer-right-bg.svg" alt="location-icon">
                </div>
            </div>
        </div>
        <div class="copyright-section">
            <p>© 2022 Tibicle LLP. All rights reserved. <span>|</span> <a href="#">Privacy policy</a>   <span>|</span> <a href="#">Terms of services</a> </p>
        </div>
    </div>
</footer>
