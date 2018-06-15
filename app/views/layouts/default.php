<!DOCTYPE html>
<html lang="en">
<head>
    <!-- web config -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <!-- favicon -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <title><?=$this->siteTitle()?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- [if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
	  <![endif] -->

    <!-- importing css -->
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/fontawesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/flaticon.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/loader.min.css">    
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/style.css">
    <link rel="stylesheet" class="skin" type="text/css" href="<?=PROOT?>css/skin/skin-12.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>css/switcher.css">    
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>plugins/revolution/revolution/css/settings.css">
    <link rel="stylesheet" type="text/css" href="<?=PROOT?>plugins/revolution/revolution/css/navigation.css">
    <!-- google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Crete+Round:400,400i&amp;subset=latin-ext" rel="stylesheet">
    
    <!-- optional importings -->
    <?= $this->content('head') ?>
</head>
<body id="bg">
	<div class="page-wraper">        	
    <header class="site-header header-style-8">
      <div class="top-bar bg-primary">
          <div class="container">
              <div class="row">
                  <div class="clearfix">                        
                    <div class="wt-topbar-right">
                      <ul class="list-unstyled e-p-bx pull-right">
                              <li><a href="#" data-toggle="modal" data-target="#Login-form"><i class="fa fa-user"></i>Login</a></li>
                              <li><a href="#" data-toggle="modal" data-target="#Register-form"><i class="fa fa-sign-in"></i>Register</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- header middle -->
      <div class="header-middle bg-white">
        <div class="container">
          <div class="logo-header">
            <a href="<?=PROOT?>">
              <img src="<?=PROOT?>images/ccaa-logo.png" width="216" height="37" alt="CCAA-LOGO" />
            </a>
          </div>
          <div class="header-info">
            <ul>
              <li>
                <div>
                  <div class="icon-sm">
                    <span class="icon-cell  text-primary"><i class="iconmoon-travel"></i></span>
                  </div>
                  <div class="icon-content">
                    <strong>Nossa localização </strong>
                    <span>Sec 3, Panguila, Luanda-AO</span>
                  </div>
                </div>
              </li>
              <li>
                <div>
                  <div class="icon-sm">
                    <span class="icon-cell  text-primary"><i class="iconmoon-smartphone-1"></i></span>
                  </div>
                  <div class="icon-content">
                    <strong>Número de telefone</strong>
                    <span>(+244) 222 026518</span>
                  </div>
                </div>
              </li>
              <li class="btn-col-last">
                <div>
                  <div class="icon-sm">
                    <span class="icon-cell  text-primary"><i class="iconmoon-clock"></i></span>
                  </div>
                  <div class="icon-content">
                    <strong>Tempo de abertura</strong>
                    <span>Seg - Sex: 07:30 - 15:00 </span>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- sticky header -->
      <div class="sticky-header main-bar-wraper">
        <div class="main-bar header-botton nav-bg-secondry">
          <div class="container">
            <!-- Toggle Button -->
            <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Extra Nav -->
            <div class="extra-nav">
                <div class="extra-cell">
                    <a href="#search" class="site-search-btn"><i class="fa fa-search"></i></a>
                </div>
                <div class="extra-cell">
                    <a href="javascript:;" class="wt-cart cart-btn" title="Seu carrinho">
                        <span class="link-inner">
                            <span class="woo-cart-total"> </span>
                            <span class="woo-cart-count">
                                <?php
                                  // Droping data
                                  if(isset($_GET["action"])) {  
                                        if($_GET["action"] == "delete")  
                                        {  
                                            foreach($_SESSION["shopping_cart"] as $keys => $values)  
                                            {  
                                                  if($values["item_id"] == $_GET["id"])  
                                                  {  
                                                      unset($_SESSION["shopping_cart"][$keys]);  
                                                      echo '<script>alert("Item Removed")</script>';  
                                                      echo '<script>window.location="index.php"</script>';  
                                                  }  
                                            }  
                                        }  
                                  }  
                                  // Data
                                  $_SESSION["shopping_cart"] = array(
                                    ["item_id" => 1, "name" => "Capacete", "price" => 3500.00, "url" => "http://thewebmax.com/build/images/cart/pic-1.jpg", "qtd" => 2],
                                    ["item_id" => 2, "name" => "Berbequim", "price" => 45000.00, "url" => "http://thewebmax.com/build/images/cart/pic-2.jpg", "qtd" => 1]
                                  );
                                  
                                  // Counting stored items
                                  $_count = count($_SESSION["shopping_cart"], COUNT_NORMAL);
                                ?>
                                <span class="shopping-bag wcmenucart-count "> <?=$_count?> </span>
                            </span>
                        </span>
                    </a>
                    <!-- Cart -->
                    <div class="cart-dropdown-item-wraper clearfix">
                        <div class="nav-cart-content">
                            
                            <div class="nav-cart-items p-a15">
                                <?php // Get stored items
                                for($i = 0; $i < count($_SESSION["shopping_cart"]); $i++): ?>
                                <div class="nav-cart-item clearfix">
                                    <div class="nav-cart-item-image">
                                        <a href="#"><img src="<?=$_SESSION["shopping_cart"][$i]['url']?>" alt="p-1"></a>
                                    </div>
                                    <div class="nav-cart-item-desc">
                                        <a href="#"><?=$_SESSION["shopping_cart"][$i]['name']?></a>
                                        <span class="nav-cart-item-price"><strong><?=$_SESSION["shopping_cart"][$i]['qtd']?></strong> x <?=$_SESSION["shopping_cart"][$i]['price']?> Kz</span>
                                        <a href="index.php?action=delete&id=<?=$_SESSION["shopping_cart"][$i]['item_id']?>" class="nav-cart-item-quantity">x</a>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                            <div class="nav-cart-title p-tb10 p-lr15 clearfix">
                                <?php // Calculate total
                                $_total = 0;
                                for ($x = 0; $x < count($_SESSION["shopping_cart"]); $x++) {
                                    $_total = $_total + ($_SESSION["shopping_cart"][$x]["price"] * $_SESSION["shopping_cart"][$x]["qtd"]);
                                    $_SESSION['total'] = number_format($_total, 2);
                                }
                                ?>
                                <h4  class="pull-left m-a0">Subtotal:</h4>
                                <h5 class="pull-right m-a0"><?= $_SESSION['total'] ?> KZ's</h5>
                            </div>
                            <div class="nav-cart-action p-a15 clearfix">
                                <button class="site-button  btn-block m-b15 " type="button">Ver carrinho</button>
                                <button class="site-button  btn-block" type="button">Caixa de pagamento</button>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            <!-- Search -->
            <div id="search"> 
              <span class="close"></span>
              <form role="search" id="searchform" method="get" class="radius-xl">
                <div class="input-group">
                  <input value="" name="q" type="search" placeholder="Escreva para pesquisar"/>
                  <span class="input-group-btn">
                    <button type="button" class="search-btn">
                      <i class="fa fa-search"></i>
                    </button>
                  </span>
                </div>   
              </form>
            </div>
              
              <!-- MAIN Nav -->
              <div class="header-nav navbar-collapse collapse ">
                  <ul class=" nav navbar-nav">
                      <li class="active">
                          <a href="javascript:;">Home<i class="fa fa-chevron-down"></i></a>
                          <ul class="sub-menu">
                              <li><a href="index.html">Home 1</a></li>
                              <li><a href="index-2.html">Home 2</a></li>
                              <li><a href="index-3.html">Home 3</a></li>
                              <li><a href="index-4.html">Home 4</a></li>
                              <li><a href="index-5.html">Home 5</a></li>
                          </ul>
                      </li>
                  
                      <li>
                          <a href="javascript:;">Pages<i class="fa fa-chevron-down"></i></a>
                          <ul class="sub-menu">
                              <li>
                                  <a href="javascript:;">About us</a>
                                  <ul class="sub-menu">
                                      <li><a href="about-1.html">About us 1</a></li>
                                      <li><a href="about-2.html">About us 2</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">FAQ</a>
                                  <ul class="sub-menu">
                                      <li><a href="faq-1.html">FAQ 1</a></li>
                                      <li><a href="faq-2.html">FAQ 2</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="career.html">Career</a>
                              </li>
                              <li>
                                  <a href="javascript:;">Portfolio</a>
                                  <ul class="sub-menu">
                                      <li><a href="portfolio-1.html">Portfolio 1</a></li>
                                      <li><a href="portfolio-2.html">Portfolio 2</a></li>
                                      <li><a href="portfolio-3.html">Portfolio 3</a></li>
                                      <li><a href="portfolio-detail.html">Portfolio Detail</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">Our Team</a>
                                  <ul class="sub-menu">
                                      <li><a href="our-team.html">Our Team 1</a></li>
                                      <li><a href="our-team-detail.html">Our Team Detail</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">Services</a>
                                  <ul class="sub-menu">
                                      <li><a href="services-1.html">Services 1</a></li>
                                      <li><a href="services-2.html">Services 2</a></li>
                                      <li><a href="services-detail.html">Services Detail</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">Galley</a>
                                  <ul class="sub-menu">
                                      <li><a href="gallery-grid-1.html">Galley Grid 1</a></li>
                                      <li><a href="gallery-grid-2.html">Galley Grid 2</a></li>
                                      <li><a href="gallery-grid-3.html">Galley Grid 3</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">Error</a>
                                  <ul class="sub-menu">
                                      <li><a href="error-403.html">Error 403</a></li>
                                      <li><a href="error-404.html">Error 404</a></li>
                                      <li><a href="error-500.html">Error 500</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">Contact us</a>
                                  <ul class="sub-menu">
                                      <li><a href="contact-1.html">Contact us 1</a></li>
                                      <li><a href="contact-2.html">Contact us 2</a></li>
                                      <li><a href="contact-3.html">Contact us 3</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      
                      <li>
                          <a href="javascript:;">Features<i class="fa fa-chevron-down"></i></a>
                          <ul class="sub-menu">
                              <li>
                                  <a href="javascript:;">Header</a>
                                  <ul class="sub-menu">
                                      <li><a href="header-style-1.html">Header 1</a></li>
                                      <li><a href="header-style-2.html">Header 2</a></li>
                                      <li><a href="header-style-3.html">Header 3</a></li>
                                      <li><a href="header-style-4.html">Header 4</a></li>
                                      <li><a href="header-style-5.html">Header 5</a></li>
                                      <li><a href="header-style-6.html">Header 6</a></li>
                                      <li><a href="header-style-7.html">Header 7</a></li>
                                      <li><a href="header-style-8.html">Header 8</a></li>
                                      <li><a href="header-style-9.html">Header 9</a></li>
                                      <li><a href="header-style-10.html">Header 10</a></li>
                                  </ul>
                              </li>
                              <li><a href="footer-fixed.html">Footer Fixed</a></li>
                              <li><a href="footer-light.html">Footer Light</a></li>
                              <li><a href="footer-dark.html">Footer Dark</a></li>
                          </ul>
                      </li>
                  
                      <li>
                          <a href="javascript:;">Product<i class="fa fa-chevron-down"></i></a>
                          <ul class="sub-menu">
                              <li><a href="product.html">Product</a></li>
                              <li><a href="product-detail.html">Product Detail</a></li>
                          </ul>
                      </li>
                      
                      <li class="submenu-direction">
                          <a href="javascript:;">Blog<i class="fa fa-chevron-down"></i></a>
                          <ul class="sub-menu">
                            <li>
                                  <a href="javascript:;">Media</a>
                                  <ul class="sub-menu">
                                      <li><a href="blog-media-list.html">Media list</a></li>
                                      <li><a href="blog-media-grid.html">Media grid</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">list</a>
                                  <ul class="sub-menu">
                                      <li><a href="blog-half-img.html">Half image</a></li>
                                      <li><a href="blog-half-img-sidebar.html">Half image sidebar</a></li>
                                      <li><a href="blog-half-img-left-sidebar.html">Half image sidebar left</a></li>
                                      <li><a href="blog-large-img.html">Large image</a></li>
                                      <li><a href="blog-large-img-sidebar.html">Large image sidebar</a></li>
                                      <li><a href="blog-large-img-left-sidebar.html">Large image sidebar left</a></li>                                                    
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">Grid</a>
                                  <ul class="sub-menu">
                                      <li><a href="blog-grid-2.html">Grid 2</a></li>
                                      <li><a href="blog-grid-2-sidebar.html">Grid 2 sidebar</a></li>
                                      <li><a href="blog-grid-2-sidebar-left.html">Grid 2 sidebar left</a></li>
                                      <li><a href="blog-grid-3.html">Grid 3</a></li>
                                      <li><a href="blog-grid-3-sidebar.html">Grid 3 sidebar</a></li>
                                      <li><a href="blog-grid-3-sidebar-left.html">Grid 3 sidebar left</a></li>
                                      <li><a href="blog-grid-4.html">Grid 4</a></li>
                                  </ul>
                              </li>
                              <li>
                                  <a href="javascript:;">Single</a>
                                  <ul class="sub-menu">
                                      <li><a href="blog-single.html">Single full</a></li>
                                      <li><a href="blog-single-left-sidebar.html">Single sidebar</a></li>
                                      <li><a href="blog-single-sidebar.html">Single sidebar right</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      
                      <li class="has-mega-menu ">
                          <a href="javascript:;">Shortcodes<i class="fa fa-chevron-down"></i></a>
                          <ul class="mega-menu">
                              <li>
                                  
                                  <ul>
                                      <li><a href="shortcode-animations.html"><i class="fa fa-ravelry"></i> Animations</a></li>
                                      <li><a href="shortcode-accordians.html"> <i class="fa fa-bars"></i>Accordians</a></li>
                                      <li><a href="shortcode-alert-box.html"> <i class="fa fa-bell-o"></i>Alert box</a></li>
                                      <li><a href="shortcode-buttons.html"> <i class="fa fa-toggle-on"></i>Buttons</a></li>
                                      <li><a href="shortcode-client.html"> <i class="fa fa-group"></i>Clients</a></li>
                                      <li><a href="shortcode-client-slider.html"> <i class="fa fa-drivers-license-o"></i>Clients slider</a></li>
                                      <li><a href="shortcode-carousel-sliders.html"> <i class="fa fa-sliders"></i>Carousel sliders</a></li>
                                  </ul>
                              </li>
                  
                              <li>
                                  
                                  <ul>
                                      <li><a href="shortcode-counters.html"> <i class="fa fa-calculator"></i>Counters</a></li>
                                      <li><a href="shortcode-dividers.html"> <i class="fa fa-ellipsis-h"></i>Dividers</a></li>
                                      <li><a href="shortcode-google-map.html"> <i class="fa fa-map-o"></i>Google map</a></li>
                                      <li><a href="shortcode-icons.html"> <i class="fa fa-ellipsis-h"></i>Icons Shortcodes</a></li>
                                      <li><a href="shortcode-icon-box.html"> <i class="fa fa-square-o"></i>Icon-box</a></li>
                                      <li><a href="shortcode-icon-box-styles.html"> <i class="fa fa-square-o"></i>Icon box styles</a></li>
                                      <li><a href="shortcode-image-box-content.html"> <i class="fa fa-address-card-o"></i>Image box content</a></li>
                                  </ul>
                              </li>
                  
                              <li>
                                  
                                  <ul>
                                      <li><a href="shortcode-images-effects.html"> <i class="fa fa-photo"></i>Images effects</a></li>
                                      <li><a href="shortcode-list-group.html"> <i class="fa fa-list-ol"></i>List group</a></li>
                                      <li><a href="shortcode-modal-popup.html"> <i class="fa fa-window-maximize"></i>Modal popup</a></li>
                                      <li><a href="shortcode-pagination.html"> <i class="fa fa-terminal"></i>Pagination</a></li>
                                      <li><a href="shortcode-pricing-table.html"> <i class="fa fa-dollar"></i>Pricing table</a></li>
                                      <li><a href="shortcode-toggles.html"> <i class="fa fa-plus-square-o"></i>Toggles</a></li>
                                      <li><a href="shortcode-tooltips.html"> <i class="fa fa-window-maximize"></i>Tooltips</a></li>
                                  </ul>
                              </li>
                              
                              <li>
                                  
                                  <ul>
                                      <li><a href="shortcode-tabs.html"> <i class="fa fa-th-list"></i>Tabs</a></li>
                                      <li><a href="shortcode-table.html"> <i class="fa fa-table"></i>Table</a></li>
                                      <li><a href="shortcode-testimonials.html"> <i class="fa fa-twitch"></i>Testimonials</a></li>
                                      <li><a href="shortcode-testimonials-grid.html"> <i class="fa fa-twitch"></i>Testimonials grid</a></li>
                                      <li><a href="shortcode-title-separators.html"> <i class="fa fa-ellipsis-h"></i>Title-separators</a></li>
                                      <li><a href="shortcode-video.html"> <i class="fa fa-video-camera"></i>Video</a></li>
                                      <li><a href="shortcode-all-widgets.html"> <i class="fa fa-retweet"></i>Widgets</a></li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                  </ul>
              </div>
          </div>
        </div>
      </div>            
        
    </header>    

    <div class="page-content">
      <?= $this->content('body') ?>
    </div>
  </div>
  <!-- optional scripts and pluggins -->
  <?= $this->content('scripts') ?>

  <!-- Javascript files -->
  <script type="text/javascript"  src="<?=PROOT?>js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
  <script type="text/javascript"  src="<?=PROOT?>js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

  <script type="text/javascript"  src="<?=PROOT?>js/bootstrap-select.min.js"></script><!-- FORM JS -->
  <script type="text/javascript"  src="<?=PROOT?>js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

  <script type="text/javascript"  src="<?=PROOT?>js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

  <script type="text/javascript"  src="<?=PROOT?>js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
  <script type="text/javascript"  src="<?=PROOT?>js/counterup.min.js"></script><!-- COUNTERUP JS -->
  <script type="text/javascript"  src="<?=PROOT?>js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

  <script type="text/javascript" src="<?=PROOT?>js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

  <script type="text/javascript"  src="<?=PROOT?>js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

  <script type="text/javascript"  src="<?=PROOT?>js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   --> 
  <script type="text/javascript"  src="<?=PROOT?>js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

  <script type="text/javascript"  src="<?=PROOT?>js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
  <script type="text/javascript"  src="<?=PROOT?>js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->
  <script type="text/javascript"  src="<?=PROOT?>js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->


  <!-- REVOLUTION JS FILES -->
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->	
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>

  <!-- REVOLUTION SLIDER SCRIPT FILES -->
  <script type="text/javascript" src="<?=PROOT?>js/rev-script-4.js"></script>

</body>