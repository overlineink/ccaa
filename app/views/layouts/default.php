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
                          <a href="<?=PROOT?>">Página Inicial</a>
                      </li>
                      <li>
                          <a href="">Produtos<i class="fa fa-chevron-down"></i></a>
                          <ul class="sub-menu">
                            <li><a href="#">Divisórias</a></li>
                            <li><a href="#">Quiosques</a></li>
                            <li><a href="#">Roloutes</a></li>
                          </ul>
                      </li>
                      <li>
                          <a href="#">Contactos</a>
                      </li>                      
                      <!-- <li>
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
                      </li> -->
                  </ul>
              </div>
          </div>
        </div>
      </div>            
        
    </header>    

    <div class="page-content">
      <?= $this->content('body') ?>
    </div>
    <footer class="site-footer footer-dark" style="display: block; height: 1190px;">
        <!-- FOOTER BLOCKES START -->  
        <div class="footer-top overlay-wraper">
            <div class="overlay-main"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">  
                        <div class="widget widget_about">
                            <h4 class="widget-title">Quem somos?</h4>
                            <div class="logo-footer clearfix p-b15">
                                <a href="<?=PROOT?>"><img src="<?=PROOT?>images/ccaa-logo.png" width="230" height="67" alt="CCAA LOGO"></a>
                            </div>
                            <p>CCAA ipsum dolor sit amet, consectetuer adipiscing elit,
                                sed diam nonummy nibh euismod tincidunt ut laoreet dolore agna aliquam erat .   
                                wisi enim ad minim veniam, quis tation. sit amet, consec tetuer.
                                ipsum dolor sit amet, consectetuer adipiscing.ipsum dolor sit .
                            </p>  
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="widget recent-posts-entry-date">
                            <h4 class="widget-title">Postagens recentes</h4>
                            <div class="widget-post-bx">
                                <!-- item start --><div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                    <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                        <strong>20</strong>
                                        <span>Mar</span>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><a href="blog-single.html">Blog title first </a></h6>
                                        </div>
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="fa fa-user"></i>By Admin</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 28</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- end item -->
                            </div>
                        </div>
                    </div>      
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget_services">
                            <h4 class="widget-title">Links Úteis</h4>
                            <ul>
                                <li><a href="about-1.html">About</a></li>
                                <li><a href="faq-1.html">FAQ</a></li>
                                <li><a href="career.html">Career</a></li>
                                <li><a href="our-team.html">Our Team</a></li>
                                <li><a href="services.html">Services</a></li>
                                <li><a href="gallery-grid-1.html">Gallery</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- NEWSLETTER -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget widget_newsletter">
                            <h4 class="widget-title">Newsletter</h4>
                            <div class="newsletter-bx">
                                <form role="search" method="post">
                                    <div class="input-group">
                                    <input name="news-letter" class="form-control" placeholder="INSIRA SEU EMAIL" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                    </span>
                                </div>
                                    </form>
                            </div>
                        </div>
                        <!-- SOCIAL LINKS -->
                        <div class="widget widget_social_inks">
                            <h4 class="widget-title">Links Sociais</h4>
                            <ul class="social-icons social-square social-darkest">
                                <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" style="">
                    <div class="col-md-3 col-sm-6  p-tb20">
                        <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                            <div class="icon-md text-primary">
                                <span class="iconmoon-travel"></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase m-b0">Endereço</h5>
                                <p>No.123 Chalingt Gates, Supper market New York</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6  p-tb20 ">
                        <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                            <div class="icon-md text-primary">
                                <span class="iconmoon-smartphone-1"></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase m-b0">Telefone</h5>
                                <p class="m-b0">(+244) 222 026518</p>
                                <p>936802620</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 p-tb20">
                        <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                            <div class="icon-md text-primary">
                                <span class="iconmoon-email"></span>
                            </div>
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                                <p class="m-b0">info@ccaaccivil.com</p>
                                <p>support@ccaaccivil.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom overlay-wraper">
            <div class="overlay-main"></div>
            <div class="constrot-strip"></div>
            <div class="container p-t30">
                <div class="row">
                    <div class="wt-footer-bot-left">
                        <span class="copyrights-text">© <?=Date("Y")?> CCAA. Todos os direitos reservados. Projetado por <a href="http://splashink.co">Splash Ink Incorporated Systems</a>.</span>
                    </div>
                    <div class="wt-footer-bot-right">
                        <ul class="copyrights-nav pull-right"> 
                            <li><a href="javascript:void(0);">Terms  &amp; Condition</a></li>
                            <li><a href="javascript:void(0);">Privacy Policy</a></li>
                            <li><a href="contact-1.html">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>
  <div id="Login-form" class="modal fade " role="dialog">
        <div class="modal-dialog modal-sm">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title text-white">Login Your Account</h4>
                </div>
                <div class="modal-body p-a30">
                    <form id="log-form">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input class="form-control" placeholder="Enter Username" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="Enter email" type="email">
                            </div>
                        </div>
                        <button type="button" class="site-button-secondry text-uppercase btn-block m-b10">Submit</button>
                        <span class="font-12">Don't have an account? <a href="javascript:;" class="text-primary">Register Here</a></span>
                    </form>
                </div>
                <div class="modal-footer text-center">
                <div class="text-center">
                    <img src="<?=PROOT?>images/ccaa-logo.png" style="max-height: 90px;"></div>
                </div>
            </div>
        </div>
   </div>
  <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Topo</button>
  <!-- optional scripts and pluggins -->
  <?= $this->content('scripts') ?>

  <!-- Javascript files -->
  <script type="text/javascript"  src="<?=PROOT?>js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript"  src="<?=PROOT?>js/bootstrap.min.js"></script>

  <script type="text/javascript"  src="<?=PROOT?>js/bootstrap-select.min.js"></script>
  <script type="text/javascript"  src="<?=PROOT?>js/jquery.bootstrap-touchspin.min.js"></script>

  <script type="text/javascript"  src="<?=PROOT?>js/magnific-popup.min.js"></script>

  <script type="text/javascript"  src="<?=PROOT?>js/waypoints.min.js"></script>
  <script type="text/javascript"  src="<?=PROOT?>js/counterup.min.js"></script>
  <script type="text/javascript"  src="<?=PROOT?>js/waypoints-sticky.min.js"></script>

  <script type="text/javascript" src="<?=PROOT?>js/isotope.pkgd.min.js"></script>

  <script type="text/javascript"  src="<?=PROOT?>js/owl.carousel.min.js"></script>

  <script type="text/javascript"  src="<?=PROOT?>js/stellar.min.js"></script> 
  <script type="text/javascript"  src="<?=PROOT?>js/scrolla.min.js"></script>

  <script type="text/javascript"  src="<?=PROOT?>js/custom.js"></script>
  <script type="text/javascript"  src="<?=PROOT?>js/shortcode.js"></script>
  <script type="text/javascript"  src="<?=PROOT?>js/switcher.js"></script>

  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
  <script type="text/javascript" src="<?=PROOT?>plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>

  <script type="text/javascript" src="<?=PROOT?>js/rev-script-4.js"></script>

</body>