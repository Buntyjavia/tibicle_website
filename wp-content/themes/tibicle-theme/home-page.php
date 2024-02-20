<?php 

/*
*
*
 Template Name: Home page
*
*
*/



?>
<?php get_header(); ?>
<?php get_sidebar(); ?>

  <div class="main-content">

    <section class="tiblers-section ml-180">
    <?php echo do_shortcode('[tiblers]'); ?>
    </section>

    <section class="our_project_scroll">
     <?php echo do_shortcode('[ourwork_section]'); ?>
    </section>

    <section class="services-section ml-180">
    <?php echo do_shortcode('[our_services]'); ?>
    </section>
    
    <section class="section our-life-section">
    <?php echo do_shortcode('[life_at_section]'); ?>
    </section>

    <section class="section hire-section">
    <?php echo do_shortcode('[hire_section]'); ?>
    </section>
  
    <section class="section join-section ml-180">
    <?php echo do_shortcode('[join_tibicle_section]'); ?>
    </section>

    <?php get_footer(); ?>
  </div>



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

/*---ScrollTrigger 2: horizontal scroll in section ".all_project_scroll" --*/

let project_cards = gsap.utils.toArray(".our_project_scroll .project_card");
 
let project_cardsTween = gsap.to(project_cards, {
xPercent: -100 * (project_cards.length - 1),
ease: "none",
scrollTrigger: {
  trigger: ".our_project_scroll",
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
let start = project_cardsTween.scrollTrigger.start,
  end = project_cardsTween.scrollTrigger.end,
  each = (end - start) / (project_cards.length - 1), // each project_cards takes up a certain distance
  max = ScrollTrigger.maxScroll(window),
  sectionPositions = sectionTriggers.map(trigger => trigger.start / max); // snapping values must be in ratios (between 0 and 1)
project_cards.forEach((project_cards, i) => sectionPositions.push((start + i * each) / max)); // add the project_cards positions
snap = ScrollTrigger.snapDirectional(sectionPositions); // a snapping function that we can just feed a scroll value to and a direction and it'll spit back the closest one (ratio/progress) in that direction
});

</script>
<?php

