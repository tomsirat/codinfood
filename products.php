<div class="container d-flex flex-column justify-content-center">
        <div class="text-center ">
            <h2 class="font-weight-bold"> Featured Products</h2>
            <div class="m-auto d-flex justify-content-center" style="width: 23rem;">
                <hr class="mx-auto" style="width: 25%; border-color: black;"><p class="m-auto pb-4">Our Journey</p> <hr class="mx-auto" style="width: 25%; border-color: black;">
            </div>
        </div>
        <div class="row d-flex  justify-content-center">
  
        <?php
        
         $args = array(
          'posts_per_page' => 4,
					'post_type' => 'products',
          'order' => 'DESC',
          'orderby' => 'post_date'
				 );
				 $query = new WP_Query( $args );
				if ( $query->have_posts() ) {
				 	while ( $query->have_posts() ) {
					$query->the_post();
						?>
            <!-- product -->
            <div class="card rounded-0 border-0 my-2 mx-2" style="width: 16.2rem;">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top rounded-0" alt="..." style="width: 16.2rem;height: 14rem;">
                <div class="card-body text-center">
                  <small class="category-name text-muted"><?php the_terms( get_the_ID() , 'categories' ); ?></small>
                  <p class="card-text"><?php the_title();?></p>
                  <p class="text-success">&dollar; <?php the_field( 'price' ); ?></p>
                  <a href="#" class="btn btn-light rounded-0" style="border: double;border-color: lightgray;">Go somewhere</a>
                </div>
              </div>
               <!-- end of product -->
               <?php
					}
				 }
        ?>
        <?php wp_reset_postdata() ?>
        </div>
    </div>