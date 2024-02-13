<?php 
get_header();
?>
 <?php get_sidebar() ?>
  
<div class="project-details-container ml-180">
    <div class="project-details-content">
        <div class="project-details">
            <div >
            <div class="title"><?php echo strtoupper(get_the_title()); ?></div>
                <div class="details-section">
                    <div class="left-side">
                        <div class="sub-title">Info</div>
                        <p>
                            <?php $project_info = get_field("project_info");
                            echo $project_info; ?>
                        </p>
                    </div>
                   

                    <div class="right-side">
                        <ul>
                            <li class="key-features">
                                <div class="sub-title">SERVICES</div>
                            </li>
                            
                             <?php if( have_rows('project_services') ): ?>
                            <?php while ( have_rows('project_services') ) : the_row(); ?>
                                <li>
                                    <div class="icon">
                                        <img src="<?php echo get_template_directory_uri(); ?>/asset/img/light-gray-arrow.svg" alt="light-gray-arrow">
                                    </div>
                                    <div class="details-text">
                                        <?php echo get_sub_field('services') . '<br>'; ?>
                                    </div>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <div class="technologies-section">
                    <div class="sub-title">Technologies</div>
                    <div class="technologies-content">

                    <?php if (have_rows('project_technologies')) : ?>
                        <?php while (have_rows('project_technologies')) : the_row(); ?>
                            <div class="technologies">
                                <div class="technologies-name">
                                    <?php $image_url = get_sub_field('technologies_images'); ?>
                                    <?php if ($image_url) : ?>
                                        <img src="<?php echo $image_url; ?>" alt="Technology Icon">
                                    <?php endif; ?>
                                </div>
                                <div class="technologies-name"><?php echo get_sub_field('technologies_name'); ?></div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </div>
                </div>
                <p>Download now,</p>
                <div class="button-section">
                    <a href="#">
                        <button class="btn icon-btn">
                            <span>
                                <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5405 6.16383L2.98681 0.702851C2.75418 0.570018 2.49095 0.500103 2.22307 0.5C1.95183 0.50009 1.68541 0.571781 1.45075 0.707829C0.977842 0.982175 0.684082 1.49223 0.684082 2.03899V12.961C0.684082 13.5077 0.977842 14.0178 1.45062 14.2921C1.68527 14.4283 1.95172 14.5 2.22301 14.5001C2.49033 14.5001 2.75447 14.4299 2.98675 14.2971L12.5403 8.83611C13.0186 8.5627 13.3156 8.05078 13.3156 7.49997C13.3156 6.94916 13.0187 6.43724 12.5405 6.16383ZM8.40056 4.87255L7.08881 6.6997L3.95116 2.3292L8.40056 4.87255ZM2.16284 13.5613C2.07753 13.5531 1.99384 13.5282 1.91911 13.4848C1.82748 13.4314 1.75143 13.355 1.6985 13.2631C1.64558 13.1712 1.61764 13.0671 1.61744 12.961V2.03893C1.61764 1.93288 1.64559 1.82872 1.69852 1.73683C1.75146 1.64493 1.82753 1.5685 1.91917 1.51512C1.99368 1.47229 2.07644 1.44577 2.16197 1.43734L6.5143 7.49997L2.16284 13.5613ZM3.95116 12.6708L7.08881 8.30023L8.40056 10.1274L3.95116 12.6708ZM12.0773 8.0257L9.2152 9.6617L7.66327 7.49997L9.2152 5.33824L12.0773 6.97424C12.2654 7.08182 12.3823 7.28324 12.3823 7.49997C12.3823 7.7167 12.2655 7.91818 12.0773 8.0257Z" fill="#5C5C5C"/>
                                </svg>
                            </span>
                            Google Play
                          <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/purple-arrow.svg" alt="arrow-icon">
                          </div>
                        </button>
                    </a>
                    <a href="#">
                        <button class="btn icon-btn">
                            <span>
                            <svg width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.1289 0.5H2.87109C1.28797 0.5 0 1.78797 0 3.37109V11.6289C0 13.212 1.28797 14.5 2.87109 14.5H11.1289C12.712 14.5 14 13.212 14 11.6289V3.37109C14 1.78797 12.712 0.5 11.1289 0.5ZM13.1797 11.6289C13.1797 12.7597 12.2597 13.6797 11.1289 13.6797H2.87109C1.74029 13.6797 0.820312 12.7597 0.820312 11.6289V3.37109C0.820312 2.24029 1.74029 1.32031 2.87109 1.32031H11.1289C12.2597 1.32031 13.1797 2.24029 13.1797 3.37109V11.6289Z" fill="#5C5C5C"/>
                                <path d="M8.35751 3.87781C8.31023 3.70144 8.19714 3.554 8.03901 3.46273C7.71263 3.27428 7.29373 3.38647 7.10522 3.71295L7 3.89517L6.89478 3.71292C6.7063 3.38652 6.28742 3.27428 5.96099 3.4627C5.63456 3.65118 5.52232 4.07006 5.71077 4.39652L6.21064 5.26233L4.3662 8.45704H3.02148C2.64455 8.45704 2.33789 8.7637 2.33789 9.14063C2.33789 9.51756 2.64455 9.82422 3.02148 9.82422H8.21297L7.42361 8.45704H5.94489L8.2892 4.39655C8.3805 4.23842 8.40479 4.05417 8.35751 3.87781Z" fill="#5C5C5C"/>
                                <path d="M10.9784 8.45701H9.63373L8.10502 5.8092L7.31569 7.17639L9.68923 11.2875C9.78053 11.4456 9.92792 11.5587 10.1043 11.606C10.1632 11.6218 10.223 11.6296 10.2824 11.6296C10.4008 11.6296 10.5177 11.5986 10.6231 11.5377C10.9495 11.3492 11.0618 10.9303 10.8733 10.6039L10.4231 9.8242H10.9784C11.3554 9.8242 11.662 9.51754 11.662 9.1406C11.662 8.76367 11.3554 8.45701 10.9784 8.45701ZM3.26105 10.3711L3.1266 10.6039C2.93814 10.9304 3.05039 11.3493 3.37682 11.5377C3.48033 11.5977 3.59785 11.6292 3.71747 11.6292C3.95388 11.6292 4.18414 11.5065 4.31064 11.2875L4.83974 10.3711H3.26105Z" fill="#5C5C5C"/>
                            </svg>

                            </span>
                            App Store
                          <div class="icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/asset/img/purple-arrow.svg" alt="arrow-icon">
                          </div>
                        </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="image-section ">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Rectangle 1452.png" alt="image">
                <!-- <?php
                    $images = get_field('project_gallery'); 
                    if ($images) :
                        foreach ($images as $image) : ?>
                                <div class="image">

                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                            </div>
                        <?php endforeach;
                    else : ?>
                        <!-- <img src="<?php echo get_template_directory_uri(); ?>/asset/img/Rectangle 1452.png" alt="image"> -->
                    <?php endif;
                    ?> -->
            </div>
        </div>
    </div>
</div>
</div>



<?php 



get_footer();

?> 
<script type="text/javascript">

</script>
<?php 