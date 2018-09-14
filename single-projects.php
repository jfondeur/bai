<?php get_header(); 
$location = get_field('location');
$pc = get_the_category();

?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <div class="projectTop mb-5">
                <div class="projectImage">
                    <?php the_post_thumbnail('projects'); // Fullsize image for the single post ?>
                </div>
                <div class="container pt-3">
                    <div class="row">
                        <div class="col-md-12">
                            <span class="projectCat"><?php echo $pc[0]->name; ?></span>
                            <span class="projectLocation"><?php echo $location->name; ?></span>
                            <h1><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container projectContent">
                <div class="row">
                    <div class="col-md-8">
                        <?php the_content();?>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <p class="strong">Status</p>
                                <p><?php the_field('status') ?></p>
                                <p class="strong">Location</p>
                                <p><?php the_field('location_text') ?></p>
                                <p class="strong">Developer</p>
                                <p><?php the_field('developer') ?></p>
                                <p class="strong">General partner of EB5 investors</p>
                                <p><?php the_field('general_partner_of_eb5_investors') ?></p>
                                <p class="strong">Regional Center</p>
                                <p><?php the_field('regional_center') ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="strong">Counselor Attorney</p>
                                <p><?php the_field('counselor_attorney') ?></p>
                                <p class="strong">EB5 Capital Raise</p>
                                <p>$<?php the_field('eb5_capital_raise') ?></p>
                                <p class="strong">Total Project Capital</p>
                                <p>$<?php the_field('total_project_capital') ?></p>
                                <p class="strong">Total Jobs Impact</p>
                                <p><?php the_field('total_jobs_impact') ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        <h5 class="brown">Brochure</h5>
                        <p>For more details download the  project brochure</p>
                        <?php get_template_part('include/optin')?>
                        <span>*no third parties | Spam free</span>
                        <h5 class="brown mb-3 mt-5">Download Brochure</h5>
                        <p><a href="#" class="btn btn-outline-primary"><i class="fas fa-file-pdf"></i>  EB5 Investment Brochure</a></p>
                        <p><a href="#" class="btn btn-outline-primary"><i class="fas fa-file-pdf"></i>  Private Equity Brochure</a></p>
                        <h5 class="brown mb-3 mt-5">Videos</h5>
                        <p><a href="#" class="btn btn-outline-primary"><i class="fas fa-file-video"></i>  EB5 Investment Video</a></p>
                        <p><a href="#" class="btn btn-outline-primary"><i class="fas fa-file-video"></i>  Private Equity Video</a></p>
                    </div>
                </div>
            </div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

    <div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h3 class="brown mb-3 mt-5">Related Projects</h3>
        </div>
    </div>
    <?php
            // Query Arguments
            $args = array(
                'post_type' => array('projects'),
                'posts_per_page' => 3,
                // 'orderby' => 'rand',
                'category_name' => $pc[0]->cat_name,
            );

            // The Query
            $projects = new WP_Query( $args );

            // The Loop
            if ( $projects->have_posts() ) : ?>
            <div class="row">
            <?php while ( $projects->have_posts() ) : $projects->the_post(); 
            $i++;
            $project_img_url = get_the_post_thumbnail_url(get_the_ID(),'project');
            $project_title = get_the_title();
            $link = get_the_permalink(); 
            $location = get_field('location');
            $c = get_the_category();
            ?>
                <!-- Custom loop -->
                <div class="col-md-4">
                    <div class="card">
                        <a href="<?php echo $link; ?>">
                            <img class="card-img-top" src="<?php echo esc_url($project_img_url) ?>" alt="Card image cap">
                        </a>
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <a href="<?php echo $link; ?>"class="brown"><h5 class="card-title"><?php echo $project_title;?></h5></a>
                                <p class="card-text"><?php echo $location->name; ?></p>
                            </div>
                            <p class="card-text"><?php echo $c[0]->cat_name; ?></p>
                        </div>
                    </div>
                </div>
                <!-- Custom loop -->
            <?php endwhile; 
            
            endif; ?>
            </div> 
            <?php wp_reset_postdata();?>
            <!-- Loop -->
    </div>

	</section>
	<!-- /section -->
	</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
