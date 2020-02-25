

               <?php 
               $thiscat = get_category( get_query_var( 'cat' ) );
               $catid = $thiscat->cat_ID;
               $parent_list = (explode (',',get_category_parents($catid,false,',')));
               $parent_name = ($parent_list[0]);
               $parent = get_cat_ID( $parent_name );
               
               $args = array(
                  'post_status' => 'publish', 
                  'post_type' => 'post', 
                  'showposts' => 1, 
                  'cat' => $catid, 
                  );
               ?>
               <?php $getposts = new WP_query($args); ?>
               <?php global $wp_query; $wp_query->in_the_loop = true; ?>
               <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
               <div class="cate-primary col-12 col-md-6 cate-box px-0 pr-md-3 ">
                                 <div class="back">
                                    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                                    <div class="front">
                                       <h2 class="limit-line two-line cate-title"><a href="<?php the_permalink() ?>"> <?php the_title(); ?></a></h2>
                                       <p class="mb-0">
                                          <span class="category-info"><?php the_category(','); ?></span>
                                          <span class="v"> - </span>
                                          <span class="category-info"><?php echo get_the_date('H:i A d/m/Y'); ?></span>
                                       </p>
                                    </div>
                                 </div>
                              </div>
               <?php endwhile; wp_reset_postdata(); ?>

               <div class="col-12 col-md-6 cate-box px-0 pl-md-3">
               <?php 
                  $args = array(
                     'post_status' => 'publish', 
                     'post_type' => 'post', 
                     'showposts' => 2, 
                     'cat' => $catid, 
                  );
               ?>
               <?php $getposts = new WP_query($args); ?>
               <?php global $wp_query; $wp_query->in_the_loop = true; ?>
               <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
               
                  <div class="cate-item">
                     <div class="back">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                        <div class="front">
                           <h2 class="limit-line two-line cate-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                           <p class="mb-0">
                              <span class="category-info"><?php the_category(','); ?></span>
                              <span class="v"> - </span>
                              <span class="category-info"><?php echo get_the_date('H:i A d/m/Y'); ?></span>
                           </p>
                        </div>
                     </div>
                  </div>
                                
               <?php endwhile; wp_reset_postdata(); ?>
               </div>          
