<?php
// Template Name: Home

get_header();

$imagePath = get_template_directory_uri();

require_once get_template_directory().'/components/post_container.php';

?>

<!-- feature Post -->
<div class="blog_home">
  <div class="blog_header">
    <h3>Featured Post</h3>
    <h1>How AI will Change the Future</h1>
    <p>
      The future of AI will see home robots having enhanced intelligence,
      increased capabilities, and becoming more personal and possibly cute.
      For example, home robots will overcome navigation, direction
    </p>
    <button>Read more</button>
  </div>
  <div class="blog_headerimg">
    <img src="<?php echo $imagePath ?>/images/Ai_img.png" alt="Illustration of Artificial Intelligence" />
  </div>
</div>


<!-- Highlight post -->

<div class="highlight">
  <div class="highlight_container">
    <img class="highlight_img" src="<?php echo $imagePath ?>/images/Highlight_img.webp"
      alt="VR and AI Technology Highlight" />

    <div class="highlight_details">
      <div class="highlight_details_text">
        <p>
          <span>Development : </span> 16 March 2023
        </p>
        <h1>
          How to make a Game look more attractive with New VR & AI
          Technology
        </h1>
        <p class="highlight_details_paratext">
          Google has been investing in AI for many years and bringing its
          benefits to individuals, businesses and communities. Whether it’s
          publishing state-of-the-art research, building helpful products or
          developing tools and resources that enable others, we’re committed
          to making AI accessible to everyone.
        </p>
      </div>
      <div class="highlight_details_btn">
        <button>Read More</button>
      </div>
    </div>
  </div>
</div>

<!-- Recent Post -->

<div class="recentPosts">
  <div class="recentPosts_heading">
    <h1>Our Recent Posts</h1>
    <button>View All</button>
  </div>
  <div class="recentPosts_postContainer">
    <div class="recentPosts_post">
      <?php

      $wppost = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 3,
        'orderby' => 'DESC',
        'order' => 'date',
      ) ;

      $postquery = new WP_Query($wppost);
      while ($postquery->have_posts()) {
          $postquery->the_post();
          $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          render_post_container([
              'imgurl' => $imagePath ? $imagePath[0] : '',
              'date' => get_the_date(),
              'heading' => get_the_title(),
              // 'description' => the_content(),
              'url' => get_the_permalink(),
          ]);
      }
      ?>
    </div>
  </div>
</div>

<!-- News Post Categories -->

<div class="recentPosts">
  <div class="recentPosts_heading">
    <h1>News Post Categories</h1>
    
  </div>
  <div class="category_list_container">
    <ul class="category_list">
    <?php 
      $newsCat = get_terms([
        'taxonomy' => 'newscategory',
        'hide_empty' => false,
        'orderby' => 'name',
        'order' => 'ASC',
      ]);
      
      foreach($newsCat as $cat){
        // Displaying each category with a link
        echo '<li class="category_list_item">
                <div class="category_icon">
                </div>
                <a href="'.get_term_link($cat).'">'.$cat->name.'</a>
              </li>';
              
        // Query posts in this category
              $wpnew = array(
                'post_type' => 'news',
                'post_status' => 'publish',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'newscategory',
                        'field' => 'term_id', // This line was misspelled
                        'terms' => $cat->term_id,
                    )
                ),
            );

            $newsquery = new WP_Query($wpnew);

            while ($newsquery->have_posts()) {
                $newsquery->the_post();
                // Fetching thumbnail image from post 
                $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');

                // post container function for displaying posts    
                // checking if post has thumbnail image if it has then assing it to imageurl or left black
                render_post_container([
                    'imgurl' => $imagePath ? $imagePath[0] : '',
                    'date' => get_the_date(),
                    'heading' => get_the_title(),
                    // 'description' => the_content(),
                    'url' => get_the_permalink(),
                ]);
            }
      }
    ?>
    </ul>
  </div>
  <div class="clear" style="clear:both"></div>
</div>

<!-- Latest News Post -->

<div class="recentPosts">
  <div class="recentPosts_heading">
    <h1>Latest News Post</h1>
    <button>View All</button>
  </div>
  <div class="recentPosts_postContainer">
    <div class="recentPosts_post">
      <?php

      $wpnews = array(
        'post_type' => 'news',
        'post_status' => 'publish',
      ) ;
      $newsquery = new WP_Query($wpnews);
      while ($newsquery->have_posts()) {
          $newsquery->the_post();
          $imagePath = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
          render_post_container([
              'imgurl' => $imagePath ? $imagePath[0] : '',
              'date' => get_the_date(),
              'heading' => get_the_title(),
              // 'description' => the_content(),
              'url' => get_the_permalink(),
          ]);
      }
      ?>
    </div>
  </div>
</div>
<?php get_footer() ?>