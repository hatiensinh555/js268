<?php get_header(); ?>
  <!-- Get post mặt định -->
  <div class="main d-flex flex-wrap">
  <div class="info text-center col-12">
            <p class="sub-title sub-title1">It is interesting</p>
            <h1 class="same-title"><span><?php the_archive_title(); ?></span></h1>
         </div>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
   
   <div class="col-12 col-xl-4 blog-item hover">
      <div class="blog-item-img ">
         <a href="<?php the_permalink() ?>">
         <?php echo get_the_post_thumbnail( get_the_id(), 'thumnail', array( 'class' =>'thumnail') ); ?>
         </a>
      </div>
      <div class="blog-item-content">
         <p>
            <i class="fa fa-calendar" aria-hidden="true"></i>
            <span><?php echo get_the_date() ?></span>
            <span class="mx-2">|</span>
            <a href=""> <span class="font-weight-bold">
            <?php 
               global $post;
               $tag_names = wp_get_post_tags( $post->ID, array( 'fields' => 'names' ) );
               foreach($tag_names as $result) {
                  if(count($tag_names) <= 1)
                     echo $result;
                  else echo $result , ' - ';
               }
               ?>
            </span></a>
         </p>
         <h3 class="mb-3 blog-item-title"><a href="<?php the_permalink() ?>" class=""><?php the_title() ?></a></h3>
         <?php the_excerpt() ?>
         <p>
            <span class=" mr-3"><i class="fa fa-eye mr-1" aria-hidden="true"></i>63 Views</span>
            <span><i class="fa fa-comments mr-1" aria-hidden="true"></i>5 Comments</span>
         </p>
      </div>
   </div>
    
   <?php endwhile; else : ?>
   <p>Không có</p>
   <?php endif; ?>
   <!-- Get post mặt định -->
  
</div>

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
   <script src="<?php bloginfo('template_directory') ?>/js/jquery-3.2.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"></script>
   <script type="text/javascript" src="<?php bloginfo('template_directory') ?>/plugins/slick/slick.min.js"></script>
   <!-- <script src="<?php bloginfo('template_directory') ?>/js/style.js"></script> -->
   <script src="<?php bloginfo('template_directory') ?>/js/video.js"></script>
   <?php wp_footer(); ?>
</body>

</html>