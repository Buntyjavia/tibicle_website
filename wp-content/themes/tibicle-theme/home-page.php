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
  <?php get_sidebar() ?>

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
    <section class="container">
     <div class="slider-section" id="demo">
      <div class="slider-header ml-180">
        <div class="title">Our Work</div>
        <button class="project-btn">
            <span><a href="http://localhost/tibicle/all-projects/">All Projects</a></span>
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
<section class="panel">
    <div class="section services-section ml-180">
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
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-development-icon.svg" alt="logo">
                        </div>
                    </div>
                    <div class="services-name">Web Development</div>
                </div>
            </div>
        </div>
    </div>
  </div>

  </section>
<?php 



get_footer();

?>
<script>
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
</script>
<?php

