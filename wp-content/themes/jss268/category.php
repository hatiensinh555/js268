<?php get_header(); ?>
<div class="theme-gray">
      <section class="breadcrumbCus">
         <div class="main">
            <!-- <a href="diem-tin-nha-cai">điểm tin nhà cái</a>
            <a href="nha-cai-uy-tin">nhà cái uy tín</a> -->
            <?php 

            $cat = get_category( get_query_var( 'cat' ) );
            $cat_id = $cat->cat_ID;
            $child_categories=get_categories(
               array( 'parent' => $cat_id )
            );

            foreach ( $child_categories as $child ) {
               echo '<a href="'.get_category_link($child).'">' .$child ->cat_name. '</a>';
            }
           
            ?>

            <?php if (is_category( )) {

            $thiscat = get_category( get_query_var( 'cat' ) );

            $catid = $thiscat->cat_ID;

            $parent_list = (explode (',',get_category_parents($catid,false,',')));
            $parent_name = ($parent_list[0]);
            $parent = get_cat_ID( $parent_name );


      if ( $catid != $parent ) {
    
      //   $category = get_the_category(); 
      //   $arr1= array();
      //   foreach($category as $item) {
      //    $a = array(
      //       'name' => $item->name,
      //       'slug' => $item->slug
      //    );
      //    array_push($arr1, $a );
      //   }
      //   foreach ( $arr1 as $child ) {
      //    //   print_r($child);
      //       echo '<a href="'.$child['slug'].'">' .$child['name']. '</a>';
         
      // }
         
      $args = array('child_of' => $parent);
$categories = get_categories( $args );
foreach($categories as $category) { 
   //  echo '<p>Category: <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> </p> ';
    echo '<a href="'. get_category_link( $category->term_id ) .'">' .$category->name. '</a>';

}

      }
}
?>
    <script>
    $(function(){
        $('.breadcrumbCus a').click(function(){
            $(this).css('color','red')
        });
    });
</script>

         </div>
      </section>
      <!-- <?php get_sidebar(); ?> -->



      <section class="category-wrap mt-4">
         <div class="main">
            <div class="col-12 px-md-0 d-flex flex-wrap px-0">
            <?php if (is_category( )) {

            $thiscat = get_category( get_query_var( 'cat' ) );
            $catid = $thiscat->cat_ID;
            $parent_list = (explode (',',get_category_parents($catid,false,',')));
            $parent_name = ($parent_list[0]);
            $parent = get_cat_ID( $parent_name );

            $catlist = get_categories(
                  array(
                  'child_of' => $parent,
                  'orderby' => 'id',
                  'order' => 'DESC',
                  'exclude' => $catid,
                  'hide_empty' => '0'
                  ) );
                  //check if current category is parent category
                  if ( $catid == $parent ) {

                     get_template_part('categoryp');
                  }
                  else {
                  }
            }
            ?>
            </div>
         </div>
      </section>

      <!-- **********************************category***************************************** -->
      <section class="category-list-wrap mt-5">
         <div class="main">
            <div class="col-12 px-0 d-flex flex-wrap">
               <div class="category-list-left">


               <?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
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
<?php endwhile;?>
<?php endif; ?>


               </div>
               <div class="category-list-right">
                  <img src="<?php bloginfo('template_directory') ?>/images/banner-category.png" alt="ads">
                  <div class="ads-img mb-30 text-center">
                  </div>
                  <?php get_template_part('discuss'); ?>
                  <?php get_template_part('laureates') ?>
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