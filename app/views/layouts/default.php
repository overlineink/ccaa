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
                      echo '<script>alert("Item Removido")</script>';  
                      echo '<script>window.location="'. PROOT .'"</script>';  
                  }  
            }  
        }  
  }  
  // Data
  $_SESSION["shopping_cart"] = array(
    ["item_id" => 1, "name" => "Capacete DQ", "price" => 3500.00, "url" => "http://thewebmax.com/build/images/cart/pic-1.jpg", "qtd" => 2],
    ["item_id" => 2, "name" => "Berbequim", "price" => 45000.00, "url" => "http://thewebmax.com/build/images/cart/pic-2.jpg", "qtd" => 1],
    ["item_id" => 3, "name" => "Capacete", "price" => 2000.00, "url" => "http://thewebmax.com/build/images/cart/pic-1.jpg", "qtd" => 12],
    ["item_id" => 4, "name" => "Berbequim ACL", "price" => 15000.00, "url" => "http://thewebmax.com/build/images/cart/pic-2.jpg", "qtd" => 8]
  );
  
  // Counting stored items
  $_count = count($_SESSION["shopping_cart"], COUNT_NORMAL);
?>
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
    <link rel="icon" href="http://getbootstrap.com/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="http://getbootstrap.com/favicon.ico" />
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
            <div class="top-bar bg-dark">
                <div class="container">
                    <div class="row">
                        <div class="clearfix">                        
                            <div class="wt-topbar-left">
                                <ul class="list-unstyled e-p-bx pull-left">
                                    <li><a href="#"><i class="fa fa-user"></i>Entrar no Sistema</a></li>
                                </ul>
                            </div>
                            <div class="wt-topbar-right">
                                <ul class="list-unstyled e-p-bx pull-right">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
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
              <img src="<?=PROOT?>images/ccaa-logo.png" width="216" height="37" alt="CCAA-LOGO" style="margin-top: -10px;"/>
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
                    <strong>Localização </strong>
                    <span>Panguila Velha, Bengo-AO</span>
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
                                if (!isset($_SESSION["shopping_cart"])) {
                                    $_SESSION['total'] = 0;
                                } else {
                                    $_total = 0;
                                    for ($x = 0; $x < count($_SESSION["shopping_cart"]); $x++) {
                                        $_total = $_total + ($_SESSION["shopping_cart"][$x]["price"] * $_SESSION["shopping_cart"][$x]["qtd"]);
                                        $_SESSION['total'] = number_format($_total, 2);
                                    }
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
            <div class="header-nav navbar-collapse collapse ">
                <ul class=" nav navbar-nav">
                    <li class="active">
                        <a href="<?=PROOT?>">Página Inicial</a>
                    </li>
                    <li>
                        <a href="">Portfolio <i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                            <li><a href="">Quem Somos</a></li>
                            <li><a href="">Nossos Serviços</a></li>
                            <li><a href="">Galeria</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="">Produtos<i class="fa fa-chevron-down"></i></a>
                        <ul class="sub-menu">
                        <li><a href="#">Roloutes</a></li>
                        <li><a href="#">Divisórias</a></li>
                        <li><a href="#">Quiosques</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?=PROOT?>noticias">Notícias</a>
                    </li>
                    <li>
                        <a href="<?=PROOT?>contactos">Contactos</a>
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
    <footer class="site-footer footer-dark" style="display: block; height: 1190px;">
        <div class="footer-top overlay-wraper">
            <div class="overlay-main"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6">  
                        <div class="widget widget_about">
                            <h4 class="widget-title">Quem somos?</h4>
                            <div class="logo-footer clearfix p-b15">
                                <a href="<?=PROOT?>"><img src="<?=PROOT?>images/ccaa-logo-w.png" width="230" height="67" alt="CCAA LOGO"></a>
                            </div>
                            <p>Somos uma empresa de direito angolano, atuando na área de construção civil
                            especializada em projetar, fabricar diferentes tipos de obras. Desde fabricação de 
                            estruturas metálicas, quiosques, (...) acabamentos e venda de matérias de construção.
                            </p>  
                        </div>
                    </div> 
                    <div class="col-md-3 col-sm-6">
                        <div class="widget recent-posts-entry-date">
                            <h4 class="widget-title">Postagens recentes</h4>
                            <div class="widget-post-bx">
                                <!-- item start --><div class="bdr-light-blue widget-post clearfix  bdr-b-1 m-b10 p-b10">
                                    <div class="wt-post-date text-center text-uppercase text-white p-t5">
                                        <strong><?=date("d")?></strong>
                                        <span><?=date("M")?></span>
                                    </div>
                                    <div class="wt-post-info">
                                        <div class="wt-post-header">
                                            <h6 class="post-title"><a href="<?=PROOT?>">Postagem 1</a></h6>
                                        </div>
                                        <div class="wt-post-meta">
                                            <ul>
                                                <li class="post-author"><i class="fa fa-user"></i>Por CCAA</li>
                                                <li class="post-comment"><i class="fa fa-comments"></i> 0</li>
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
                                <li><a href="#">Quem somos?</a></li>
                                <li><a href="#">Nossos Serviços</a></li>
                                <li><a href="#">Galeria</a></li>
                                <li><a href="#">Loja online</a></li>
                                <li><a href="<?=PROOT?>contactos">Contactos</a></li>
                                <li><a href="">FAQ</a></li>
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
                                <li><a href="https://www.facebook.com/ccaconstrucaocivil/" class="fa fa-facebook"></a></li>
                                <li><a href="https://www.instagram.com/ccaa.construcaocivil/" class="fa fa-instagram"></a></li>
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
                                <p>Panguila Velha, Junto a Escola Primária, Bengo-AO</p>
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
                                <p class="m-b0"><a href="tel://+244222026518">(+244) 222 026518</a></p>
                                <p><a href="tel://936802620">(+244) 936 802 620</a></p>
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
                                <p class="m-b0"><a href="mailto:info@ccaaccivil.com">info@ccaaccivil.com</a></p>
                                <p><a href="mailto:support@ccaaccivil.com">support@ccaaccivil.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom overlay-wraper">
            <div class="overlay-main"></div>
            <div class="constrot-strip bg-dark"></div>
            <div class="container p-t30">
                <div class="row">
                    <div class="wt-footer-bot-left">
                        <span class="copyrights-text">© <?=Date("Y")?> CCAA. Desenvolvido por <a href="http://splashink.co">Splash Ink Incorporated Systems</a>.</span>
                    </div>
                    <div class="wt-footer-bot-right">
                        <ul class="copyrights-nav pull-right"> 
                            <li><a href="#">Termos  &amp; Condições</a></li>
                            <li><a href="#">Política de Privacidade</a></li>
                            <li><a href="<?=PROOT?>contactos">Fale conosco</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  </div>
  <button class="scroltop"><span class=" iconmoon-house relative" id="btn-vibrate"></span>Topo</button>
  <!-- optional scripts and pluggins -->
  <?= $this->content('scripts') ?>

  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz6xX2nI6cMkePba_DHQcs0MkR7m2IuvE&callback=initMap"  type="text/javascript"></script>
  <script type="text/javascript"  src="<?=PROOT?>js/map.script.js"></script>
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
</html>