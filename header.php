<!-- ▼ ここからheader.php ▼-->
<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WPHOUSING｜まち・人・暮らしをゆたかに。WPハウジング</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
<!-- CSS, JavaScriptファイルが記載されていた場所 -->
<?php wp_head(); ?>

  </head>
  <body>
    <div id="wp-wrapper">
      <div id="wp-page">
        <div id="wp-header">
          <div class="top">
            <div class="container">
              <span class="headerinfo">
                <a href="#">
                  <i>@</i>info@XXXXX.co
                </a>
              </span>
              <span class="headerinfo">
                <a href="tel://+12345678910">
                  <i class="icon-mobile3"></i>123 4567 8910
                </a>
              </span>
            </div>
          </div>
          <div class="wp-hero">
            <div class="wp-overlay"></div>
            <div class="wp-cover text-center" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/top_image.jpg);">
              <div class="desc animate-box">
                <h2>WP HOUSING</h2>
                <p class="catch">まち・人・暮らしをゆたかに。WPハウジング</p>
              </div>
            </div>
          </div>
          <header id="wp-header-section">
            <div class="container">
              <div class="nav-header">
                <a href="#" class="js-wp-nav-toggle wp-nav-toggle">
                  <i></i>
                </a>
                <h1 id="wp-logo">
                  <a href="<?php site_url(); ?>">WPHOUSING</a>
                </h1>
<?php get_sidebar(); ?>
              </div>
            </div>
          </header>
        </div>
<!-- ▲ ここまでheader.php ▲-->