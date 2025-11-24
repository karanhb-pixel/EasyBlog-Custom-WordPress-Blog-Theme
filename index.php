<!-- Getting Header -->
<?php
get_header();
require_once get_template_directory() . '/components/post_container.php';
?>
<div class="blog_page">
    <div class="left">
       
    <?php dynamic_sidebar(index: 'Sidebar Location')?>

    </div>
    <div class="right">
        <div class="blog_page_headingtext">
            <h3>OUR BLOGS</h3>
            <h1>Find our all blogs from here</h1>
            <p>
                our blogs are written from very research research and well known
                writers writers so that we can provide you the best blogs and articles
                articles for you to read them all along
            </p>
        </div>
        <div class="blog_page_postContainer">

            <?php
            while (have_posts()) {
                the_post();
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