<div class="gallery-box w-100 m-auto pt-4">
        <h2 class="text-center pb-2">Our Gallery</h2>
        <div class="icon-gallery-box text-center pb-5">
            <i class="">O</i>
        </div>
        <div class="row">
            <div class="col-12 d-flex">
            <?php 
            $args = array(
             'posts_per_page' => 4,
            'post_type' => 'images',
             'order' => 'DESC',
             'orderby' => 'post_date'
                );
            ?> <?php  $query = new WP_Query( $args ); ?>
       <?php if ( $query->have_posts() ) :
				 	while ( $query->have_posts() ) :
					$query->the_post(); ?>
        
                <div class="col-3 img-gallery-box"><img class="img-gallery" src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
    <?php
					endwhile; endif;
                    
        ?>
            </div>
            <div class="col-12 d-flex">
                <div class="col-3 img-gallery-box"><img class="img-gallery" src="<?php the_post_thumbnail_url() ?>" alt=""></div>
            </div>
        </div>
    </div>