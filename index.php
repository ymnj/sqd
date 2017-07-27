  <?php get_header() ?>

  <div class="top-banner">
    <div class="join-button">Join Now</div>
  </div>

  <div class="main-cta pure-g">
    <section class="pure-u-1 pure-u-sm-1-3">
      <div class="cta-wrap">
        <h2>New Arrivals</h2>
        <p>See our latest must haves >></p>
      </div>
    </section>
    <section class="pure-u-1 pure-u-sm-1-3">
      <div class="cta-wrap">
        <h2>We Love</h2>
        <p>Check out stylist favorites >></p>
      </div>
    </section>
    <section class="pure-u-1 pure-u-sm-1-3">
      <div class="cta-wrap">
        <h2>Free Shipping</h2>
        <p>On All 2016 collection >></p>
      </div>
    </section>
  </div>
 
  <div class="container">
    <div class="middle-banner">
    </div>
  </div>
  
  <?php get_template_part('/sections/section','categories')?>
  
  <?php get_template_part('/sections/section', 'sales') ?>

  <?php get_template_part('/sections/section', 'testimonials'); ?>

  <?php get_template_part('/sections/section', 'blog'); ?>


  <?php wp_footer() ?>
</body>
</html>