
      <?php get_header(); ?>
      </div>

   </section>
   
   <div class="theme-gray">
      <section class="breadcrumbCus">
         <div class="main">
            
            <?php 
            $post_categories = wp_get_post_categories( get_the_id() );
            $cats = array();

            foreach($post_categories as $c){
               $cat = get_category( $c );
               $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug, 'id' => $cat_id );
               
               echo '<a href="'.get_category_link($cat).'">' . $cat->name . '</a>';
            }

            ?>
         </div>
         
      </section>
      <section class="theme-white article-title">
         <div class="main">
                  <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?>

            <h1 class="main-title"><?php the_title(); ?></h1>
         </div>
      </section>
      <!-- <?php get_sidebar(); ?> -->
      <!-- **********************************sliderbar***************************************** -->
      <!-- **********************************category***************************************** -->
      <section class="article-wrap">
         <div class="main">
            <div class="col-12 px-0 d-flex flex-wrap">
               <div class="article-content">
                  <div class="post-content theme-white p-30">

                  <?php if (have_posts()) : ?>
                  <?php while (have_posts()) : the_post(); ?>
                  <p class="time"><?php echo get_the_date('H:i A d/m/Y'); ?></p>
                  <?php the_content(); ?>

                  <?php endwhile; else : ?>
                  <?php endif; ?>
                     
                  </div>
                  <div class="related-post mb-30">
                     <h4 class="related-name">tin liên quan</h3>
                     <div class="related-content d-flex flex-wrap col-12 px-0">
                        <!-- <div class="related-item col-12 col-md-6 px-0 pr-md-3">
                           <div class="related-img theme-white">
                              <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/related1.jpg" alt="related"></a>
                           </div>
                           <div class="related-item-info theme-white">
                              <h5 class="title">Những cách giải đen cờ bạc hiệu quả nhất của dân chơi</h5>
                              <p class="mb-0">
                                 <span class="tag">Tin nhà cái</span>
                                 <span class="time">-</span>
                                 <span class="time">09:05 AM 10/04/2019</span>
                              </p>
                           </div>
                        </div>
                        <div class="related-item col-12 col-md-6 px-0 pl-md-3">
                           <div class="related-img theme-white">
                              <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/related1.jpg" alt="related"></a>
                           </div>
                           <div class="related-item-info theme-white">
                              <h5 class="title">Những cách giải đen cờ bạc hiệu quả nhất của dân chơi</h5>
                              <p class="mb-0">
                                 <span class="tag">Tin nhà cái</span>
                                 <span class="time">-</span>
                                 <span class="time">09:05 AM 10/04/2019</span>
                              </p>
                           </div>
                        </div> -->
                        <?php
    $categories = get_the_category(get_the_id());
    if ($categories) 
    {
        $category_ids = array();
        foreach($categories as $individual_category) $category_ids[] = $individual_category->term_id;
 
        $args=array(
        'category__in' => $category_ids,
        'post__not_in' => array($post->ID),
        'showposts'=> 2, 
        );
        $my_query = new wp_query($args);
        if( $my_query->have_posts() ) 
        {
            
            while ($my_query->have_posts())
            {
                $my_query->the_post();
                ?>
                <!-- <li> -->
                   
                <div class="related-item col-12 col-md-6 px-0 pl-md-3">
                           <div class="related-img theme-white">
                              <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                           </div>
                           <div class="related-item-info theme-white">
                              <h5 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                              <p class="mb-0 long-text">
                                 <span class="tag"><?php the_category(','); ?></span>
                                 <span class="time">-</span>
                                 <span class="time"><?php echo get_the_date('H:i A d/m/Y'); ?></span>
                              </p>
                           </div>
                        </div>
                	<!-- <div class="new-img"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(85, 75)); ?></a></div>
                	<div class="item-list">
                		<h4><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
                		<?php the_excerpt(); ?>
                	</div>
                </li> -->
                <?php
            }
            // echo '</ul>';
        }
    }
?>
                     </div>
                  </div>
               </div>
               <div class="article-content-right">
                  <div class="ads-img mb-30 text-center">
                     <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/banner-article.png" alt="ads"></a>
                  </div>
                  <?php get_template_part('discuss'); ?>
                  <div class="event mb-30 theme-white border-same">
                     <div class="box-header text-center mb-30">
                        <img src="<?php bloginfo('template_directory') ?>/images/icon4.png" alt="icon">
                        <p>sự kiện nhà cái</p>
                     </div>
                     <div class="box-body">
                        <ul>
                           <li class="event-item">
                              <div class="col-12 d-flex flex-wrap px-0">
                                 <div class="col-md-4 px-0 text-center">
                                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/event1.jpg" alt=""></a>
                                 </div>
                                 <div class="col-md-8 pr-0 event-item-info">
                                    <h4 class="event-title limit-line two-line">Khuyến mãi 50% từ nhà cái JSS28</h4>
                                    <p class="time">09:05 AM 10/04/2019</p>
                                 </div>
                              </div>
                           </li>
                           <li class="event-item">
                              <div class="col-12 d-flex flex-wrap px-0">
                                 <div class="col-md-4 px-0 text-center">
                                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/event1.jpg" alt=""></a>
                                 </div>
                                 <div class="col-md-8 pr-0 event-item-info">
                                    <h4 class="event-title limit-line two-line">Khuyến mãi 50% từ nhà cái JSS28</h4>
                                    <p class="time">09:05 AM 10/04/2019</p>
                                 </div>
                              </div>
                           </li>
                           <li class="event-item">
                              <div class="col-12 d-flex flex-wrap px-0">
                                 <div class="col-md-4 px-0 text-center">
                                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/event1.jpg" alt=""></a>
                                 </div>
                                 <div class="col-md-8 pr-0 event-item-info">
                                    <h4 class="event-title limit-line two-line">Khuyến mãi 50% từ nhà cái JSS28</h4>
                                    <p class="time">09:05 AM 10/04/2019</p>
                                 </div>
                              </div>
                           </li>
                           <li class="event-item">
                              <div class="col-12 d-flex flex-wrap px-0">
                                 <div class="col-md-4 px-0 text-center">
                                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/event1.jpg" alt=""></a>
                                 </div>
                                 <div class="col-md-8 pr-0 event-item-info">
                                    <h4 class="event-title limit-line two-line">Khuyến mãi 50% từ nhà cái JSS28</h4>
                                    <p class="time">09:05 AM 10/04/2019</p>
                                 </div>
                              </div>
                           </li>
                           <li class="event-item">
                              <div class="col-12 d-flex flex-wrap px-0">
                                 <div class="col-md-4 px-0 text-center">
                                    <a href="#"><img src="<?php bloginfo('template_directory') ?>/images/event1.jpg" alt=""></a>
                                 </div>
                                 <div class="col-md-8 pr-0 event-item-info">
                                    <h4 class="event-title limit-line two-line">Khuyến mãi 50% từ nhà cái JSS28</h4>
                                    <p class="time">09:05 AM 10/04/2019</p>
                                 </div>
                              </div>
                           </li>
                        </ul>
                        <div class="text-center">
                           <button class="btn btn-def btn-blue">Xem thêm</button>
                        </div>
                     </div>
                  </div>
                  
               </div>
            </div>
         </div>
      </section>
      <!-- **********************************category***************************************** -->
      
   <!-- **********************************Blog***************************************** -->
   <?php get_footer(); ?>
   <?php wp_footer(); ?>
</body>

</html>