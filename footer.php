<?php

  //this is contact Us page id  
  $page_id = 22;
  $fb_link = get_field('facebook',$page_id);
  $in_link = get_field('instagram',$page_id);
  $tw_link = get_field('tweeter',$page_id);

?>

<div class="footer">
      <div class="footer_Container">
        <h1 class="footer_logo">ZenBlog</h1>
        <div class="footer_menu">
          <ul class="footer_menu_list">
            <li class="footer_menu_item"><a href="#">Home</a></li>
            <li class="footer_menu_item"><a href="#">Blog</a></li>
            <li class="footer_menu_item"><a href="#">About</a></li>
            <li class="footer_menu_item"><a href="#">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer_SocialLinks">
          <ul class="footer_SocialLinks_list">
            <li class="footer_SocialLinks_item"><a href="<?php echo $fb_link?>" target="_blank">fb</a></li>
            <li class="footer_SocialLinks_item"><a href="<?php echo $in_link?>" target="_blank">in</a></li>
            <li class="footer_SocialLinks_item"><a href="<?php echo $tw_link?>" target="_blank">tw</a></li>
          </ul>
        </div>
      </div>
      <hr class="divider" />
      <div class="footer_Copyright">
        <p>© <?php echo date('Y');?> ZenBlog. All rights reserved.</p>
      </div>
    </div>

</body>
</html>

<?php wp_footer();?>