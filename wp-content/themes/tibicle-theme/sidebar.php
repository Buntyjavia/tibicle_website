<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tibicle-theme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="menu-section">
  <div class="menu-icon">
    <button onclick="sidebar_open()" class="menu-btn">
      <p>M</p>
      <p class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
          <path d="M2.33325 18L13.3333 18" stroke="url(#paint0_linear_129_157)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M2.33325 10L20.3333 10" stroke="url(#paint1_linear_129_157)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M2 2L12 2" stroke="url(#paint2_linear_129_157)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <defs>
            <linearGradient id="paint0_linear_129_157" x1="7.83301" y1="18" x2="7.83301" y2="19" gradientUnits="userSpaceOnUse">
              <stop stop-color="#12AFFC"/>
              <stop offset="1" stop-color="#7B28FF"/>
            </linearGradient>
            <linearGradient id="paint1_linear_129_157" x1="11.3329" y1="10" x2="11.3329" y2="11" gradientUnits="userSpaceOnUse">
              <stop stop-color="#12AFFC"/>
              <stop offset="1" stop-color="#7B28FF"/>
            </linearGradient>
            <linearGradient id="paint2_linear_129_157" x1="6.99978" y1="2" x2="6.99978" y2="3" gradientUnits="userSpaceOnUse">
              <stop stop-color="#12AFFC"/>
              <stop offset="1" stop-color="#7B28FF"/>
            </linearGradient>
          </defs>
        </svg>
        <span class="icon">
        </span>
      </p>
      <p>NU</p>
    </button>
  </div>
</div>
<aside id="secondary" class="widget-area">
	<!-- Sidebar design start -->
	<div class="sidebar" id="mySidebar">
  <div class="sidebar-header">
    <button onclick="sidebar_close()" class="sidebar-close-icon">
      <p>CL</p>
      <p class="close-icon">
        o
        <span class="icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none">
            <path d="M1.86929 1.99988L11.6545 11.7917" stroke="url(#paint0_linear_325_489)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 2.37158L1.5238 11.4204" stroke="url(#paint1_linear_325_489)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
            <defs>
              <linearGradient id="paint0_linear_325_489" x1="6.7617" y1="6.8956" x2="6.05436" y2="7.60247" gradientUnits="userSpaceOnUse">
                <stop stop-color="#12AFFC"/>
                <stop offset="1" stop-color="#7B28FF"/>
              </linearGradient>
              <linearGradient id="paint1_linear_325_489" x1="6.76212" y1="6.8958" x2="6.10845" y2="6.13902" gradientUnits="userSpaceOnUse">
                <stop stop-color="#12AFFC"/>
                <stop offset="1" stop-color="#7B28FF"/>
              </linearGradient>
            </defs>
          </svg>
        </span>
      </p>
      <p>SE</p>
    </button>
    <!-- <div class="logo">
      <img src="../img/white-logo..svg" alt="logo">
    </div> -->
  </div>
  <div class="sidebar-content">
    <ul id="ul">
      <?php 
    $menu_items = wp_get_nav_menu_items('sidebar menu');
    if ($menu_items) {
      $counter = 1; 
      foreach ($menu_items as $menu_item) {
      
  ?><li id="item-show">
        <div class="item">
          <div class="number"><?php echo sprintf("%02d",$counter); ?></div>
          <div class="item-name">
            <a href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>
            <p><?php echo $menu_item->title; ?></p>
            <br>
          </div>
        </div>
      </li>
  <?php
          $counter++; 
      }
    }
  ?>
    </ul>
  </div>
  <div class="sidebar-footer">
    <div class="social-media-icon">
      <div class="icon">
        <a href="<?php echo esc_attr( get_field('facebook' , 'options') ); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <g clip-path="url(#clip0_133_13935)">
            <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0_133_13935">
              <rect width="24" height="24" fill="white"/>
            </clipPath>
          </defs>
        </svg></a>
        
      </div>
      <div class="icon">
    <a href="<?php echo esc_attr( get_field('twitter' , 'options') ); ?>" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M7.55016 21.75C16.6045 21.75 21.5583 14.2467 21.5583 7.74186C21.5583 7.53092 21.5536 7.3153 21.5442 7.10436C22.5079 6.40746 23.3395 5.54425 24 4.5553C23.1025 4.9546 22.1496 5.21538 21.1739 5.32874C22.2013 4.71291 22.9705 3.74547 23.3391 2.60577C22.3726 3.17856 21.3156 3.58261 20.2134 3.80061C19.4708 3.01156 18.489 2.48912 17.4197 2.31405C16.3504 2.13899 15.2532 2.32105 14.2977 2.8321C13.3423 3.34314 12.5818 4.15471 12.1338 5.14131C11.6859 6.12792 11.5754 7.23462 11.8195 8.2903C9.86249 8.19209 7.94794 7.6837 6.19998 6.7981C4.45203 5.91249 2.90969 4.66944 1.67297 3.14952C1.0444 4.23324 0.852057 5.51565 1.13503 6.73609C1.418 7.95654 2.15506 9.02345 3.19641 9.71999C2.41463 9.69517 1.64998 9.48468 0.965625 9.10592V9.16686C0.964925 10.3041 1.3581 11.4066 2.07831 12.2868C2.79852 13.167 3.80132 13.7706 4.91625 13.995C4.19206 14.1931 3.43198 14.222 2.69484 14.0794C3.00945 15.0574 3.62157 15.9129 4.44577 16.5263C5.26997 17.1398 6.26512 17.4806 7.29234 17.5012C5.54842 18.8711 3.39417 19.6141 1.17656 19.6106C0.783287 19.61 0.390399 19.5859 0 19.5384C2.25286 20.9837 4.87353 21.7514 7.55016 21.75Z" fill="white"/>
        </svg>
    </a>
</div>

<div class="icon">
    <a href="<?php echo esc_attr( get_field('linked_in' , 'options') ); ?>" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path d="M22.2234 0H1.77187C0.792187 0 0 0.773438 0 1.72969V22.2656C0 23.2219 0.792187 24 1.77187 24H22.2234C23.2031 24 24 23.2219 24 22.2703V1.72969C24 0.773438 23.2031 0 22.2234 0ZM7.12031 20.4516H3.55781V8.99531H7.12031V20.4516ZM5.33906 7.43438C4.19531 7.43438 3.27188 6.51094 3.27188 5.37187C3.27188 4.23281 4.19531 3.30937 5.33906 3.30937C6.47813 3.30937 7.40156 4.23281 7.40156 5.37187C7.40156 6.50625 6.47813 7.43438 5.33906 7.43438ZM20.4516 20.4516H16.8937V14.8828C16.8937 13.5562 16.8703 11.8453 15.0422 11.8453C13.1906 11.8453 12.9094 13.2937 12.9094 14.7891V20.4516H9.35625V8.99531H12.7687V10.5609H12.8156C13.2891 9.66094 14.4516 8.70938 16.1813 8.70938C19.7859 8.70938 20.4516 11.0813 20.4516 14.1656V20.4516Z" fill="white"/>
        </svg>
    </a>
</div>

    </div>
    <div class="contact-info">
      <span class="nubmer"><?php  $phone_number = get_field('phone_number', 'options');
					 echo $phone_number ?></span>
              <?php  $email = get_field('email', 'options');
                    if (!empty($email)) {
                ?>
                        <span><?php  
                            echo $email;
                        ?></span>
                <?php
                    }
               ?>

      
    </div>
  </div>
</div>
  <!-- Sidebar design end -->
  <div class="menu-section">
  <div class="menu-icon">
    <button onclick="sidebar_open()" class="menu-btn">
      <p>M</p>
      <p class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="20" viewBox="0 0 22 20" fill="none">
          <path d="M2.33325 18L13.3333 18" stroke="url(#paint0_linear_129_157)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M2.33325 10L20.3333 10" stroke="url(#paint1_linear_129_157)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <path d="M2 2L12 2" stroke="url(#paint2_linear_129_157)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
          <defs>
            <linearGradient id="paint0_linear_129_157" x1="7.83301" y1="18" x2="7.83301" y2="19" gradientUnits="userSpaceOnUse">
              <stop stop-color="#12AFFC"/>
              <stop offset="1" stop-color="#7B28FF"/>
            </linearGradient>
            <linearGradient id="paint1_linear_129_157" x1="11.3329" y1="10" x2="11.3329" y2="11" gradientUnits="userSpaceOnUse">
              <stop stop-color="#12AFFC"/>
              <stop offset="1" stop-color="#7B28FF"/>
            </linearGradient>
            <linearGradient id="paint2_linear_129_157" x1="6.99978" y1="2" x2="6.99978" y2="3" gradientUnits="userSpaceOnUse">
              <stop stop-color="#12AFFC"/>
              <stop offset="1" stop-color="#7B28FF"/>
            </linearGradient>
          </defs>
        </svg>
        <span class="icon">
        </span>
      </p>
      <p>NU</p>
    </button>
  </div>
</div>
</aside><!-- #secondary -->
