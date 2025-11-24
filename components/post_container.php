<?php

/*
 * Render Post Container
 * 
 * @params array $props An assosciative array of props.
 *   - string $imgurl The URL of the post image.
 *   - string $date The post date.
 *   - string $heading The post description.
 *   - string $description The post description.
 *   - string $url The URL for the 'Read More' link.
 */

function render_post_container($props)
{
    // Extract props into local variables

    extract($props);
    $imagePath = get_template_directory_uri();
    // Fallback imagelogic for when $imageurl is not provided or invalid
    $fallback_img = $imagePath . '/images/Ai_img.png';
    $img_src = !empty($imgurl) ? htmlspecialchars($imgurl) : $fallback_img;

    ?>
    <div class="postContainer_container">
        <img src="<?php echo $img_src; ?>" alt="Image Not Found"
            onerror="this.onerror=null;this,src='<?php echo $fallback_img; ?>';" />
        <div class="postContainer_details">
            <div class="postContainer_details_text">
                <p>
                    <span>
                        Development :
                    </span>
                    <?php echo htmlspecialchars($date) ?>
                </p>
                <h1><?php echo htmlspecialchars($heading) ?></h1>

            </div>
            <div class="postContainer_details_btn"><button>
                    <a href="<?php echo $url ?>" class="postContainer_button" target="_blanck"
                        rel="noopener noreferrer">Read More</a>
                </button></div>
        </div>
    </div>


    <?php

}

?>