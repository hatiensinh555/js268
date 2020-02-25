<?php get_header(); ?>
<div class="theme-gray">
<section class="breadcrumbCus">
         <div class="main">
            <a href="diem-tin-nha-cai">điểm tin nhà cái</a>
            <a href="nha-cai-uy-tin">nhà cái uy tín</a>
         </div>
      </section>
      <!-- <?php get_sidebar(); ?> -->


      <section class="category-wrap mt-4">
         <div class="main">
            <div class="col-12 px-md-0 d-flex flex-wrap px-0">

               <?php 
               $args = array(
                  'post_status' => 'publish', 
                  'post_type' => 'post', 
                  'showposts' => 1, 
                  'cat' => 5, 
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
                     'cat' => 4, 
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
            </div>
         </div>
      </section>
      <!-- **********************************category***************************************** -->
      <section class="category-list-wrap mt-5">
         <div class="main">
            <div class="col-12 px-0 d-flex flex-wrap">
               <div class="category-list-left">
<?php $args = array ( 'posts_per_page' => -1, 'category' => '4,5' );
    $myposts = get_posts ( $args );
    foreach ($myposts as $post) : setup_postdata( $post ); ?>
    <div class="category-list-item d-flex flex-wrap mb-30">
                     <div class="col-12 col-lg-4 category-list-item-img px-lg-0">
                        <a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
                     </div>
                     <div class="col-12 col-lg-8 category-list-item-info">
                        <h3 class="limit-line two-line title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                        <p class="limit-line four-line des"><?php echo get_the_excerpt(); ?></p>
                        <p class="mb-0">
                           <span class="category-info tag-name"><?php the_category(','); ?></span>
                           <span class="tag-time"> - </span>
                           <span class="category-info tag-time"><?php echo get_the_date('H:i A d/m/Y'); ?></span>
                        </p>
                     </div>
                  </div>
<?php endforeach; wp_reset_postdata(); ?>

               </div>
               <div class="category-list-right">
                  <img src="<?php bloginfo('template_directory') ?>/images/dont.png" alt="ads">
                  <div class="ads-img mb-30 text-center">
                  </div>
                  <?php get_template_part('laureates') ?>
                  <?php get_template_part('discuss'); ?>
                  <div class="trick mb-30 theme-white border-same p-30">
                     <div class="box-header text-center mb-30">
                        <img src="<?php bloginfo('template_directory') ?>/images/icon3.png" alt="icon">
                        <p>mẹo chơi game</p>
                     </div>
                     <div class="box-body">
                        <ul>
                           <li>
                              <p class="trick-item dot"><a href="#">Những cách giải đen cờ bạc hiệu quả nhất của dân chơi</a></p>
                           </li>
                           <li>
                              <p class="trick-item dot"><a href="#">Những cách giải đen cờ bạc hiệu quả nhất của dân chơi</a></p>
                           </li>
                           <li>
                              <p class="trick-item dot"><a href="#">Những cách giải đen cờ bạc hiệu quả nhất của dân chơi</a></p>
                           </li>
                           <li>
                              <p class="trick-item dot"><a href="#">Những cách giải đen cờ bạc hiệu quả nhất của dân chơi</a></p>
                           </li>
                           <li>
                              <p class="trick-item dot"><a href="#">Những cách giải đen cờ bạc hiệu quả nhất của dân chơi</a></p>
                           </li>
                           
                           <div>
                              <button class="btn btn-def btn-blue">Xem thêm</button>
                           </div>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- **********************************category***************************************** -->


<?php if(paginate_links()!='') {?>
   <div class="quatrang main">
      <?php
      global $wp_query;
      $big = 999999999;
      echo paginate_links( array(
         'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
         'format' => '?paged=%#%',
         'prev_text'    => __('«'),
         'next_text'    => __('»'),
         'current' => max( 1, get_query_var('paged') ),
         'total' => $wp_query->max_num_pages
         ) );
      ?>
   </div>
   <?php } ?>
   
   
   
   
   <?php get_footer(); ?>
   <?php wp_footer(); ?>
</body>

</html>