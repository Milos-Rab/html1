<!doctype html>
<html lang="en">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-123674663-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-123674663-1');
    </script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?php bloginfo('template_url');?>/img/favicon.png" type="image/png">
  
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <?php wp_head(); ?>

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '2687641647916111');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=2687641647916111&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

  </head>

<script>
  fbq('track', 'Lead');
</script>

  <body>
    <!-- Header -->
      <header>
        <nav class="navbar navbar-expand-lg navbarMain">
          <div class="container">
            <a class="navbar-brand navbarLogo" href="<?php echo get_home_url() ?>">
              <img src="<?php bloginfo('template_url');?>/img/logo.png" alt="">
            </a>
            
            <div id="menu-humburger">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php wp_nav_menu( array( 'theme_location' => 'PageMenu', 'menu_class' => 'navbar-nav mr-auto navbarMenu' ) ); ?>
                <ul class="navbar-nav navbar-menu ml-auto">
                  <li class="nav-item">
                    <?php get_sidebar(); ?>
                  </li>
                </ul>
              </div>

              <!-- Mobile -->
              <ul class="navbar-nav navbar-menu ml-auto" id="mobile-number">
                  <li class="nav-item">
                    <?php get_sidebar('mobile'); ?>
                  </li>
                </ul>

            </div>
          </div>
        </nav>
      </header>
    <!-- Header -->