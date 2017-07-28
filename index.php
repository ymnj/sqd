  <?php get_header() ?>

  <div class="top-banner">
    <div class="join-button">Join Now</div>
  </div>

  <?php get_template_part('/sections/section', 'cta'); ?>
 
  <div class="container">
    <div class="middle-banner">
    </div>
  </div>
  
  <?php get_template_part('/sections/section','categories')?>
  <?php get_template_part('/sections/section', 'sales') ?>
  <?php get_template_part('/sections/section', 'testimonials'); ?>
  <?php get_template_part('/sections/section', 'blog'); ?>
  <?php get_template_part('/sections/section', 'instagram'); ?>
  <?php get_template_part('/sections/section', 'social'); ?>
  <?php get_footer() ?>

  