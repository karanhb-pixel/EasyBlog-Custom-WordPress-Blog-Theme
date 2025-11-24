<?php 
    get_header(); 
    the_post();
?>


<div class="container">
    <?php get_sidebar()?>
<div class="right">

    <div class="page-status">
        <h1><?php the_title()?> :</h1>
        <h2><a href="<?php echo site_url()?>"><span>Home/</span></a><?php the_title()?></h2>
    </div>
    <div class="page-content">
        <?php the_post_thumbnail([500,500])?>
        <?php the_content() ?>
    </div>
</div>
</div>


<?php get_footer(); ?>