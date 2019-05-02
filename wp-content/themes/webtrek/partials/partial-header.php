  <!-- Header -->
  <header id="header">
    <div class="container-fluid">
    <div class="row align-items-center appender">
      <div class="col-3">
      
        <div id="logo" class="pull-left">
          <?php the_custom_logo(); ?>
        </div>
      </div>
      <div class="col">
        <nav id="nav-menu-container" role="navigation">
          
            <?php
            wp_nav_menu( array(
              'theme_location'    => 'primary',
              'depth'             => 2,
              'container'         => 'ul',
              'container_class'   => 'collapse navbar-collapse nav-menu',
              'container_id'      => 'nabvar-container',
              'menu_class'        => 'nav-menu',
              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
              'walker'            => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
        
        </nav>
      </div>
    </div>
    </div>
  </header><!-- #header -->