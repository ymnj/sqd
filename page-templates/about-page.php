<?php 

/*
  ===================================================
    About Page
    Template Name: About Template
  ===================================================
*/

get_header(); ?>

<div class="about-container container">
  <div class="pure-g">
    <h1 class="page-title pure-u-1">About</h1>

    <article class="about-intro pure-u-1 pure-u-md-1-2 offset-md-1-4">
      <img class="pure-img" src="http://fashion.zarzarmodels.com/wp-content/uploads/2016/03/Beautiful-Brazilian-Fashion-Model-Alessandra-Ambrosio-Modeling-For-The-British-Fashion-Brand-Coast-Advertising-Campaign-Beautiful-Coast-Fashion-Ads.jpg" alt="">

      <section>
        <h2>The History</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt sequi veniam eligendi adipisci fuga nulla consectetur vitae rerum sunt necessitatibus, inventore ipsam, iste amet assumenda accusamus enim totam pariatur est.</p>
        <h2>The Goal</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi esse id, distinctio facilis rem, assumenda dolore minus incidunt. Culpa hic ad doloremque libero necessitatibus dolorem aut amet praesentium nobis voluptatem.</p>
      </section>
    </article>
  </div>

  <div class="circle-stats pure-g">
    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-4">
      <div id="products">
        <span class="timer"></span>
      </div>
    </div>
    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-4">
      <div id="stylists">
        <span class="timer"></span>
      </div>
    </div>
    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-4">
      <div id="locations">
        <span class="timer"></span>
      </div>
    </div>
    <div class="pure-u-1 pure-u-sm-1-2 pure-u-md-1-4">
      <div id="members">
        <span class="timer"></span>
      </div>
    </div>
  </div>

  <div class="about-testimonial pure-g">
    <div class="pure-u-1">
      <h1 class="header"><span class="bold-head">Testimonial</span></h1>
      <img class="customer-img" src="<?php echo get_template_directory_uri() . '/assets/images/customer-img2.jpg'; ?>" alt="">
      <p class="customer-testimonial">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia non consectetur rerum assumenda sint nesciunt molestiae tenetur neque possimus? Error voluptate facere atque inventore recusandae accusantium non nobis aspernatur voluptates.
      </p>
    </div>
  </div>
</div>

<?php get_template_part('/sections/section', 'social'); ?>

<?php get_footer(); ?>