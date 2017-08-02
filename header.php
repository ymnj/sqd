<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SQD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head() ?>
</head>
<body>

  <header>
    
    <h1>SQD</h1>

    <nav class="pure-g">
      <div class="pure-menu pure-u-1 pure-menu-horizontal">
      <?php wp_nav_menu( array( 
        'menu'           => 'Main Menu',
        'theme_location' => 'main-menu',
        'container'      => 'ul',
        'menu_class'     => 'pure-menu-list'
        )); 
      ?>
      </div>
    </nav>
    
    <!-- <nav class="pure-g">
      <div class="pure-menu pure-u-1 pure-menu-horizontal">
        <ul class="pure-menu-list">
          <li class="pure-menu-item"><a class="pure-menu-link" href="index.html">About Us</a></li>
          <li class="pure-menu-item"><a class="pure-menu-link" href="/about/">Store</a></li>
          <li class="pure-menu-item"><a class="pure-menu-link" href="/blog/">News</a></li>
          <li class="pure-menu-item"><a class="pure-menu-link" href="">Contacts</a></li>
        </ul>
      </div>
    </nav> -->
  </header>