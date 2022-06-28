<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package for_test
 */
$themeurl = get_stylesheet_directory_uri();
$favicon = get_field('favicon', 'option') ? : '';
$logo_header = get_field('logo_header', 'option') ? : '';
$menu_option = get_field('menu_option', 'option') ? : '';

$filename = basename($_SERVER["SCRIPT_FILENAME"], '.php');
if ($filename == "" || $filename == "index") {
  $title = "Headstart Nursery";
  $body_class = "homepage";
  $header_class = "transparent-header";
}
// $version = 28022022;
$version = time();
global $wp;
$current_url =  home_url( $wp->request );

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
  <meta name="format-detection" content="telephone=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo $favicon['url'] ?>" type="image/x-icon">

  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Slick -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Slick Theme -->
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css?time=<?php echo time(); ?>" />

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <!-- Style -->
  <link rel="stylesheet" href="<?php echo $themeurl ?>/assets/css/theme.min.css?time=<?php echo $version; ?>">

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.js"></script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script src="<?php echo $themeurl; ?>/assets/js/calculator2.js?time=<?php echo $version; ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfobject/2.2.5/pdfobject.min.js" integrity="sha512-K4UtqDEi6MR5oZo0YJieEqqsPMsrWa9rGDWMK2ygySdRQ+DtwmuBXAllehaopjKpbxrmXmeBo77vjA2ylTYhRA==" crossorigin="anonymous"></script>

  <script src="<?php echo $themeurl; ?>/assets/js/theme.js?time=<?php echo $version; ?>"></script>

  <script type="text/javascript" src="https://www.bugherd.com/sidebarv2.js?apikey=qyai2n8lekad3lzdtuka6g" async="true"></script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
  <div id="top-page"></div>
  <header class="<?php echo $header_class; ?>">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="content-area">
            <div class="logo-area">
              <a href="./"><img src="<?php echo $logo_header['url']; ?>" alt="<?php echo $logo_header['alt']; ?>" class="img-fluid"></a>
            </div>
            <a href="#" class="mobile-menu-toggle d-md-none">
              <img src="<?php echo $themeurl; ?>/images/svg/menu-toggle.svg" alt="menu toggle" class="img-fluid">
            </a>
            <div class="menu-area">
              <a href="#" class="close-menu d-md-none">
                <img src="<?php echo $themeurl; ?>/images/svg/menu-toggle-close.svg" alt="menu close" class="img-fluid">
              </a>
              <?php if($menu_option): ?>
              <ul>
              

              
                  <?php 
                    foreach($menu_option as $i => $item) {
                        $item_menu = $item['menu_option_link'];
                  ?>
                      
                      <li><a href="<?php echo $item_menu['url']; ?>"><?php echo $item_menu['title'] ?></a></li>
                      <?php
                    }
                  ?>

                
              
              </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
