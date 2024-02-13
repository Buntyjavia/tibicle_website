<?php 

/*
*
*
 Template Name: All-Projects
*
*
*/

get_header();
?>
 <?php get_sidebar() ?>

 <!-- page-content start -->
 <div class="main-content">
    <div class="projects-section ml-180" id="Title">
      <div class="projects-header">
        <div class="heading-section">
            <div class="header-title">
                <span class="border-text">OUR</span>
                <span>Work</span>
            </div>
          <div class="btn-section">
            <button class="project-btn active">
              <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-mobile-icon.svg" alt="web-mobile-icon">
              </div>
              <span>All</span>
            </button>
            <button class="web-mobile-btn web">
              <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/web-icon.svg" alt="web-icon">
              </div>
            </button>
            <button class="web-mobile-btn mobile">
              <div class="icon">
                  <img src="<?php echo get_template_directory_uri(); ?>/asset/img/mobile-icon.svg" alt="web-icon">
              </div>
            </button>
          </div>
        </div>
      </div>
      <div class="project-list" id="list-section">
      <?php
$portfolio_query = new WP_Query(array(
    'post_type'      => 'portfolio',
    'posts_per_page' => -1,
));

if ($portfolio_query->have_posts()) :
    while ($portfolio_query->have_posts()) : $portfolio_query->the_post();
        $categories     = get_the_terms(get_the_ID(), 'catagory');
        $category_class = '';

        if ($categories && !is_wp_error($categories)) {
            foreach ($categories as $category) {
                $category_class .= ' ' . $category->slug;
            }
        }
        ?>
        <?php if (has_post_thumbnail()) : ?>
            <div class="project <?php echo esc_attr($category_class); ?>" data-aos="zoom-in" data-aos-duration="1000">
                <div class="project-img">
                    <?php
                   $project_image_in_all_projects = get_field('project_image_in_all_projects');
                   if ($project_image_in_all_projects) {
                       if (is_array($project_image_in_all_projects)) {
                           // Handle array of images, maybe choose the first one
                           $image_url = reset($project_image_in_all_projects);
                       } else {
                           $image_url = $project_image_in_all_projects;
                       }
                       echo '<img src="' . esc_url($image_url) . '" alt="' . get_the_title() . '">';
                   } else {
                       echo '<img src="' . esc_url(get_template_directory_uri() . '/asset/img/placeholder-image.jpg') . '" alt="Placeholder Image">';
                   }
                   
                    ?>
                </div>
                <div class="project-concept">
                    <?php the_content(); ?>
                </div>
                <div class="project-inner">
                    <div class="arrow-icon">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/asset/img/Arrow-black.svg" alt="arrow">
                    </div>
                    <div class="project-name">
                        
                        <span><?php the_title(); ?></span>
                        <span class="border-text"></span>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endwhile;
    wp_reset_postdata();
else :
    echo 'No services found.';
endif;
?>
 </div>
      </div>
    </div>
  </div>

  <!-- page-content start -->
<?php 



// get_footer();

?>  

<script type="text/javascript">


 $(window).scroll(function(){
  
	if ($(this).scrollTop() > 0) {
	   $('#Title').addClass('main-projects');
	   $('#projectCard').addClass('projects-animate');
	} else {
	   $('#Title').removeClass('main-projects');
	   $('#projectCard').addClass('projects-animate');
	}
  });
  
  
  $('.btn-section button').click(function(){
	  $('.project-btn').removeClass("active");
	  $(this).addClass("active");
  });
	  
  document.addEventListener("DOMContentLoaded", function() {
	  const allBtn = document.querySelector('.project-btn');
	  const webBtn = document.querySelector('.web-mobile-btn.web');
	  const mobileBtn = document.querySelector('.web-mobile-btn.mobile');
	  const buttons = document.querySelectorAll('.web-mobile-btn');
	  const projects = document.querySelectorAll('.project');
  
	  allBtn.addEventListener('click', function() {
		  toggleActiveClass(allBtn);
		  showAllProjects();
	  });

	  webBtn.addEventListener('click', function() {
		  toggleActiveClass(webBtn);
		  filterProjects('web');
	  });
  
	  mobileBtn.addEventListener('click', function() {
		  toggleActiveClass(mobileBtn);
		  filterProjects('mobile');
	  });
  
	  function toggleActiveClass(button) {
		  buttons.forEach(btn => btn.classList.remove('active'));
		  button.classList.add('active');
	  }
  
	  function showAllProjects() {
		  projects.forEach(project => {
			  project.style.display = 'block';
		  });
	  }
  
	  function filterProjects(category) {
		  projects.forEach(project => {
			  if (!project.classList.contains(category)) {
				  project.style.display = 'none';
			  } else {
				  project.style.display = 'block';
			  }
		  });
	  }
  });
  

</script>
<?php
