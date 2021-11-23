<div class="footer desktop">
    <div class='footer_menu_container'>
      <h4> <?= wp_get_nav_menu_name("footer_left") ?> </h4> 
      <?php
        wp_nav_menu([
          'container' => '',
          'theme_location' => 'footer_left', 
        ]); 
      ?>
    </div>
    
    <div class='footer_menu_container'>
      <h4> <?= wp_get_nav_menu_name("footer_right") ?> </h4> 
      <?php
        wp_nav_menu([
          'container' => '',
          'theme_location' => 'footer_right', 
        ]); 
      ?>
    </div>
    <?php require('reusable/footer-social.php'); ?>
  
</div>