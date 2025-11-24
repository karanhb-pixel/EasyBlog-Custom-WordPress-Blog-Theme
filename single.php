<?php
get_header();
the_post();
// getting thumbnail image 
$image_path = wp_get_attachment_image_src(get_post_thumbnail_id(), 'large');
$imagePath = get_template_directory_uri();
$fallback_img = $imagePath . '/images/Ai_img.png';
$image_url = $image_path ? $image_path[0] : $fallback_img;
?>

<div class="blog_page">
    <div class="left">

        <?php dynamic_sidebar(index: 'Sidebar Location') ?>

    </div>
    <div class="right">
        <div class="blog_page_headingtext">

            <h1><?php the_title(); ?></h1>
            <?php if ($image_url != '') {
                ?>
                <img src="<?php echo $image_url ?>" alt="Image not found" width="50%" />
                <?php
            } ?>
        </div>
        <div class="blog_page_containt">
            <div class="meta_data">
                <p>Posted on: <?php echo get_the_date() ?></p>
                <p>Posted By: <?php the_author(); ?></p>
                <p>Catagories : <?php the_category() ?></p>
            </div>

            <div class="single_container">
                <?php the_content() ?>
            </div>
            <div class="comment-section">

                <?php comments_template(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>