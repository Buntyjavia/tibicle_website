<?php 

/*
*
*
 Template Name: Home page
*
*
*/


get_header();
?>

<footer>
    <div class="footer-section ">
        <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/black-logo.svg" alt="logo">
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
                            <div class="phone-number">+91 97249 22880</div>
                        </div>
                    </div>
                    <div class="contact-section">
                        <div class="phone-icon bg-pink">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/phone-icon.svg" alt="icon">             
                        </div>
                        <div class="contact-details">
                            <span>Career Email</span>
                            <div class="phone-number">info@tibicle.com</div>
                        </div>
                    </div>
                    <div class="contact-section">
                        <div class="phone-icon bg-orange">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/phone-icon.svg" alt="icon">             
                        </div>
                        <div class="contact-details">
                            <span>Connect With</span>
                            <div class="phone-number">info@tibicle.com</div>
                        </div>
                    </div>
                </div>
                <div class="border"></div>
                <div class="list-section">
                    <ul>
                        <li><a href="#">Catalog</a></li>
                        <li><a href="#">Project</a></li>
                        <li><a href="#">Resources</a></li>
                        <li><a href="#">Support</a></li>
                        <li><a href="#">FAQ’s</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-section">
                <span >INDIA</span>
                <div class="address-section">
                    <div class="location-icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/location-icon.svg" alt="location-icon">
                    </div>
                    <div class="address">
                        'B-1001', Ganesh Glory-11, Jagatpur road, Gota, Ahmedabad - 382481
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


<?php 



get_footer();

?>