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

  <div class="container">
     <div class="latest-blogs pure-g">
       <div class="pure-u-1">
         <h1 class="header"><span class="bold-head">See What's New</span> on our blog</h1>
       </div>
       <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4"">1</div>
       <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4"">2</div>
       <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4"">3</div>
       <div class="pure-u-1 pure-u-md-1-2 pure-u-lg-1-4"">4</div>
     </div>
  </div>


  <?php wp_footer() ?>
</body>
</html>