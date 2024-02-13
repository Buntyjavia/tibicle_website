<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tibicle-theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href=""> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/asset/css/style.css"> 
	<script src="<?php echo get_template_directory_uri(); ?>/asset/javascript/main.js"></script>


	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<!-- for slick slider  -->
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script> -->
     <!-- for slick slider  -->
	 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'tibicle-theme' ); ?></a>
	
	<header class="ml-180">
		<div class="header-content">
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
			<div class="right-side">
				<div class="contact-section">
				
    <?php 
        $phone_number = get_field('phone_number', 'options');
        if (!empty($phone_number)) {
    ?>  <div class="phone-icon">
	<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path d="M14.6833 8.95842C14.325 8.95842 14.0416 8.66675 14.0416 8.31675C14.0416 8.00841 13.7333 7.36675 13.2166 6.80841C12.7083 6.26675 12.15 5.95008 11.6833 5.95008C11.325 5.95008 11.0416 5.65841 11.0416 5.30841C11.0416 4.95841 11.3333 4.66675 11.6833 4.66675C12.5166 4.66675 13.3916 5.11675 14.1583 5.92508C14.875 6.68341 15.3333 7.62508 15.3333 8.30842C15.3333 8.66675 15.0416 8.95842 14.6833 8.95842Z" fill="white"/>
	<path d="M17.6917 8.95841C17.3334 8.95841 17.05 8.66675 17.05 8.31675C17.05 5.35841 14.6417 2.95841 11.6917 2.95841C11.3334 2.95841 11.05 2.66675 11.05 2.31675C11.05 1.96675 11.3334 1.66675 11.6834 1.66675C15.35 1.66675 18.3334 4.65008 18.3334 8.31675C18.3334 8.66675 18.0417 8.95841 17.6917 8.95841Z" fill="white"/>
	<path d="M9.20829 12.4584L7.66663 14.0001C7.34163 14.3251 6.82496 14.3251 6.49163 14.0084C6.39996 13.9167 6.30829 13.8334 6.21663 13.7417C5.35829 12.8751 4.58329 11.9667 3.89163 11.0167C3.20829 10.0667 2.65829 9.11675 2.25829 8.17508C1.86663 7.22508 1.66663 6.31675 1.66663 5.45008C1.66663 4.88341 1.76663 4.34175 1.96663 3.84175C2.16663 3.33341 2.48329 2.86675 2.92496 2.45008C3.45829 1.92508 4.04163 1.66675 4.65829 1.66675C4.89163 1.66675 5.12496 1.71675 5.33329 1.81675C5.54996 1.91675 5.74163 2.06675 5.89163 2.28341L7.82496 5.00841C7.97496 5.21675 8.08329 5.40841 8.15829 5.59175C8.23329 5.76675 8.27496 5.94175 8.27496 6.10008C8.27496 6.30008 8.21663 6.50008 8.09996 6.69175C7.99163 6.88341 7.83329 7.08341 7.63329 7.28341L6.99996 7.94175C6.90829 8.03341 6.86663 8.14175 6.86663 8.27508C6.86663 8.34175 6.87496 8.40008 6.89163 8.46675C6.91663 8.53341 6.94163 8.58341 6.95829 8.63341C7.10829 8.90841 7.36663 9.26675 7.73329 9.70008C8.10829 10.1334 8.50829 10.5751 8.94163 11.0167C9.02496 11.1001 9.11663 11.1834 9.19996 11.2667C9.53329 11.5917 9.54163 12.1251 9.20829 12.4584Z" fill="white"/>
	<path d="M18.3083 15.275C18.3083 15.5083 18.2667 15.75 18.1833 15.9833C18.1583 16.05 18.1333 16.1166 18.1 16.1833C17.9583 16.4833 17.775 16.7666 17.5333 17.0333C17.125 17.4833 16.675 17.8083 16.1667 18.0166C16.1583 18.0166 16.15 18.025 16.1417 18.025C15.65 18.225 15.1167 18.3333 14.5417 18.3333C13.6917 18.3333 12.7833 18.1333 11.825 17.725C10.8667 17.3166 9.90833 16.7666 8.95833 16.075C8.63333 15.8333 8.30833 15.5916 8 15.3333L10.725 12.6083C10.9583 12.7833 11.1667 12.9166 11.3417 13.0083C11.3833 13.025 11.4333 13.05 11.4917 13.075C11.5583 13.1 11.625 13.1083 11.7 13.1083C11.8417 13.1083 11.95 13.0583 12.0417 12.9666L12.675 12.3416C12.8833 12.1333 13.0833 11.975 13.275 11.875C13.4667 11.7583 13.6583 11.7 13.8667 11.7C14.025 11.7 14.1917 11.7333 14.375 11.8083C14.5583 11.8833 14.75 11.9916 14.9583 12.1333L17.7167 14.0916C17.9333 14.2416 18.0833 14.4166 18.175 14.625C18.2583 14.8333 18.3083 15.0416 18.3083 15.275Z" fill="white"/>
	</svg>                
</div>
			<div class="contact-details">
					<span>Phone</span>
					<div class="phone-number"><?php echo $phone_number ?></div>
				<?php } ?>
			</div>
			<?php $hire_us = get_field('hire_us','options'); ?>
				<?php if (!empty($hire_us)) { ?>
					<div class="btn-section">
						<button class="btn">
							<?php if($hire_us) { ?>
								<a href="<?php echo $hire_us['url'];?>" target="<?php echo $hire_us['target'];?>"><?php echo $hire_us['title'];?></a>
							<?php } ?>
						</button>
					</div>
				<?php } ?>
		</div>
		</div>
	</header>
