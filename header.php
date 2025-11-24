<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        <?php 
        // dynamily Set Title
            bloginfo('name');
            // if its other pages than front page then show title too
            wp_title(' | ', true, 'left');
            // if on front page then show description too
            if(is_front_page()){
                echo " | ";
                bloginfo('description');
            }
        ?>
    </title>
    <meta name="description"
        content="ZenBlog is a modern blog platform sharing articles on AI, technology, lifestyle, and more. Read, learn, and stay inspired." />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/components/post_container.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" />
    <?php wp_head();?>
</head>

<body <?php body_class()?>>
    <nav class="navbar">
        <div class="navbar-logo">
            <a href="/" class="navbar-logo_text">ZenBlog</a>
        </div>

        <?php wp_nav_menu(['theme_location' => 'primary-menu','menu_class'=>'navbar-list']);
        ?>


    </nav>