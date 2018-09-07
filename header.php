<?php define('TEMPLATE_URI',get_bloginfo('template_directory').'/'); ?>
<?php define('THEME_URI',get_site_url().'/'); ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
   <head>
      <meta charset="<?php bloginfo( 'charset' ); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
      <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	   <?php endif; ?>
      <title><?php is_front_page() ? bloginfo('name') : wp_title(''); ?></title>
      <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-57x57.png" />
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-114x114.png" />
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-72x72.png" />
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-144x144.png" />
      <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-60x60.png" />
      <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-120x120.png" />
      <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-76x76.png" />
      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo TEMPLATE_URI; ?>images/favicon/apple-touch-icon-152x152.png" />
      <link rel="icon" type="image/png" href="<?php echo TEMPLATE_URI; ?>images/favicon/favicon-196x196.png" sizes="196x196" />
      <link rel="icon" type="image/png" href="<?php echo TEMPLATE_URI; ?>images/favicon/favicon-96x96.png" sizes="96x96" />
      <link rel="icon" type="image/png" href="<?php echo TEMPLATE_URI; ?>images/favicon/favicon-32x32.png" sizes="32x32" />
      <link rel="icon" type="image/png" href="<?php echo TEMPLATE_URI; ?>images/favicon/favicon-16x16.png" sizes="16x16" />
      <link rel="icon" type="image/png" href="<?php echo TEMPLATE_URI; ?>images/favicon/favicon-128.png" sizes="128x128" />
      <meta name="application-name" content="Wanderers"/>
      <meta name="msapplication-TileColor" content="#FFFFFF" />
      <meta name="msapplication-TileImage" content="<?php echo TEMPLATE_URI; ?>images/favicon/mstile-144x144.png" />
      <meta name="msapplication-square70x70logo" content="<?php echo TEMPLATE_URI; ?>images/favicon/mstile-70x70.png" />
      <meta name="msapplication-square150x150logo" content="<?php echo TEMPLATE_URI; ?>images/favicon/mstile-150x150.png" />
      <meta name="msapplication-wide310x150logo" content="<?php echo TEMPLATE_URI; ?>images/favicon/mstile-310x150.png" />
      <meta name="msapplication-square310x310logo" content="<?php echo TEMPLATE_URI; ?>images/favicon/mstile-310x310.png" />
      <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons" rel="stylesheet">
      <link href="<?php echo TEMPLATE_URI; ?>style.css" rel="stylesheet">
      <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
   <header>
      <div class="nav-icon">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </div>
      <div class="container">
         <div class="headflex">
            <div>
               <a href="index.html"><img src="<?php echo TEMPLATE_URI; ?>images/logo.png" alt="Wanderers"></a>
            </div>
            <div>
               <?php
                  $navargs = array(
                     'container' => 'nav',
                     //'container_class' => 'submenu',
                     'menu_class' => '',
                     'depth' => 2,
                     'theme_location' => 'primary'
                  );
                  wp_nav_menu($navargs);
               ?>
               <!--
               <nav>
                  <ul>
                     <li><a href="index.html" class="active">HOME</a></li>
                     <li><a href="#">BEER</a>
                        <ul>
                           <li><a href="knowyourbeer.html">Craft Beers</a></li>
                           <li><a href="beerfoodcombo.html">Trending beer - food combo</a></li>
                        </ul>
                     </li>
                     <li><a href="#">MENU</a>
                        <ul>
                           <li><a href="menuindia.html">India</a></li>
                           <li><a href="menuinternational.html">International</a></li>
                        </ul>
                     </li>
                     <li><a href="#sustainable" class="movemenudown">Sustainability</a></li>
                     <li><a href="#responsibledrink" class="movemenudown">Responsible Drinking</a></li>
                     <li><a href="offers.html">Offers</a></li>
                     <li><a href="events.html">events</a></li>
                     <li><a href="wanderers.html">WANDERERS</a>
                        <ul>
                           <li><a href="wanderersland.html">Wanderers of the Land</a></li>
                           <li><a href="wandererssea.html">Wanderers of the Sea</a></li>
                           <li><a href="wandererssky.html">Soaring into the Skies</a></li>
                        </ul>
                     </li>
                     <li><a href="#">BLOGS</a>
                        <ul>
                           <li><a href="bloglanding.html">Landing</a></li>
                           <li><a href="blogdetail.html">Detail</a></li>
                        </ul>
                     </li>
                     <li><a href="#">CONTACT US</a>
                        <ul>
                           <li><a href="contactus.html">reservations</a></li>
                           <li><a href="brewingenthusiasts.html">brewing enthusiasts</a></li>
                           <li><a href="artists.html">artists &amp; performances</a></li>
                           <li><a href="conference.html">conference Room Booking</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               -->
            </div>
         </div>
      </div>
   </header>