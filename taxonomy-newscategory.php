<!-- Getting Header -->
<?php
get_header();
require_once get_template_directory() . '/components/post_container.php';
$cat = get_queried_object();
// print_r($cat);
?>
<div class="blog_page">
    <div class="left">

        <?php dynamic_sidebar(index: 'Sidebar Location') ?>

    </div>
    <div class="right">
        <div class="page-status">
            <h1><?php echo $cat->name ?> :</h1>
            <h2><a href="<?php echo site_url() ?>"><span>Home/</span></a><?php echo $cat->name ?></h2>
        </div>
        <div class="blog_page_headingtext">
            <h3>OUR <span><?php echo $cat->name ?></span> BLOGS</h3>
            <h1>Find our all <span><?php echo $cat->name ?></span> blogs from here</h1>
        </div>
        <div class="blog_page_postContainer">

            <?php

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
            ?>
        </div>

        <?php echo wp_pagenavi(); ?>
    </div>
</div>
<?php
get_footer();
?>