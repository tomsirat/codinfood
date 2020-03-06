<div class="container d-flex flex-column justify-content-center">
    <div class="text-center ">
        <h2 class="font-weight-bold"> Latest From Blog</h2>
        <div class="m-auto d-flex justify-content-center" style="width: 23rem;">
            <hr class="mx-auto" style="width: 25%; border-color: black;"><p class="m-auto pb-4">Our Journey</p> <hr class="mx-auto" style="width: 25%; border-color: black;">
        </div>
    </div>
    <div class="row d-flex  justify-content-center">



    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <!-- Article Card -->
        <div class="card rounded-0 card-profile my-2 mx-2" style="width: 22rem;">
                <img src="<?php the_post_thumbnail_url(); ?>" class="card-img-top rounded-0 cover-picture" alt="..."
                    style="height: 200px;position: relative;">
                <div class="profile-img-div " style="width: 22rem; position: absolute; top: 152px; text-align: center;">
                    <img src="https://picsum.photos/200" alt="" class="rounded-circle profile-picture"
                        style="border: 5px solid white; width: 90px; height: 90px;">
                </div>
                <div class="card-body text-center pt-5 ">
                    <h5 class="pt-3"><?php the_title(); ?> </h5>
                    <small class="text-muted"><?php the_excerpt(); ?>
                    </small>
                </div>
                <div class="d-flex align-items-center text-white" style="background-color: #90EE90;">
                    <div style="width: 11rem;">
                        <p class="m-0 p-2">Comments</p>
                    </div>
                    <div class="text-right " style="width: 11rem;">
                        <p class="m-0 p-2"><?php $cat = get_the_category(); echo $cat[0]->cat_name;?>
                    </div>
                </div>
            </div>
        <!-- End of Article card -->
        <?php
					endwhile; endif;
                    
        ?>
                <?php wp_reset_postdata() ?>
        
        
    </div>
</div>
