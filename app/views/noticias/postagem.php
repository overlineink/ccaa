<?php $this->start('body'); ?>
<div class="wt-bnr-inr overlay-wraper" style="background-image:url(https://images.unsplash.com/photo-1522005574800-a4365645f893?ixlib=rb-0.3.5&s=44b0ee3a65bf1af65cc9498cb0155e03&auto=format&fit=crop&w=750&q=80);">
    <div class="overlay-main bg-black opacity-06"></div>
    <div class="container">
        <div class="wt-bnr-inr-entry">
            <h1 class="text-white">Oferta para o Mês do Empreendedor.</h1>
            <p class="text-white" style="margin-top: -23px;">O nosso cliente é uma empresa de referência no setor dos seguros que se encontra de momento a recrutar...</p>
            <div class="call-to-action-left">
                <a href="/ccaa/contacto" class="site-button-secondry text-uppercase font-weight-600">
                Obter oferta<i style="margin-left: 8px;" class="fa fa-gift"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="bg-gray-light p-tb20">
    <div class="container">
        <ul class="wt-breadcrumb breadcrumb-style-2">
            <li><a href=""><i class="fa fa-home"></i>Notícias</a></li>
            <li><?=$GLOBALS['q']?></li>
        </ul>
    </div>
</div>
<div class="section-full p-t80 p-b50">
    <div class="container">
        <div class="row">
            <!-- Barra lateral ESQUERDA -->
            <div class="col-md-9">
                <div class="row">
                    <div class="portfolio-wrap wt-blog-grid-2" style="position: relative; height: 1734.89px;">
                    
                        <!-- Item -->
                         
                        <!-- end Item -->
                    </div>
                </div>
            </div>
            
            <!-- Barra lateral DIREITA -->
            <div class="col-md-3">
            
                <aside class="side-bar">
                    <!-- Newsletter -->
                    <div class="widget widget_newsletter-2 bg-white  ">
                        <h4 class="widget-title">Newsletter</h4>
                        <div class="newsletter-bx p-a30">
                            <div class="newsletter-icon">
                                <i class="fa fa-envelope-o"></i>
                            </div>
                            
                            <div class="newsletter-content">
                                <i>Digite seu e-mail e assine a nossa newsletter.</i>
                                </div>
                                <div class="m-t20">
                                <form role="search" method="post">
                                <div class="input-group">
                                    <input name="" class="form-control" placeholder="Digite seu e-mail" type="text">
                                    <span class="input-group-btn">
                                        <button type="submit" class="site-button"><i class="fa fa-paper-plane-o"></i></button>
                                    </span>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </aside>

            </div>
        </div>
    </div>
</div>
<!-- Single quote -->
<div class="call-to-action-wrap bg-dark bg-repeat" style="background-image:url(http://thewebmax.com/build/images/background/bg-4.png);">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div class="call-to-action-left p-tb20 p-r50">
                    <h4 class="text-uppercase m-b10">Estamos prontos para construir o seu sonho, conte-nos mais sobre o seu projeto</h4>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="call-to-action-right p-tb30">
                    <a href="<?=PROOT?>contacto" class="site-button-secondry text-uppercase font-weight-600">
                        Contacte-nos <i class="fa fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
     </div>
</div>
<?php $this->end(); ?>