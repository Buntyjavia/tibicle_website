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
      <li>
        <div class="item">
          <div class="number">01</div>
          <div class="item-name active">
            <a href="#">SERVICES</a>
            <p>SERVICES</p>
          </div>
        </div>
      </li>
      <li id="item-show">
        <div class="item">
          <div class="number">02</div>
          <div class="item-name">
            <a href="#">WORK</a>
            <p>WORK</p>
          </div>
        </div>
      </li>
      <li id="item-show">
        <div class="item">
          <div class="number">03</div>
          <div class="item-name">
            <a href="#">OUR PROCESS</a>
            <p>OUR PROCESS</p>
          </div>
        </div>
      </li>
      <li id="item-show">
        <div class="item">
          <div class="number">04</div>
          <div class="item-name">
            <a href="#">OUR STORY</a>
            <p>OUR STORY</p>
          </div>
        </div>
      </li>
      <li id="item-show">
        <div class="item">
          <div class="number">05</div>
          <div class="item-name">
            <a href="#">CONTACT</a>
            <p>CONTACT</p>
          </div>
        </div>
      </li>
    </ul>
  </div>
  <div class="sidebar-footer">
    <div class="social-media-icon">
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <g clip-path="url(#clip0_133_13935)">
            <path d="M24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 17.9895 4.3882 22.954 10.125 23.8542V15.4688H7.07812V12H10.125V9.35625C10.125 6.34875 11.9166 4.6875 14.6576 4.6875C15.9701 4.6875 17.3438 4.92188 17.3438 4.92188V7.875H15.8306C14.34 7.875 13.875 8.80008 13.875 9.75V12H17.2031L16.6711 15.4688H13.875V23.8542C19.6118 22.954 24 17.9895 24 12Z" fill="white"/>
          </g>
          <defs>
            <clipPath id="clip0_133_13935">
              <rect width="24" height="24" fill="white"/>
            </clipPath>
          </defs>
        </svg>
      </div>
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M7.55016 21.75C16.6045 21.75 21.5583 14.2467 21.5583 7.74186C21.5583 7.53092 21.5536 7.3153 21.5442 7.10436C22.5079 6.40746 23.3395 5.54425 24 4.5553C23.1025 4.9546 22.1496 5.21538 21.1739 5.32874C22.2013 4.71291 22.9705 3.74547 23.3391 2.60577C22.3726 3.17856 21.3156 3.58261 20.2134 3.80061C19.4708 3.01156 18.489 2.48912 17.4197 2.31405C16.3504 2.13899 15.2532 2.32105 14.2977 2.8321C13.3423 3.34314 12.5818 4.15471 12.1338 5.14131C11.6859 6.12792 11.5754 7.23462 11.8195 8.2903C9.86249 8.19209 7.94794 7.6837 6.19998 6.7981C4.45203 5.91249 2.90969 4.66944 1.67297 3.14952C1.0444 4.23324 0.852057 5.51565 1.13503 6.73609C1.418 7.95654 2.15506 9.02345 3.19641 9.71999C2.41463 9.69517 1.64998 9.48468 0.965625 9.10592V9.16686C0.964925 10.3041 1.3581 11.4066 2.07831 12.2868C2.79852 13.167 3.80132 13.7706 4.91625 13.995C4.19206 14.1931 3.43198 14.222 2.69484 14.0794C3.00945 15.0574 3.62157 15.9129 4.44577 16.5263C5.26997 17.1398 6.26512 17.4806 7.29234 17.5012C5.54842 18.8711 3.39417 19.6141 1.17656 19.6106C0.783287 19.61 0.390399 19.5859 0 19.5384C2.25286 20.9837 4.87353 21.7514 7.55016 21.75Z" fill="white"/>
        </svg>
      </div>
      <div class="icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
          <path d="M22.2234 0H1.77187C0.792187 0 0 0.773438 0 1.72969V22.2656C0 23.2219 0.792187 24 1.77187 24H22.2234C23.2031 24 24 23.2219 24 22.2703V1.72969C24 0.773438 23.2031 0 22.2234 0ZM7.12031 20.4516H3.55781V8.99531H7.12031V20.4516ZM5.33906 7.43438C4.19531 7.43438 3.27188 6.51094 3.27188 5.37187C3.27188 4.23281 4.19531 3.30937 5.33906 3.30937C6.47813 3.30937 7.40156 4.23281 7.40156 5.37187C7.40156 6.50625 6.47813 7.43438 5.33906 7.43438ZM20.4516 20.4516H16.8937V14.8828C16.8937 13.5562 16.8703 11.8453 15.0422 11.8453C13.1906 11.8453 12.9094 13.2937 12.9094 14.7891V20.4516H9.35625V8.99531H12.7687V10.5609H12.8156C13.2891 9.66094 14.4516 8.70938 16.1813 8.70938C19.7859 8.70938 20.4516 11.0813 20.4516 14.1656V20.4516Z" fill="white"/>
        </svg>
      </div>
    </div>
    <div class="contact-info">
      <span class="nubmer">+91 97249 22880</span>
      <span>tea@tibicle.com</span>
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
<div class="page-content">

  <!-- page-content start -->
  <div class="main-content">
    <section>
      <div class="tiblers-section ml-180">
          <div class="title">Tiblers as in</div>
          <div class="main-title-section">
              <div class="main-title">
              <span>Designer</span> 
              <p>+Developer</p>
              </div>
              <div class="sub-title">
              <p>“We <span> Digitize</span> Your Dreams That Help You <span>Grow</span> ”</p>
              </div>
          </div>
          <div class="mouse-section">
              <span></span>
          </div>
      </div>
    </section>
    <section class="panel container">
      <div class="slider-section " id="demo">
        <div class="slider-header ml-180">
          <div class="title">Our Work</div>
          <button class="project-btn">
              <span>All Projects</span>
              <div class="right-arrow">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/white-right-arrow.svg" alt="arrow">
              </div>
          </button>
        </div>
          
        <div class="slider-inner">
          <div class="slider-content">
              <?php
              $portfolio_query = new WP_Query(array(
                  'post_type' => 'portfolio',
                  'posts_per_page' => -1,
              ));

              if ($portfolio_query->have_posts()) :
                  while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
                      $categories = get_the_terms(get_the_ID(), 'catagory');
                      $category_class = '';

                      $title_slug = sanitize_title(get_the_title());
                      $category_class .= $title_slug . '-project';
                      ?>
                      <?php if (has_post_thumbnail()) : ?>
                          <div class="slider panel <?php echo esc_attr($category_class); ?>">
                              <div class="slider-img">
                                  <div class="image" onmouseover="mouseOver()" onmouseout="mouseOut()">
                                      <?php
                                      $post_thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'thumbnail');
                                      if ($post_thumbnail_url) {
                                          echo '<img src="' . esc_url($post_thumbnail_url) . '" alt="">';
                                      } else {
                                          echo '<img src="' . esc_url(get_template_directory_uri() . '/placeholder-image.jpg') . '" alt="Placeholder Image">';
                                      }
                                      ?>
                                  </div>
                                  <div class="project-name">
                                      <span><?php the_title(); ?></span>
                                  </div>
                              </div>
                              <!-- <div class="project-details"> -->
                                  <!-- <span><?php the_content(); ?></span> -->
                                  <!-- <button class="see-more-btn">See More</button>  -->
                              <!-- </div> -->
                          </div>
                      <?php endif; ?>
                  <?php endwhile;
                  wp_reset_postdata();
              else :
                  echo 'No services found.';
              endif;
              ?>
          </div>
          <div class="latest-work">
              We’d like it if you look at our latest Work
          </div>
        </div>

      </div>
    </section>
    <section>
      <div class="services-section ml-180">
          <div class="services-content">
              <div class="header-title">
                  <span class="border-text">OUR</span>
                  <span>Services</span>
              </div>
              <div class="services-list">
                  <div class="services-item">
                      <div class="services-icon dark-sky">
                          <div class="icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-development-icon.svg" alt="logo">
                          </div>
                      </div>
                      <div class="services-name">Web Development</div>
                  </div>
                  <div class="services-item">
                      <div class="services-icon dark-pink">
                          <div class="icon ">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/cms-development-icon.svg" alt="logo">
                          </div>
                      </div>
                      <div class="services-name">CMS Development</div>
                  </div>
                  <div class="services-item">
                      <div class="services-icon dark-brown">
                          <div class="icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-development-icon.svg" alt="logo">
                          </div>
                      </div>
                      <div class="services-name">Mobile App Design</div>
                  </div>
                  <div class="services-item">
                      <div class="services-icon light-brown">
                          <div class="icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-development-icon.svg" alt="logo">
                          </div>
                      </div>
                      <div class="services-name">Web Development</div>
                  </div>
                  <div class="services-item">
                      <div class="services-icon light-pink">
                          <div class="icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-development-icon.svg" alt="logo">
                          </div>
                      </div>
                      <div class="services-name">Web Development</div>
                  </div>
                  <div class="services-item">
                      <div class="services-icon light-sky">
                          <div class="icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-development-icon.svg" alt="icon">
                          </div>
                      </div>
                      <div class="services-name">Web Development</div>
                  </div>
              </div>
          </div>
      </div>
    </section>
    <section>
      <div class="section our-life-section ">
        <div class="our-life-content ml-180">
          <div class="tree-image">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/tree-icon.svg" alt="tree-icon">
          </div>
          <div class="tree-image tree-image-two">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/tree-icon.svg" alt="tree-icon">
          </div>
          <div class="tree-image tree-image-three">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/tree-icon.svg" alt="tree-icon">
          </div>
            <div class="header-title">
                <span class="border-text">OUR</span>
                <span>LIFE@T</span>
            </div>
            <div class="our-life">
              <div class="life-section trips-section">
                <h4>T</h4>
                <div class="trips-text">
                  <span>RIPS</span>
                </div>
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/car.svg" alt="car-icon">
                </div>
              </div>
              <div class="life-section rejoice-section">
                <h4>R</h4>
                <div class="trips-text">
                  <span>EJOICE</span>
                </div>
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/rejoice-icon.svg" alt="rejoice-icon">
                </div>
              </div>
              <div class="life-section dinner-section">
                <h4>D</h4>
                <div class="dinner-text">
                  <span>R</span>
                  <span>E</span>
                  <span>N</span>
                  <span>N</span>
                  <span>I</span>
                </div>
                <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/dinner-icon.svg" alt="dinner-icon">
                </div>
              </div>
            </div>
            <p>
              “The strength of the team 
              is each individual member. 
              The strength of each member 
              is the team.” - <span>Tibicle LLP.</span> 
            </p>
        </div>
      </div>
    </section>
    <section>
      <div class="section hire-section">
          <div class="hire-content ml-180">
              <div class="left-section">
                  <div class="header-title">
                      <span class="border-text">Hire Tibicle</span>
                      <span>For Your Dream</span>
                  </div>
                  <p>In our world, there's no such thing as having too many clients</p>
                  <div class="contact-info">
                      <div class="contact-section email-section">
                          <div class="phone-icon bg-pink">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/phone-icon.svg" alt="icon">             
                          </div>
                          <div class="contact-details">
                              <span>Career Email</span>
                              <div class="phone-number">info@tibicle.com</div>
                          </div>
                      </div>
                      <div class="contact-section">
                          <div class="phone-icon bg-yellow">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/phone-icon.svg" alt="icon">             
                          </div>
                          <div class="contact-details">
                              <span>Phone</span>
                              <div class="phone-number">+91 97249 22880</div>
                          </div>
                      </div>
                  </div>
                  <form>
                      <div class="input-field">
                          <input type="text" placeholder="Name*">
                      </div>
                      <div class="input-field">
                          <input type="text" placeholder="Email*">
                      </div>
                      <div class="input-field">
                          <input type="text" placeholder="Phone Number*">
                      </div>
                      <div class="input-field">
                          <input type="text" placeholder="Website">
                      </div>
                      <div class="input-field textarea-field">
                          <textarea Message cols="30" rows="5" placeholder="Write Message"></textarea>
                      </div>
                      <div class="btn-section">
                        <a href="#">
                          <button class="btn icon-btn">
                            Let’s Connect
                            <div class="icon">
                              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/purple-arrow.svg" alt="arrow-icon">
                            </div>
                          </button>
                        </a>
                      </div>
                  </form>
              </div>
              <div class="right-section">
                  <div class="image">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/hire-section-img.svg" alt="img">
                  </div>
              </div>
          </div>
      </div>
    </section>
    <section>
      <div class="join-section ml-180">
        <div class="join-content">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/join-section-bg.svg" alt="bg">
          </div>
          <div class="left-section">
            <div class="header-title">
              <span class="border-text">JOIN</span>
              <span>Tibicle</span>
            </div>
            <div class="border"></div>
            <p>We're always on the lookout for talented.</p>
            <a href="#">
              <button class="btn icon-btn">
                Apply Now
                <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/arrow-white.svg" alt="arrow-icon">
                </div>
              </button>
            </a>
          </div>
          <div class="right-section">
            <div class="image-icon">
              <img src="<?php echo get_template_directory_uri(); ?>/asset/img/join-section-icon.svg" alt="bgjoin-section-icon">
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>


<?php 



get_footer();

?>
```<script>
   gsap.registerPlugin(ScrollTrigger);

/*-- ScrollTrigger 1: sections scroll and snap vertically ------*/

let sections = gsap.utils.toArray('section');
let snap = value => value; // a snapping function that we'll set later in a "refresh" event listener because we need all the ScrollTrigger positions to get calculated first

// this ScrollTrigger covers the entire page and is just for snapping logic
ScrollTrigger.create({
  start: 0,
  end: "max",
  snap: {
    snapTo: (value, self) => snap(value, self.direction),
    duration: {min: 0.6, max: 0.9},
    delay: 0,
  }
});

/*---ScrollTrigger 2: horizontal scroll in section ".container" --*/

let panels = gsap.utils.toArray(".container .panel");
 
let panelTween = gsap.to(panels, {
xPercent: -100 * (panels.length - 1),
ease: "none",
scrollTrigger: {
  trigger: ".container",
  start: "top top",
  end: "+=" + (innerWidth * 3),
  markers: true,
  pin: true,
  scrub: 1,
}
});

// we create a ScrollTrigger for each section just so we can figure out where they're positioned (when their top hits the top of the viewport)
let sectionTriggers = sections.map(section => ScrollTrigger.create({
trigger: section,
start: "top top",
refreshPriority: -1 // just so they get calculated last
}));

// after ScrollTrigger refreshes, we create a snap function that's directional. 
ScrollTrigger.addEventListener("refresh", () => {
let start = panelTween.scrollTrigger.start,
  end = panelTween.scrollTrigger.end,
  each = (end - start) / (panels.length - 1), // each panel takes up a certain distance
  max = ScrollTrigger.maxScroll(window),
  sectionPositions = sectionTriggers.map(trigger => trigger.start / max); // snapping values must be in ratios (between 0 and 1)
panels.forEach((panel, i) => sectionPositions.push((start + i * each) / max)); // add the panel positions
snap = ScrollTrigger.snapDirectional(sectionPositions); // a snapping function that we can just feed a scroll value to and a direction and it'll spit back the closest one (ratio/progress) in that direction
});

var demo5 = new CircleType(document.getElementById('demo5'))
  .radius(400);
$(demo5.element).fitText();
</script>
<?php

