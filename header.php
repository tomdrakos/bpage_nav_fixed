<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
  <meta charset="<?php bloginfo('charset');?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php if (is_search()): ?>
  <meta name="robots" content="noindex, nofollow" />
  <?php endif;?>

  <title>
    <?php bloginfo('name');?> |
    <?php is_home() ? bloginfo('description') : wp_title('');?>
  </title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
  <link rel="stylesheet" href='<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css' />
  <link rel="stylesheet" href='<?php echo font_awesome_url(); ?>' integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
    crossorigin="anonymous">
  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&amp;subset=latin-ext" rel="stylesheet">

  <link rel="pingback" href="<?php bloginfo('pingback_url');?>" />


  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
  <?php wp_head();?>

</head>

<body <?php body_class();?>>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <div class="row d-flex flex-nowrap">
          <div class="col-md-4">
            <div class="social">
              <i class="fab fa-facebook-square"></i>
            </div>
          </div>
          <div class="col-md-4">
            <div class="social">
              <i class="fab fa-linkedin"></i>
            </div>
          </div>
          <div class="col-md-4">
            <div class="social">
              <i class="fas fa-phone-square"></i>
            </div>
          </div>
          <div class="col-md-4">
            <div class="social">
              <i class="fas fa-envelope-square"></i>
            </div>
          </div>
        </div>
      </div>
      <!-- <a class="navbar-brand" href="<?php echo home_url(); ?>">ThemeStarter</a> -->
      <a class="navbar-brand" href="/">Home</a> <span class="nav-brand-separator">|</span>
      <a class="navbar-brand" href="/">Cennik</a> <span class="nav-brand-separator">|</span>
      <a class="navbar-brand" href="/">Produkty</a> <span class="nav-brand-separator">|</span>
      <a class="navbar-brand" href="/">Kontakt</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <?php
wp_nav_menu([
    'menu' => 'top',
    'theme_location' => 'top',
    'container' => 'div',
    'container_id' => 'bs4navbar',
    'container_class' => 'collapse navbar-collapse',
    'menu_id' => false,
    'menu_class' => 'navbar-nav ml-auto',
    'depth' => 2,
    'fallback_cb' => 'bs4navwalker::fallback',
    'walker' => new bs4navwalker(),
]);
?>
    </nav>
  </header>